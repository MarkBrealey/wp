<?php include 'tools.php'?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment 3 - s3738237</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
    <script src='../wireframe.js'></script>
</head>

<body>
<header>
    <div id="logoContainer">
        <div id=logoIcon>
            <img height="150" src="../../media/CinemaLogo.png">
        </div>
        <div id="logoTitle">
            <h1>Lunardo Cinemas</h1>
        </div>
    </div>
</header>

<nav>
    <div id="navBar" class="navLinks">
        | <a href="#aboutUs">ABOUT US</a> | <a href="#seatsAndPricing">SEATS & PRICING</a> | <a href="#nowShowing">NOW
            SHOWING</a> | <a href="#bookings">BOOKINGS</a> |
    </div>
</nav>

<main>
    <section id="aboutUs">
        <h2>About Lunardo Cinemas</h2>
        <div id="aboutUsContainer">
            <p>
                Lunardo Cinemas makes its return this Summer with a fresh new look, sound, and feel.
            </p>
            <p>
                We welcome you to come see and enjoy our brand new Cinemas, all with full 3D Dolby Vision Projection and Dolby Atmos Sound.<br>
                All cinemas now feature all new seating - Including our premium First Class Seats.
            </p>
            <p>
                Book your tickets online and come and enjoy the latest and greatest films, all in the comfort of your own home town.
            </p>
        </div>
    </section>

    <section id="seatsAndPricing">
        <h2>Seats and Pricing</h2>
        <div id="seatAndPricingDiv">
            <div class="headingContainers">
                <div class="pricingDiv">
                    <h4>SEATS</h4>
                </div>
                <div class="pricingDiv">
                    <h4>All day Monday, Wednesday<BR>AND 12pm Weekdays</h4>
                </div>
                <div class="pricingDiv">
                    <h4>All Other Times<br></h4>
                </div>
            </div>
            <div class="pricingContainer">
                <div class="pricingDiv">
                    <p>
                        Standard Adult<br>
                        Standard Concession<br>
                        Standard Child
                    </p>
                    <p>
                        First Class Adult<br>
                        First Class Concession<br>
                        First Class Child
                    </p>
                </div>
                <div class="pricingDiv">
                    <p>
                        $14.00<br>
                        $12.50<br>
                        $11.00
                    </p>
                    <p>
                        $24.00<br>
                        $22.50<br>
                        $21.00<br>
                    </p>
                </div>
                <div class="pricingDiv">
                    <p>
                        $19.80<br>
                        $17.50<br>
                        $15.30
                    </p>
                    <p>
                        $30.00<br>
                        $37.00<br>
                        $24.00
                    </p>
                </div>
            </div>
        </div>

        <div id="seatContainer">
            <div id="seatCenterDiv">
                <div class="pricingDiv">
                    <img width=350px src="../../media/538.jpg">
                </div>
                <div class="pricingDiv">
                    <img width=350px src="../../media/Verona-Twin.png">
                </div>
            </div>
            <div id="seatCenterDiv">
                <div class="pricingDiv">
                    <h4>Lunardos new Standard Seating</h4>
                </div>
                <div class="pricingDiv">
                    <h4>Lunardos new First Class Recliners</h4>
                </div>
            </div>
        </div>
    </section>

    <section id="nowShowing">
        <h2>Now Showing</h2><br>
        <div id="nowShowingDiv">
            <?php showMovies($moviesObject); ?>
        </div>

        <div id = "synopsisDiv" class=synopsisDiv style="visibility: hidden">
                <h2 id="movieTitle">Blank Heading</h2>
                <div class=synopsisCenterDiv>
                    <div class="plotDiv">
                        <h3>Plot Description</h3>
                        <p id="plotDescription">Blank Plot</p>
                    </div>
                    <div id ="movieTrailer" class="previewVideo">
                        <iframe src="https://www.youtube.com/embed/XKMSP9OKspQ" frameborder="0"
                                style="position: relative; height: 100%; width: 100%;"></iframe>
                    </div>
                </div>
                <h2>Make a Booking</h2>
                <div id = "movieTimes" class="sessionsDiv">
                </div>
        </div>
    </section>

    <section id="bookings">
        <div id="bookingsDiv" style="visibility: visible">
        <h2>Bookings</h2><br>

        <form method="post" target="_self" action="index.php"
              onsubmit="return formValidate();">
            <?php if(!empty($_POST)){resetValues();}?>
            <input type="hidden" name="movie[id]" id= "movie_id" value="">
            <input type="hidden" name="movie[day]" id="movie_day" value="">
            <input type="hidden" name="movie[hour]" id="movie_hour" value="">
            <input type="hidden" name="movie[title]" id="movie_title" value="">

            <div class="bookingDiv">
                <div id="bookingsTitle">
                </div>
                <div id="bookingCentreDiv" class=bookingCenterDiv style="visibility: hidden">
                    <div class="ticketsDiv">
                        <div class="ticketsSubDiv">
                            <h4>Standard Tickets</h4>
                            <p>Adults:
                                <select onchange='updatePricing()'  id=seats[STA] name=seats[STA]>
                                    <option value="">Please Select</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                                <?php echo isset($errors['seats']['STA']) ?  "<p class='error'>" . $errors['seats']['STA'] . "</p>" : ""; ?>
                            </p>
                            <p>Concession:
                                <select onchange='updatePricing()'  id=seats[STP] name=seats[STP]>
                                    <option value="">Please Select</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                                <?php echo isset($errors['seats']['STP']) ?  "<p class='error'>" . $errors['seats']['STP'] . "</p>" : ""; ?>
                            </p>
                            <p>Children:
                                <select onchange='updatePricing()'  id=seats[STC] name=seats[STC]>
                                    <option value="">Please Select</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                                <?php echo isset($errors['seats']['STC']) ?  "<p class='error'>" . $errors['seats']['STC'] . "</p>" : ""; ?>
                            </p>
                        </div>
                        <div class="ticketsSubDiv">
                            <h4>First Class Tickets</h4>
                            <p>Adults:
                                <select onchange='updatePricing()'  id="seats[FCA]" name=seats[FCA]>
                                    <option value="">Please Select</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                                <?php echo isset($errors['seats']['FCA']) ?  "<p class='error'>" . $errors['seats']['FCA'] . "</p>" : ""; ?>
                            </p>
                            <p>Concession:
                                <select onchange='updatePricing()' id="seats[FCP]" name=seats[FCP]>
                                    <option value="">Please Select</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                                <?php echo isset($errors['seats']['FCP']) ?  "<p class='error'>" . $errors['seats']['FCP'] . "</p>" : ""; ?>
                            </p>
                            <p>Children:
                                <select onchange='updatePricing()' cols="50" id=seats[FCC] name=seats[FCC]>
                                    <option value="">Please Select</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                                <?php echo isset($errors['seats']['FCC']) ?  "<p class='error'>" . $errors['seats']['FCC'] . "</p>" : ""; ?>
                            </p>
                        </div>
                        <div class="ticketsSubDiv">
                            <p>
                                Total: <input id="pricingTotal" name="total" value="0.00" type=text rows="1" cols="50"></input><br>
                                <?php echo isset($errors['seats']['TotalSeats']) ? "<span class='error'>" . $errors['seats']['TotalSeats'] . "</span>": ""; ?>
                            </p>
                        </div>
                    </div>
                    <div class="custDetailsDiv">
                        <h4>Your Details</h4>
                        <p>Name: <input id="cust[name]" name="cust[name]" pattern = "[A-Za-Z]" placeholder="Firstname Lastname" type=text rows="1" cols="80"></input></p>
                        <?php echo isset($errors['cust']['name']) ?  "<p class='error'>" . $errors['cust']['name'] . "</p>" : ""; ?>
                        <p>e-Mail: <input id="cust[email]" name="cust[email]" type=email placeholder="example@email.com" rows="1" cols="80"></input></p>
                        <?php echo isset($errors['cust']['email']) ?  "<p class='error'>" . $errors['cust']['email'] . "</p>" : ""; ?>
                        <p>Mobile: <input id="cust[mobile]" name="cust[mobile]" pattern="^0?[4-5](\s*[0-9]\s*){8}$" placeholder="04XX XXX XXX" type=tel rows="1" cols="80"></input></p>
                        <?php echo isset($errors['cust']['mobile']) ?  "<p class='error'>" . $errors['cust']['mobile'] . "</p>" : ""; ?>
                        <p>Credit Card: <input id="cust[card]" name="cust[card]" placeholder="XXXX XXXX XXXX XXXX" pattern="\d{4}-?\d{4}-?\d{4}-?\d{4}" type=text rows="1" cols="80"></input></p>
                        <?php echo isset($errors['cust']['card']) ?  "<p class='error'>" . $errors['cust']['card'] . "</p>" : ""; ?>
                        <p>Expiry: <input id="cust[expiry]" name="cust[expiry]" type=month min=validateExpiry() rows="1" cols="80"></input></p>
                        <?php echo isset($errors['cust']['expiry']) ?  "<p class='error'>" . $errors['cust']['expiry'] . "</p>" : ""; ?>

                        <p><input type="checkbox" onchange=groupTicket() name = "cust[groupticket]" id="ind_ticket"> Print group ticket?</p>
                        <input type="hidden" name="cust[groupticket]" id="group_ticket" value="">
                        <p>
                            <button class="bookingButton" id="orderButton">ORDER</button>
                        </p>
                    </div>
                </div>
            </div>
        </form>
    </section>
