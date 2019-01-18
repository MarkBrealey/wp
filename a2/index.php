<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment 2</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
    <script src='../wireframe.js'></script>
  </head>

  <body>
    <header>
        <div><h1>Lunardo Cinemas</h1></div>
    </header>

    <nav>
        <div class="navLinks">
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
                <table class="seatTables">
                <tr>
                    <th>SEATS</th>
                    <th>All day Monday and Wednesday<BR>AND 12pm Weekdays</th>
                    <th>All other times</th>
                </tr>
                <tr>
                    <th> Standard Adult</th>
                    <th> $14.00</th>
                    <th> $19.80</th>
                </tr>
                <tr>
                    <th> Standard Concession</th>
                    <th> $12.50</th>
                    <th> $17.50</th>
                </tr>
                <tr>
                    <th>Standard Child</th>
                    <th>$11.00</th>
                    <th>$15.30</th>
                </tr>
                <tr>
                    <th>First Class Adult</th>
                    <th>$24.00</th>
                    <th>$30.00</th>
                </tr>
                <tr>
                    <th>First Class Concession</th>
                    <th>$22.50</th>
                    <th>$27.00</th>
                </tr>
                <tr>
                    <th>First Class Child</th>
                    <th>$21.00</th>
                    <th>$24.00</th>
                </tr>
            </table>

            <p></p>

            <table class="seatTables">
                <tr>
                    <th>
                        <img width =350px src="../../media/538.jpg">
                    </th>
                    <th>
                        <img width =350px src="../../media/Verona-twin.png">
                    </th>
                </tr>
                <tr>
                    <th>Lunardos new standard seating</th>
                    <th>Lundaros new First Class Recliners</th>
                </tr>
            </table>


        </section>

        <section id = "nowShowing">
            <h2>Now Showing</h2><br>
            <div id="nowShowingDiv">
                <div class="moviePosterDiv">
                    <img width = 80% src = "../../media/538.jpg">
                    <p><h3>The Girl in the Spider's Web</h3></p>
                    <p>Wed - 9pm (21:00)</p>
                    <p>Thu - 9pm (21:00)</p>
                    <p>Fri - 9pm (21:00)</p>
                    <p>Sat - 6pm (18:00)</p>
                    <p>Sun - 6pm (18:00)</p>
                </div>
                <div class="moviePosterDiv">
                    <img width = 80% src = "../../media/538.jpg">
                    <p><h3>A Star is Born</h3></p>
                    <p>Mon - 6pm (18:00)</p>
                    <p>Tue - 6pm (18:00)</p>
                    <p>Sat - 3pm (15:00)</p>
                    <p>Sun - 3pm (15:00)</p>
                </div>
                <div class="moviePosterDiv">
                    <img width = 80% src = "../../media/538.jpg">
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
                    <img width = 80% src = "../../media/538.jpg">
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
                                This is filler text to test spacing for the plot description. This is filler text to test spacing for the plot description.
                                This is filler text to test spacing for the plot description. This is filler text to test spacing for the plot description.
                                This is filler text to test spacing for the plot description. This is filler text to test spacing for the plot description.
                            </p>
                        </div>
                        <div class="previewVideo">
                            <iframe src="https://www.youtube.com/embed/T73h5bmD8Dc" frameborder="0" style="position: relative; height: 100%; width: 100%;"></iframe>
                        </div>
                    </div>
                <h2>Make a Booking</h2>
                    <div class="sessionsDiv">
                        <button class="bookingButton">Day - Time</button>
                        <button class="bookingButton">Day - Time</button>
                        <button class="bookingButton">Day - Time</button>
                        <button class="bookingButton">Day - Time</button>
                        <button class="bookingButton">Day - Time</button>
                        <button class="bookingButton">Day - Time</button>
                        <button class="bookingButton">Day - Time</button>
                    </div>
            </div>
            <div class = synopsisDiv>
                <h2>A Star is Born MA15+</h2>
                <div class = synopsisCenterDiv>
                    <div class="plotDiv">
                        <h3>Plot Description</h3>
                        <p>
                            This is filler text to test spacing for the plot description. This is filler text to test spacing for the plot description.
                            This is filler text to test spacing for the plot description. This is filler text to test spacing for the plot description.
                            This is filler text to test spacing for the plot description. This is filler text to test spacing for the plot description.
                        </p>
                    </div>
                    <div class="previewVideo">
                        <iframe src="https://www.youtube.com/embed/T73h5bmD8Dc" frameborder="0" style="position: relative; height: 100%; width: 100%;"></iframe>
                    </div>
                </div>
                <h2>Make a Booking</h2>
                <div class="sessionsDiv">
                    <button class="bookingButton">Day - Time</button>
                    <button class="bookingButton">Day - Time</button>
                    <button class="bookingButton">Day - Time</button>
                    <button class="bookingButton">Day - Time</button>
                    <button class="bookingButton">Day - Time</button>
                    <button class="bookingButton">Day - Time</button>
                    <button class="bookingButton">Day - Time</button>
                </div>
            </div>
            <div class = synopsisDiv>
                <h2>Ralph Breaks the Internet G</h2>
                <div class = synopsisCenterDiv>
                    <div class="plotDiv">
                        <h3>Plot Description</h3>
                        <p>
                            This is filler text to test spacing for the plot description. This is filler text to test spacing for the plot description.
                            This is filler text to test spacing for the plot description. This is filler text to test spacing for the plot description.
                            This is filler text to test spacing for the plot description. This is filler text to test spacing for the plot description.
                        </p>
                    </div>
                    <div class="previewVideo">
                        <iframe src="https://www.youtube.com/embed/T73h5bmD8Dc" frameborder="0" style="position: relative; height: 100%; width: 100%;"></iframe>
                    </div>
                </div>
                <h2>Make a Booking</h2>
                <div class="sessionsDiv">
                    <button class="bookingButton">Day - Time</button>
                    <button class="bookingButton">Day - Time</button>
                    <button class="bookingButton">Day - Time</button>
                    <button class="bookingButton">Day - Time</button>
                    <button class="bookingButton">Day - Time</button>
                    <button class="bookingButton">Day - Time</button>
                    <button class="bookingButton">Day - Time</button>
                </div>
            </div>
            <div class = synopsisDiv>
                <h2>Boy Erased MA15+</h2>
                <div class = synopsisCenterDiv>
                    <div class="plotDiv">
                        <h3>Plot Description</h3>
                        <p>
                            This is filler text to test spacing for the plot description. This is filler text to test spacing for the plot description.
                            This is filler text to test spacing for the plot description. This is filler text to test spacing for the plot description.
                            This is filler text to test spacing for the plot description. This is filler text to test spacing for the plot description.
                        </p>
                    </div>
                    <div class="previewVideo">
                        <iframe src="https://www.youtube.com/embed/T73h5bmD8Dc" frameborder="0" style="position: relative; height: 100%; width: 100%;"></iframe>
                    </div>
                </div>
                <h2>Make a Booking</h2>
                <div class="sessionsDiv">
                    <button class="bookingButton">Day - Time</button>
                    <button class="bookingButton">Day - Time</button>
                    <button class="bookingButton">Day - Time</button>
                    <button class="bookingButton">Day - Time</button>
                    <button class="bookingButton">Day - Time</button>
                    <button class="bookingButton">Day - Time</button>
                    <button class="bookingButton">Day - Time</button>
                </div>
            </div>
        </section>

        <section id="bookings">
            <h2>Bookings</h2><br>
            <div class="bookingDiv">
                <h3>Movie Title - Day - Time</h3>
                <div class = bookingCenterDiv>
                    <div class="ticketsDiv">
                        <div>
                                Standard Tickets:
                                <p>Adults:
                                    <select name = seats[STA]>
                                        <option value="blank"> </option>
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
                                        <option value="blank"> </option>
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
                                        <option value="blank"> </option>
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
                        <div>
                                First Class Tickets:
                                <p>Adults:
                                    <select name = seats[FCA]>
                                        <option value="blank"> </option>
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
                                        <option value="blank"> </option>
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
                                    <select name = seats[FCC]>
                                        <option value="blank"> </option>
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
                    </div>
                    <div class="custDetailsDiv">
                        <p>Name <input name="cust[name]" type=text rows="1" cols="80"></input></p>
                        <p>e-Mail <input name="cust[email]" type=email rows="1" cols="80"></input></p>
                        <p>Mobile <input name="cust[mobile]" type=tel rows="1" cols="80"></input></p>
                        <p>Credit Card <input name="cust[card]" type=text rows="1" cols="80"></input></p>
                        <p>Expiry <input name="cust[expiry]" type=month rows="1" cols="80"></input></p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
      <div><p>&copy;<script>document.write(new Date().getFullYear());</script>
          Mark Brealey - s3738237 - RMIT University 2019 <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.<br>
          Lunardo Cinemas<br>
          (03) 9755 1234<br>
          inquiries@lunardocinemas.com.au
          </p>
        </div>
        <div>
          Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.
        </div>

      <div>
          <button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button>
      </div>
    </footer>

  </body>
</html>
