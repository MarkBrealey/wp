<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment 2 - s3738237</title>

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
        <div id = "navbar" class="navLinks">
            <a href="#aboutUs">ABOUT US</a> - <a href="#seatsAndPricing">SEATS & PRICING</a> - <a href="#nowShowing">NOW SHOWING</a> - <a href="#bookings">BOOKINGS</a>
        </div>
    </nav>

    <main>
        <section id="aboutUs">
            <h2>About Lunardo Cinemas</h2>
            <p>
                Lunardo Cinemas makes its return this Summer with a fresh new look, sound, and feel.
            </p>
            <p>
                Going through a renovation in 2019 Lunardo Cinemas now feature full 3D Dolby Vision Projection and Dolby Atmos sound.<br>
                All cinemas now feature all new seating - Including our premium First Class Seats.
            </p>


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
                    <div class = "pricingDiv">
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
                        <img width =350px src="../../media/538.jpg">
                    </div>
                    <div class="pricingDiv">
                        <img width =350px src="../../media/Verona-Twin.png">
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

        <section id = "nowShowing">
            <h2>Now Showing</h2><br>
            <div id="nowShowingDiv">
                <div class="moviePosterDiv">
                    <img width = 80% src = "../../media/spider.jpg">
                    <p><h3>The Girl in the Spider's Web</h3></p>
                    <p>Wed - 9pm (21:00)</p>
                    <p>Thu - 9pm (21:00)</p>
                    <p>Fri - 9pm (21:00)</p>
                    <p>Sat - 6pm (18:00)</p>
                    <p>Sun - 6pm (18:00)</p>
                </div>
                <div class="moviePosterDiv">
                    <img width = 80% src = "../../media/starborn.jpg">
                    <p><h3>A Star is Born</h3></p>
                    <p>Mon - 6pm (18:00)</p>
                    <p>Tue - 6pm (18:00)</p>
                    <p>Sat - 3pm (15:00)</p>
                    <p>Sun - 3pm (15:00)</p>
                </div>
                <div class="moviePosterDiv">
                    <img width = 80% src = "../../media/wreckitralph.jpg">
                    <p><h3>Ralph Breaks the Internet</h3></p>
                    <p>Mon - 12pm (12:00)</p>
                    <p>Tue - 12pm (12:00)</p>
                    <p>Wed - 6pm (18:00)</p>
                    <p>Thu - 6pm (18:00)</p>
                    <p>Fri - 6pm (18:00)</p>
                    <p>Sat - 12pm (12:00)</p>
                    <p>Sun - 12pm (12:00)</p>
                </div>
                <div class="moviePosterDiv">
                    <img width = 80% src = "../../media/boyerased.jpg">
                    <p><h3>Boy Erased</h3></p>
                    <p>Wed - 12pm (12:00)</p>
                    <p>Thu - 12pm (12:00)</p>
                    <p>Fri - 12pm (12:00)</p>
                    <p>Sat - 9pm (21:00)</p>
                    <p>Sun - 9pm (21:00)</p>
                </div>
            </div>

            <div class = synopsisDiv>
                <h2>The Girl in the Spider's Web MA15+</h2>
                    <div class = synopsisCenterDiv>
                        <div class="plotDiv">
                            <h3>Plot Description</h3>
                            <p>
                                Claire Foy is the #GirlintheSpidersWeb.<br>
                                Watch the trailer for the next chapter of the Dragon Tattoo series now.<br>
                                In theaters November 9th.
                            </p>
                        </div>
                        <div class="previewVideo">
                            <iframe src="https://www.youtube.com/embed/XKMSP9OKspQ" frameborder="0" style="position: relative; height: 100%; width: 100%;"></iframe>
                        </div>
                    </div>
                <h2>Make a Booking</h2>
                    <div class="sessionsDiv">
                        <button class="bookingButton">Wed - 9pm (21:00)</button>
                        <button class="bookingButton">Thu - 9pm (21:00)</button>
                        <button class="bookingButton">Fri - 9pm (21:00)</button>
                        <button class="bookingButton">Sat - 6pm (18:00)</button>
                        <button class="bookingButton">Sun - 6pm (18:00</button>
                    </div>
            </div>
        </section>

        <section id="bookings">
            <h2>Bookings</h2><br>
            <form method="post" target="_blank" action="https://titan.csit.rmit.edu.au/~e54061/wp/lunardo-formtest.php " onsubmit="return formValidate();">
                <input type="hidden" name="movie[id]" value="ACT">
                <input type="hidden" name="movie[day]" value="MON">
                <input type="hidden" name="movie[hour]" value="21">

                <div class="bookingDiv">
                  <div id="bookingsTitle">
                      <h3>Movie Title</h3>
                      <h3>Day - Time</h3>
                  </div>

                    <div class = bookingCenterDiv>
                        <div class="ticketsDiv">
                            <div class="ticketsSubDiv">
                                <h4>Standard Tickets</h4>
                                    <p>Adults:
                                        <select name = seats[STA]>
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
                                    </p>
                                    <p>Concession:
                                        <select name = seats[STP]>
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
                                    </p>
                                    <p>Children:
                                        <select name = seats[STC]>
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
                                    </p>
                                </div>
                            <div class="ticketsSubDiv">
                                <h4>First Class Tickets</h4>
                                    <p>Adults:
                                        <select name = seats[FCA]>
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
                                    </p>
                                    <p>Concession:
                                        <select name = seats[FCP]>
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
                                    </p>
                                    <p>Children:
                                        <select cols="50" name = seats[FCC]>
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
                                    </p>
                                </div>
                            <div class="ticketsSubDiv">
                                <p>
                                    Total: <input name="total" type=text rows="1" cols="50"></input>
                                </p>
                            </div>
                        </div>
                        <div class="custDetailsDiv">
                            <h4>Your Details</h4>
                            <p>Name: <input name="cust[name]" type=text rows="1" cols="80"></input></p>
                            <p>e-Mail: <input name="cust[email]" type=email rows="1" cols="80"></input></p>
                            <p>Mobile: <input name="cust[mobile]" type=tel rows="1" cols="80"></input></p>
                            <p>Credit Card: <input name="cust[card]" type=text rows="1" cols="80"></input></p>
                            <p>Expiry: <input name="cust[expiry]" type=month rows="1" cols="80"></input></p>
                            <p>
                                <button id="orderButton">ORDER</button>
                            </p>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </main>
    <script>
        window.onscroll = function {stickyMenu()};
        var navbar = document.getElementById("navbar");
        var sticky = navbar.offsetTop;

        function stickyMenu(){
            if (window.pageYOffset >= sticky{
                navbar.classList.add("navStick")
            }
            else{
                navbar.classList.remove("navStick");
            }
        }
    </script>
    <footer>
      <div class="footerContainer">
          <div><p>
          Lunardo Cinemas<br>
          (03) 9755 1234<br>
          inquiries@lunardocinemas.com.au
          </p>
          </div>
        <div>
            <p>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</p>
            <p>
                &copy;<script>document.write(new Date().getFullYear());</script>
            Mark Brealey - s3738237 - RMIT University 2019 <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.<br>
                <a href="https://github.com/MarkBrealey/wp">Github Repository</a>
            </p>
        </div>
      </div>
      <div>
          <button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button>
      </div>
    </footer>
    <script>
        window.onscroll = function {stickyMenu()};
        var navbar = document.getElementById("navbar");
        var sticky = navbar.offsetTop;

        function stickyMenu(){
            if (window.pageYOffset >= sticky{
                navbar.classList.add("navStick")
            }
            else{
                navbar.classList.remove("navStick");
            }
        }
    </script>
  </body>
</html>