</main>
<footer>
    <div class="footerContainer">
        <div><p>
                Lunardo Cinemas<br>
                (03) 9755 1234<br>
                inquiries@lunardocinemas.com.au
            </p>
        </div>
        <div>
            <p>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web
                Programming course at RMIT University in Melbourne, Australia.</p>
            <p>
                &copy;<script>document.write(new Date().getFullYear());</script>
                Mark Brealey - s3738237 - RMIT University
                2019 <?= date("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.<br>
                <a href="https://github.com/MarkBrealey/wp">Github Repository</a>
            </p>
        </div>
    </div>
    <div>
        <button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button>
    </div>
</footer>

<!-- This code adapted from https://www.w3schools.com/howto/howto_js_navbar_sticky.asp --!>
<script>
    window.onscroll = function() {
        stickyNav()
        let navlinks = document.getElementsByClassName("navLinks")[0].children;
        let sections = document.getElementsByTagName("main")[0].children;

        for (i=1; i<navlinks.length; i++){
            let prev = sections[i-1].getBoundingClientRect().top;
            let next = sections[i].getBoundingClientRect().top;
            let last = sections[sections.length-1].getBoundingClientRect().top;

            if (last <= 0){
                for (x=0; x<navlinks.length;x++){
                    navlinks[x].classList.remove("activeLink");
                }
                navlinks[i].classList.add("activeLink")
            }else{
                if (prev <=0 && next > 0){
                    for (y=0; y<navlinks.length;y++){
                        navlinks[y].classList.remove("activeLink");
                    }
                    navlinks[i-1].classList.add("activeLink")
                }
            }
        }
    };

    let nav = document.getElementById("navBar");
    let sticky = nav.offsetTop;


    function stickyNav() {
        if (window.pageYOffset >= sticky) {
            nav.classList.add("sticky")
        } else {
            nav.classList.remove("sticky");
        }
    }

    function groupTicket(){
        var x = document.getElementById("ind_ticket").checked;
        document.getElementById("group_ticket").value = x;
    }

    function updateSynopsis(movieID, movieTitle, moviePlotDescription, movieTrailerURL, moviePosterLink, movieRating, movieScreenings) {
        //Setting the Synopsis Box to visible
        document.getElementById("synopsisDiv").style.visibility="visible";
        //
        document.getElementById("movieTitle").innerHTML=movieTitle;
        document.getElementById("plotDescription").innerHTML=moviePlotDescription;
        document.getElementById("movieTrailer").innerHTML="<iframe src=" + movieTrailerURL + ' frameborder="0" style="position: relative; height: 100%; width: 100%;"></iframe>"';
        document.getElementById("movieTimes").innerHTML="";
        for (i=0; i<movieScreenings.length; i++)
        {
            document.getElementById("movieTimes").innerHTML += "<button class='bookingButton' onclick=updateBookingFields('" + movieID + "','" + movieTitle + "','" + movieScreenings[i]['day'] + "','" + movieScreenings[i]['hour'] + "')>" + movieScreenings[i]['day']  + " - " +
                "" + movieScreenings[i]['hour'] + ":00</button>";}

    }

    function updateBookingFields(movieID, movieTitle, movieDay, movieHour){
        //Setting the Synopsis Box to visible
        document.getElementById("bookingCentreDiv").style.visibility="visible";
        document.getElementById("movie_id").value = movieID;
        document.getElementById("movie_day").value = movieDay;
        document.getElementById("movie_hour").value = movieHour;
        document.getElementById("movie_title").value = movieTitle;

        document.getElementById("bookingsTitle").innerHTML = "<h3>" + movieTitle + "</h3><h3>" + movieDay + " - " + movieHour + ":00</h3>";
    }

    function validateExpiry(){
        var dateToday = new Date();

        var minMonth = dateToday.getMonth() +1;
        var minYear = dateToday.getFullYear();

        var minDate = minYear + '-' + minMonth;
        console.log(minDate);

        return minDate;
    }

    function updatePricing(){
        //Setting the total value to zero before calculation
        document.getElementById("pricingTotal").value = 0;

        //getting the Day and Time
        var day = document.getElementById("movie_day").value;
        var hour = document.getElementById("movie_hour").value;

        //Getting all seat select fields
        var seats = [document.getElementById('seats[STA]'),document.getElementById('seats[STP]'), document.getElementById('seats[STC]'), document.getElementById('seats[FCA]'), document.getElementById('seats[FCP]'), document.getElementById('seats[FCC]')];

        //Getting seat prices
        var pricing = <?php echo json_encode($seatPrices) ?>

        for (i=0;i<seats.length;i++){
            var a = seats[i];
            var seatQty = a.options[a.selectedIndex].value;

            var seatCode = seats[i].attributes['name'].value.substr(6).slice(0,-1);

            if (isDiscounted(day,hour)){
                var seatPrice = pricing['Discount'][seatCode];
            }else{
                var seatPrice = pricing['Full'][seatCode];
            }

            document.getElementById("pricingTotal").value = parseFloat(document.getElementById("pricingTotal").value) + parseFloat(seatQty * seatPrice);

        }
    }

    function isDiscounted(day, time){
        if (day=="MON" || day == "WED" || time == "12"){
            if (day != "SUN" && day!= "SAT"){
                discount = true;
                return discount;
            }else{
                discount = false;
                return discount;
            }
        }else{
            discount = false;
            return discount;
        }
    }

</script>

<!--Debug Module--!>
<?php
echo "<p>Contents of POST:</p>";
preShow($_POST);
echo "<p>Contents of GET:</p>";-
preShow($_GET);
echo "<p>Contents of SESSION:</p>";
preShow($_SESSION);
echo "<p>PAGE CODE:</p>";
printMyCode();
?>

</body>
</html>
