<?php
session_start();

$seatTypes = [
    'STA'=> 'Standard Adult',
    'STP' => 'Standard Concession',
    'STC' => 'Standard Child',
    'FCA' => 'First Class Adult',
    'FCP' => 'First Class Concession',
    'FCC' => 'First Class Child'];

$seatPrices = [
    'Discount' =>[
        'STA'=>'14.00',
        'STP' => '12.50',
        'STC' => '11.00',
        'FCA' => '24.00',
        'FCP' => '22.50',
        'FCC' => '21.00'
    ],
    'Full' => [
        'STA'=>'19.00',
        'STP' => '17.50',
        'STC' => '15.30',
        'FCA' => '30.00',
        'FCP' => '27.50',
        'FCC' => '24.00'
    ]
];
?>

<?php
    foreach ($_SESSION['cart'] as $order => $object){
    echo "<html>";
    echo "<link id='stylecss' type='text/css' rel='stylesheet' href='css/style.css'>";
    echo "<head>";
    echo "<div>";
    echo "<h1>LUNARDO CINEMAS</h1>";
    echo "<p>ABN: 00 123 456 789</p>";
    echo "</div>";
    echo "</head>";
    echo "<body>";

        echo "<div>";
        echo "<h2>TAX INVOICE:</h2>";
        echo "<p>" . $_SESSION['cart'][$order]['cust']['name'] . "<br>"
                    . $_SESSION['cart'][$order]['cust']['email'] . "<br>"
                    . $_SESSION['cart'][$order]['cust']['mobile'] . "</p>";
        echo "</div>";
        echo "<div>";
        echo "<h2> MOVIE BOOKED: " . $_SESSION['cart'][$order]['movie']['title'] . "</h2>";
        echo "<h3>Session Time: " . $_SESSION['cart'][$order]['movie']['day'] . " - " . $_SESSION['cart'][$order]['movie']['hour'] . ":00</h3>";
        echo "</div>";

        //Is the session discounted?
        $day = $_SESSION['cart'][$order]['movie']['day'];
        $time = $_SESSION['cart'][$order]['movie']['hour'];
        if ($day=="MON" || $day == "WED" || $time == "12"){
            if ($day != "SUN" && day!= "SAT"){
                $discount = true;
            }else{
                $discount = false;
            }
        }else{
            $discount = false;
        }

        //Calculating and outputting Seats and Prices
        echo "<table width='500px'>";
            $TotalPrice = 0;
            foreach ($object['seats'] as $seatTypeCode => $count) {
                if ($count) {
                    if ($discount){
                        $ticketPrice = $seatPrices['Discount'][$seatTypeCode];
                        $TotalPrice += $ticketPrice*$count;
                    }else{
                        $ticketPrice = $seatPrices['Full'][$seatTypeCode];
                        $TotalPrice += $ticketPrice*$count;
                    }
                    echo "<tr><th width='250px'>" . $seatTypes[$seatTypeCode] . ' x ' . $count ."</th>
                            <th width='50px'></th><th>". "$" . number_format($ticketPrice*$count,2) . "</th></tr>";
                }
            }
            echo "<tr><th width='250px'>GST: </th>" . "<th width=50px>" . "<th>$" . number_format($TotalPrice*(1/11),2) . "</th></tr>";
            echo "<tr><th width='250px'>Total Price: </th>" . "<th width=50px>" . "<th>$" . number_format($TotalPrice,2) . "</th></tr>";

        echo "</table>";


        //Printing Tickets
        echo "<div>";
        echo "<h2>TICKETS:</h2>";
        if ($_SESSION['cart'][$order]['cust']['groupticket']) {
            echo "<table class='ticket2' width='800'>";
            echo "<tr>";
            echo "<th><h2>Lunardo Cinemas</h2></th>";
            echo "</tr>";
            echo "<tr>";
            echo "<th width='300px'><h3>". $_SESSION['cart'][$order]['movie']['title'] ."</h3></th>";
            echo "<th><h3>" . $_SESSION['cart'][$order]['movie']['day'] . " - " . $_SESSION['cart'][$order]['movie']['hour']. ":00</h3></th>";
            echo "</tr>";
            echo "<tr>";
            foreach ($object['seats'] as $seatTypeCode => $count) {
                if ($count) {
                    echo "<tr><th width='250px'>" . $seatTypes[$seatTypeCode]. "</th>
                            <th width='50px'>". $count ." Seats</th><th></th></tr>";
                }
            }
        }
        else{
            foreach ($object['seats'] as $seatTypeCode => $count) {
                $countdown = $count;
                for ($i = $countdown; $i==0; $i--){
                    if ($count) {
                        echo "<table class='ticket2' width='800'>";
                        echo "<tr>";
                        echo "<th><h2>Lunardo Cinemas</h2></th>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<th width='300px'><h3>" . $_SESSION['cart'][$order]['movie']['title'] . "</h3></th>";
                        echo "<th><h3>" . $_SESSION['cart'][$order]['movie']['day'] . " - " . $_SESSION['cart'][$order]['movie']['hour'] . ":00</h3></th>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<tr><th width='250px'>" . $seatTypes[$seatTypeCode] . "</th><th width='50px'></th><th></th></tr>";
                    }
                }
            }
        }

        echo "</div>";
    }
    echo "</body>";
    echo "</html>";
    ?>
