<?php
    session_start();

// Put your PHP functions and modules here
// Objects / Arrays

    $moviesObject = [
        'ACT' => [
            'poster' => '../../media/spider.jpg',
            'title' => 'The Girl in the Spiders Web',
            'rating' => 'R',
            'description' => 'Claire Foy is the Girl in the Spiders Web.&#8203;Watch the trailer for the next chapter of the Dragon Tattoo series now.&#8203;In theaters November Ninth',
            'video' => 'https://www.youtube.com/embed/XKMSP9OKspQ',
            'screenings' => [
                ['day' => 'WED', 'hour' => '21'],
                ['day' => 'THU', 'hour' => '21'],
                ['day' => 'FRI', 'hour' => '21'],
                ['day' => 'SAT', 'hour' => '18'],
                ['day' => 'SUN', 'hour' => '18'],
            ],
        ],
        'RMC' => [
            'poster' => '../../media/starborn.jpg',
            'title' => 'A Star is Born',
            'rating' => 'R',
            'description' => 'Seasoned musician Jackson Maine (Bradley Cooper)&#8203;discovers-and falls in love with-struggling artist Ally (Gaga).&#8203;She has just about given up on her dream to make it big as a&#8203;singer - until Jack coaxes her into the spotlight.&#8203;But even as Allys career takes off, the personal side of&#8203;their relationship is breaking down,&#8203;as Jack fights an ongoing battle with&#8203;his own internal demons',
            'video' => 'https://www.youtube.com/embed/XKMSP9OKspQ',
            'screenings' => [
                ['day' => 'MON', 'hour' => '18'],
                ['day' => 'TUE', 'hour' => '18'],
                ['day' => 'SAT', 'hour' => '15'],
                ['day' => 'SUN', 'hour' => '15'],
            ],
        ],
        'ANM' => [
            'poster' => '../../media/wreckitralph.jpg',
            'title' => 'Ralph breaks the Internet',
            'rating' => 'G',
            'description' => 'Taking place six years after saving the arcade from&#8203;Turbos vengeance, the Sugar Rush arcade cabinet&#8203;has broken, forcing Ralph and Vanellope to travel to&#8203;the Internet via the newly-installed WiFi router&#8203;in Litwaks Arcade to retrieve the piece capable&#8203;of saving the game',
            'video' => 'https://www.youtube.com/embed/XKMSP9OKspQ',
            'screenings' => [
                ['day' => 'MON', 'hour' => '12'],
                ['day' => 'TUE', 'hour' => '12'],
                ['day' => 'WED', 'hour' => '18'],
                ['day' => 'THU', 'hour' => '18'],
                ['day' => 'FRI', 'hour' => '18'],
                ['day' => 'SAT', 'hour' => '12'],
                ['day' => 'SUN', 'hour' => '12'],
            ],
        ],
        'AHF' => [
            'poster' => '../../media/boyerased.jpg',
            'title' => 'Boy Erased',
            'rating' => 'M',
            'description' => 'The son of a Baptist preacher is forced to &#8203; participate in a church-supported gay conversion program after&#8203;being forcibly outed to his parents',
            'video' => 'https://www.youtube.com/embed/XKMSP9OKspQ',
            'screenings' => [
                ['day' => 'WED', 'hour' => '12'],
                ['day' => 'THU', 'hour' => '12'],
                ['day' => 'FRI', 'hour' => '12'],
                ['day' => 'SAT', 'hour' => '21'],
                ['day' => 'SUN', 'hour' => '21'],
            ],
        ],
    ];

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

    $seatTypes = [
    'STA'=> 'Standard Adult',
    'STP' => 'Standard Concession',
    'STC' => 'Standard Child',
    'FCA' => 'First Class Adult',
    'FCP' => 'First Class Concession',
    'FCC' => 'First Class Child'];

//Validation and Sanitising

