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
          LINK 1 - LINK 2 - LINK 3 - LINK 4
      </div>
    </nav>

    <main>
        <section>
            <h2>About Lunardo Cinemas</h2>
            <p>
                Lunardo Cinemas makes its return this Summer with a fresh new look, sound, and feel.
            </p>
            <p>
                Going through a renovation in 2019 Lunardo Cinemas now feature full 3D Dolby Vision Projection and Dolby Atmos sound.<br>
                All cinemas now feature all new seating - Including our premium First Class Seats.
            </p>


        </section>
        <section>
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

        <section>
            <h2>Now Showing</h2><br>
            <div>
            <table class = nowShowingTables>
                <tr>
                    <th>
                        <img width = 190px src = "../../media/538.jpg">
                    </th>
                </tr>
                <tr>
                    <th>
                        The Girl in the Spider's Web
                    </th>
                </tr>
                    <th>
                        Wed - 9pm (21:00)<br>
                        Thurs - 9pm(21:00)<br>
                        Friday - 9pm(21:00<br>
                        Sat - 6pm(18:00)<br>
                        Sun - 6pm(18:00)
                    </th>
            </table>
            <table class = nowShowingTables>
                <tr>
                    <th>
                        <img width = 190px src = "../../media/538.jpg">
                    </th>
                </tr>
                <tr>
                    <th>
                        A Star is Born
                    </th>
                </tr>
                <th>
                    Mon - 6pm(18:00)<br>
                    Tue - 6pm(18:00)<br>
                    Sat - 3pm(15:00)<br>
                    Sun - 3pm(15:00)
                </th>
            </table>
            <table class = nowShowingTables>
                <tr>
                    <th>
                        <img width = 190px src = "../../media/538.jpg">
                    </th>
                </tr>
                <tr>
                    <th>
                        Ralph Breaks the Internet
                    </th>
                </tr>
                <th>
                    Mon - 12pm (12:00)<br>
                    Tue - 12pm (12:00)<br>
                    Wed - 6pm (18:00)<br>
                    Thu - 6pm (18:00)<br>
                    Fri - 6pm (18:00)<br>
                    Sat - 12pm (12:00)<br>
                    Sun - 12pm (12:00)
                </th>
            </table>
            <table class = nowShowingTables>
                <tr>
                    <th>
                        <img width = 190px src = "../../media/538.jpg">
                    </th>
                </tr>
                <tr>
                    <th>
                        Boy Erased
                    </th>
                </tr>
                <th>
                    Wed - 12pm (12:00)<br>
                    Thu - 12pm (12:00)<br>
                    Fri - 12pm (12:00)<br>
                    Sat - 9pm (21:00)<br>
                    Sun - 9pm (21:00)
                </th>
            </table>
            </div>

            <table class="synopsisTable">
                <tr>
                    <th class="synopsisColumn">
                        <h2>Movie Title MA15+</h2>
                    </th>
                    <th>
                        Row 1 Col 2
                    </th>
                </tr>
                <tr>
                    <th></th>
                </tr>
                <tr>
                    <th>Plot Description</th>
                </tr>
                <tr>
                    <th>
                        This is filler text to test spacing for the plot description. This is filler text to test spacing for the plot description.
                        This is filler text to test spacing for the plot description. This is filler text to test spacing for the plot description.
                        This is filler text to test spacing for the plot description. This is filler text to test spacing for the plot description.
                    </th>
                </tr>
                <tr>

                </tr>
            </table>
        </section>

        <section>
            <h2>Bookings</h2><br>
        </section>
    </main>

    <footer>
      <div>&copy;<script>document.write(new Date().getFullYear());</script>
          Mark Brealey - s3738237 - RMIT University 2019 <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.<br>
          Lunardo Cinemas<br>
          (03) 9755 1234<br>
          inquiries@lunardocinemas.com.au
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
