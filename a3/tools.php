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

    $seatPricesJSON = json_encode($seatPrices);

//PHP Functions

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

    function updateBookingSheet($movID, $movDay, $movHour){
        echo "document.getElementById('movie_id').value=" . $movID . ";";
        echo "document.getElementById('movie_day').value=" . $movDay . ";";
        echo "document.getElementById('movie_hour').value=" . $movHour . ";";

        echo "document.getElementById('bookingsTitle').innerHTML = '<h3>' . $movID . '</h3><h3>' . $movDay . ' - ' . $movHour . ':00</h3>'";
    }

    function getSeatArray(){
        echo "var seats[0] = document.getElementByID('seats[STA]');" . "\r\n";
        echo "var seats[1] = document.getElementByID('seats[STP]');" . "\r\n";
        echo "var seats[2] = document.getElementByID('seats[STC]');" . "\r\n";
        echo "var seats[3] = document.getElementByID('seats[FCA]');" . "\r\n";
        echo "var seats[4] = document.getElementByID('seats[FCP]');" . "\r\n";
        echo "var seats[5] = document.getElementByID('seats[FCC]');" . "\r\n";
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