if (!empty($_POST)){
    $errors = array();

    ////Sanitising Data
    $_POST["cust"]["name"] = filter_var($_POST["cust"]["name"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
    $_POST["cust"]["email"] = filter_var($_POST["cust"]["email"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
    $_POST["cust"]["mobile"] = filter_var($_POST["cust"]["mobile"], FILTER_SANITIZE_NUMBER_INT);
    $_POST["cust"]["card"] = filter_var($_POST["cust"]["card"], FILTER_SANITIZE_NUMBER_INT);
    $_POST["cust"]["expiry"] = filter_var($_POST["cust"]["expiry"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
    $_POST["cust"]["groupticket"] = filter_var($_POST["cust"]["groupticket"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

    $_POST['movie']['id'] = filter_var($_POST['movie']['id'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
    $_POST['movie']['day'] = filter_var($_POST['movie']['day'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
    $_POST['movie']['hour'] = filter_var($_POST['movie']['hour'], FILTER_SANITIZE_NUMBER_INT);
    $_POST['movie']['title'] = filter_var($_POST['movie']['title'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

    foreach ($seatTypes as $seatTypeCode => $seatTypeName) {
        $_POST['seats'][$seatTypeCode] = filter_var($_POST['seats'][$seatTypeCode], FILTER_SANITIZE_NUMBER_INT);
    }

    //Checking customer details
    if (empty($_POST["cust"]["name"]) || !preg_match('/^[A-Z]\'?[- a-zA-Z]+$/', $_POST["cust"]["name"])){
        echo "";
        $errors["cust"]["name"] = "Please enter a name or a proper name";
    }
    if (empty($_POST["cust"]["email"]) || !preg_match('/[a-zA-Z0-9]+@[a-zA-Z0-9]+(.[a-zA-Z0-9]+)+/', $_POST["cust"]["email"]) ){
        $errors["cust"]["email"] = "Please enter a valid email address";
    }
    if (empty($_POST["cust"]["mobile"]) || !preg_match('/^0?[4-5](\s*[0-9]\s*){8}$/', $_POST["cust"]["mobile"]) ){
        $errors["cust"]["mobile"] = "Please enter an Australian mobile number";
    }
    if (empty($_POST["cust"]["card"]) || !preg_match('/\d{4}-?\d{4}-?\d{4}-?\d{4}/', $_POST["cust"]["card"]) ){
        $errors["cust"]["card"] = "Please enter a valid Credit Card Number";
    }

    //Checking and validating expiry

    if (!empty($_POST['cust']['expiry'])) {
        $cardExp = $_POST['cust']['expiry'];
        $cardExp = explode('-', $cardExp);
        $year = $cardExp[0];
        $month = $cardExp[1];

        if (!($year < date("Y"))) { //YEAR IS NOT LESS THAN CURRENT YEAR
            if ($month <= date('m')){ //MONTH IS EQUAL TO OR LESS THAN CURRENT MONTH
                $errors["cust"]["expiry"] = "Please enter valid Expiry Year";;
            }
        } else {
            $errors["cust"]["expiry"] = "Please enter valid Expiry Year";;
        }
    }

    if (empty($_POST["cust"]["expiry"])){
        $errors["cust"]["expiry"] = "Please enter an Expiry Date";
    }

    // Checking Seat inputs
    if ($_POST['seats']['STA'] > 0 || $_POST['seats']['STP'] > 0 || $_POST['seats']['STC'] > 0 ||
            $_POST['seats']['FCA'] > 0 || $_POST['seats']['FCP'] > 0 || $_POST['seats']['FCC'] > 0){
        if (!preg_match('/[0-9]{0,2}/', $_POST["seats"]["STA"])) {
            $errors["seats"]["STA"] = "Please select a valid input for Standard Seating.";
        }
        if (!preg_match('/[0-9]{0,2}/', $_POST["seats"]["STP"])) {
            $errors["seats"]["STP"] = "Please select a valid input for Standard Concession.";
        }
        if (!preg_match('/[0-9]{0,2}/', $_POST["seats"]["STC"])) {
            $errors["seats"]["STC"] = "Please select a valid input for Standard Children.";
        }
        if (!preg_match('/[0-9]{0,2}/', $_POST["seats"]["FCA"])) {
            $errors["seats"]["FCA"] = "Please select a valid input for First Class Seating.";
        }
        if (!preg_match('/[0-9]{0,2}/', $_POST["seats"]["FCP"])) {
            $errors["seats"]["FCP"] = "Please select a valid input for First Class Concession.";
        }
        if (!preg_match('/[0-9]{0,2}/', $_POST["seats"]["FCC"])) {
            $errors["seats"]["FCC"] = "Please select a valid input for First Class Children.";
        }
    }else{
        $errors["seats"]["TotalSeats"] = "Please select at least one seat.";
    }

    //Setting fields to previous values.

    //Submitting Data to SESSION
    if (count($errors)== 0){
        //Set information from POST to SESSION
        $_SESSION['cart'][] = $_POST;
        //WRITE TO FILE
        /**
        $fp = fopen('bookings.csv', 'w');
        foreach ($_SESSION['cart'] as $order) {
            foreach ($order['seats'] as $seatTypeCode => $count) {
                if ($count) {
                    echo $seatTypes[$seatTypeCode] . ' x ' . $count;
                    $booking = [$_SESSION['cart'][$key]['cust']['name'], $_SESSION['cart'][$key]['cust']['email'],
                        $_SESSION['cart'][$key]['cust']['mobile'], $seatTypes[$seatTypeCode], $count,
                        $_SESSION['cart'][$key]['movie']['id'], $_SESSION['cart'][$key]['movie']['day'],
                        $_SESSION['cart'][$key]['movie']['hour']];
                    fputcsv($fp, $booking);

                }
            }
        }
        fclose($fp);
         **/
        header("Location: receipt.php");
    }
}

//PHP Functions

function resetValues(){
    //Resetting Booking field movie data
    echo "document.getElementById('bookingCentreDiv').style.visibility='visible'";
    echo "document.getElementById('movie_id').value = " . $_POST['movie']['id'] . ";";
    echo "document.getElementById('movie_day').value = " . $_POST['movie']['day'] . ";";
    echo "document.getElementById('movie_hour').value = " . $_POST['movie']['hour'] . ";";
    echo "document.getElementById('movie_title').value = " . $_POST['movie']['title'] . ";";
    echo "document.getElementById('bookingsTitle').innerHTML = '<h3>'" . $_POST['movie']['title'] . "'</h3><h3>'" . $_POST['movie']['day'] . " - " . $_POST['movie']['hour'] . ":00</h3>";
    //Resetting ticket Fields
    echo "document.getElementById('seats[STA]').value = " . $_POST['seats']['STA'] . ";";
    echo "document.getElementById('seats[STP]').value = " . $_POST['seats']['STP'] . ";";
    echo "document.getElementById('seats[STC]').value = " . $_POST['seats']['STC'] . ";";
    echo "document.getElementById('seats[FCA]').value = " . $_POST['seats']['FCA'] . ";";
    echo "document.getElementById('seats[FCP]').value = " . $_POST['seats']['FCP'] . ";";
    echo "document.getElementById('seats[FCC]').value = " . $_POST['seats']['FCC'] . ";";
    //Resetting Customer Details
    echo "document.getElementById('cust[name]').value = " . $_POST['cust']['name'] . ";";
    echo "document.getElementById('cust[email]').value = " . $_POST['cust']['email'] . ";";
    echo "document.getElementById('cust[mobile]]').value = " . $_POST['cust']['mobile'] . ";";
    echo "document.getElementById('cust[card]').value = " . $_POST['cust']['card'] . ";";
    echo "document.getElementById('cust[expiry]').value = " . $_POST['cust']['expiry'] . ";";
}

    function showMovies($moviesObject)
    {
        foreach ($moviesObject as $movieCode => $movie)  {
            echo "<div class='moviePosterDiv' onclick=updateSynopsis('" . $movieCode . "','" .
                htmlentities(str_replace(' ', '&nbsp;', $movie['title']), ENT_QUOTES) . "','" .
                htmlentities(str_replace(' ', '&nbsp;', $movie['description']), ENT_QUOTES), "','"
                . $movie['video'] . "','"
                . $movie['poster'] . "','"
                . $movie['rating'] . "',"
                . str_replace('"',"'", json_encode($movie['screenings'])) . ')>' . " \r\n ";
            echo "<img width=80% src=" . $movie['poster'] . ">" . " \r\n ";
            echo "<h3>" . $movie['title'] . " (" . $movie['rating'] . ")" . "</h3>" . " \r\n ";
            echo "<p>Sessions:</p>" . " \r\n ";
            foreach ($movie['screenings'] as $screening) {
                echo "<p>" . $screening['day'] . " - " . $screening['hour'] . "</p>"  . " \r\n ";
            }
            echo "</div>"  . " \r\n ";
        }
    }

    function updateMovieDetails($movID)
    {
        //Updating the Synopsis Box
        echo 'document.getElementById("movieTitle").innerHTML="' . $movID["title"] . '"';
        echo 'document.getElementById("plotDescription").innerHTML="' . $movID["description"] . '"';
        echo 'document.getElementById("movieTrailer").innerHTML="<iframe src="' . $movID["video"] . '" frameborder="0" style="position: relative; height: 100%; width: 100%;"></iframe>"';
        foreach($movID['screenings'] as $screening)
        {
            echo '<button class="bookingButton" onclick="updateBooking(' . $movID . ', ' . $screening['day'] . ', ' . $screening['hour'] .');">' . $screening['day'] . " - " . $screening['hour'] . ":00".'</button>';
        };
    }

//Supplied Functions

    function preShow( $arr, $returnAsString=false ) {
        $ret  = '<pre>' . print_r($arr, true) . '</pre>';
        if ($returnAsString)
            return $ret;
        else
            echo $ret;
    }

    function printMyCode() {
        $lines = file($_SERVER['SCRIPT_FILENAME']);
        echo "<pre class='mycode'><ol>";
        foreach ($lines as $line)
            echo '<li>'.rtrim(htmlentities($line)).'</li>';
        echo '</ol></pre>';
    }

    function php2js( $arr, $arrName ) {
        $lineEnd="";
        echo "<script>\n";
        echo "  var $arrName = ".json_encode($arr, JSON_PRETTY_PRINT);
        echo "</script>\n\n";
    }
?>