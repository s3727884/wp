<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Assignment 3</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link
      id="wireframecss"
      type="text/css"
      rel="stylesheet"
      href="../wireframe.css"
      disabled
    />
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=
    <?= filemtime("style.css"); ?>
    ">
    <script src="../wireframe.js"></script>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
      integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
      crossorigin="anonymous"
    />
    <link id="booking" href="booking.html" />
  </head>

  <!--// LOGO and NAV -->

  <body>
    <section class="header" id="about">
      <a href="index.php"><img src="../../media/Logo2.png" class="logo" /></a>
      <nav>
        <div class="navbar">
          <ul>
            <li><a href="index.php">HOME</a></li>
            <li class="about active"><a href="#about">ABOUT</a></li>
            <li class="nowshowing"><a href="#nowshowing">NOW SHOWING</a></li>
            <li class="seatsPricing">
              <a href="#seatspricing">SEATS & PRICING</a>
            </li>
            <li class="Contact"><a href="#contact">CONTACT</a></li>
          </ul>
        </div>
      </nav>

      <div class="text-box">
        <h1 id="about">About Us</h1>
        <p>
          The cinema has reopened after extensive improvements and renovations.
        </p>
        <p>
          There are new seats: standard seats and reclinable first class seats.
        </p>
        <p>
          The projection and sound systems are upgraded with the latests 3D
          Dolby Vision projection and Dolby Atmos sound.
        </p>
        <p>See Dolby.com for more information (Links to an external site.)</p>
        <a
          href="https://www.dolby.com/technologies/dolby-atmos/"
          target="blank"
          class="dolby_btn"
          >Dolby.com</a
        >
      </div>
    </section>

    <!--// NOW SHOWING -->

    <section class="now-showing" id="nowshowing">
      <h1 id="nowshowing">Now Showing</h1>
      <p>Get in on the current action</p>

      <div class="row">
        <div class="now-showing-col">
          <img src="../../media/movie1.jpg" />
          <div class="times">
            <p>Rating - PG 13</p>
            <p>Show Times:</p>
            <p>Mon-Tue: 9PM</p>
            <p>Wed-Fri: 9PM</p>
            <p>Sat-Sun: 6PM</p>
          </div>
          <div class="layer">
            <h3>Action</h3>
            <p>
              A mythic and emotionally charged hero's journey, "Dune" tells the
              story of Paul Atreides, a brilliant and gifted young man born into
              a great destiny beyond his understanding, who must travel to the
              most dangerous planet in the universe to ensure the future of his
              family and his people. As malevolent forces explode into conflict
              over the planet's exclusive supply of the most precious resource
              in existence-a commodity capable of unlocking humanity's greatest
              potential-only those who can conquer their fear will survive.
            </p>
            <a href="booking.php"
              ><button class="booknow_btn">Book Now</button></a
            >
          </div>
        </div>

        <div class="now-showing-col">
          <img src="../../media/movie2.jpg" />
          <div class="times">
            <p>Rating - PG 13</p>
            <p>Show Times:</p>
            <p>Mon-Tue: 9PM</p>
            <p>Wed-Fri: 9PM</p>
            <p>Sat-Sun: 6PM</p>
          </div>
          <div class="layer">
            <h3>Romance</h3>
            <p>
              A man ahead of his time, Cyrano de Bergerac dazzles whether with
              ferocious wordplay at a verbal joust or with brilliant swordplay
              in a duel. But, convinced that his appearance renders him unworthy
              of the love of a devoted friend, the luminous Roxanne, Cyrano has
              yet to declare his feelings for her and Roxanne has fallen in
              love, at first sight, with Christian.
            </p>
            <a href="booking.php"
              ><button class="booknow_btn">Book Now</button></a
            >
          </div>
        </div>

        <div class="now-showing-col">
          <img src="../../media/movie3.jpg" />
          <div class="times">
            <p>Rating - PG 13</p>
            <p>Show Times:</p>
            <p>Mon-Tue: 9PM</p>
            <p>Wed-Fri: 9PM</p>
            <p>Sat-Sun: 6PM</p>
          </div>
          <div class="layer">
            <h3>Family</h3>
            <p>
              With Spider-Man's identity now revealed, Peter asks Doctor Strange
              for help. When a spell goes wrong, dangerous foes from other
              worlds start to appear, forcing Peter to discover what it truly
              means to be Spider-Man.
            </p>
            <a href="booking.php"
              ><button class="booknow_btn">Book Now</button></a
            >
          </div>
        </div>

        <div class="now-showing-col">
          <img src="../../media/movie4.jpg" />
          <div class="times">
            <p>Rating - MA 15+</p>
            <p>Show Times:</p>
            <p>Mon-Tue: 9PM</p>
            <p>Wed-Fri: 9PM</p>
            <p>Sat-Sun: 6PM</p>
          </div>
          <div class="layer">
            <h3>Horror</h3>
            <p>
              Nell, Simon and their son Art host a yearly Christmas dinner at
              their country estate for their former school friends and their
              spouses. It is gradually revealed that there is an imminent
              environmental catastrophe and that this dinner will be their last
              night alive.
            </p>
            <a href="booking.php"
              ><button class="booknow_btn">Book Now</button></a
            >
          </div>
        </div>
      </div>
    </section>

    <!--// Seats and Pricing-->

    <section class="SeatPricing" id="seatsPricing">
      <h1 id="seatspricing">Seats & Pricing</h1>
      <p>For all your comforts</p>

      <div class="seats">
        <div class="seats-col">
          <div class="firstclassseats">
            <img src="../../media/FirstClassSeat.png" />
          </div>
          <div class="standardseats">
            <img src="../../media/StandardSeat.png" />
          </div>
        </div>
      </div>

      <div class="row">
        <div class="seatsPricing-col">
          <div class="heading1">
            <h3>Seat Type</h3>
            <p>Standard Adult</p>
            <p>Standard Concession</p>
            <p>Standard Child</p>
            <p>First Class Adult</p>
            <p>First Class Concession</p>
            <p>First Class Child</p>
          </div>
        </div>

        <div class="seatsPricing-col">
          <div class="heading2">
            <h3>Seat Code</h3>
            <p>STA</p>
            <p>STP</p>
            <p>STC</p>
            <p>FCA</p>
            <p>FCP</p>
            <p>FCC</p>
          </div>
        </div>

        <div class="seatsPricing-col">
          <div class="heading3">
            <h3>Discounted Prices</h3>
            <p>15.00</p>
            <p>13.50</p>
            <p>12.00</p>
            <p>24.00</p>
            <p>22.50</p>
            <p>21.00</p>
          </div>
        </div>

        <div class="seatsPricing-col">
          <div class="heading4">
            <h3>Normal Prices</h3>
            <p>20.50</p>
            <p>18.00</p>
            <p>16.50</p>
            <p>30.00</p>
            <p>27.00</p>
            <p>24.00</p>
          </div>
        </div>
      </div>
    </section>

    <!--// Footer -->
    <section id="Contact"></section>
    <footer>
      <div class="row">
        <div class="col">
          <p>GITHUB LINK</p>
          <a href="https://github.com/s3727884/wp.git" target="blank"
            ><img src="../../media/GitHubLogo.png" class="gitlogo"
          /></a>
          <p>
            Disclaimer: This website is not a real website and is being
            developed as part of a School of Science Web Programming course at
            RMIT University in Melbourne, Australia.
          </p>
        </div>
        <div class="col">
          <h3 id="contact">Contact</h3>
          <p>1500 That Drive</p>
          <p>No-the-other-Steet, TheMoon</p>
          <p>FirstCrater, SecondFootstep, Luna</p>
          <p class="email-id">thelunardocinema@cinema.com.moon</p>
          <h4>Phone: 1300 goodluck calling</h4>
        </div>
        <div class="col">
          <h3>Links</h3>
          <ul>
            <li><a href="index..php">HOME</a></li>
            <li><a href="#about">ABOUT</a></li>
            <li><a href="booking.php">BOOKINGS</a></li>
            <li><a href="#nowshowing">NOW SHOWING</a></li>
            <li><a href="#seatspricing">SEATS & PRICING</a></li>
          </ul>
        </div>

        <div class="col">
          <h3>Required Info</h3>

          <div>
            &copy;
            <script>
              document.write(new Date().getFullYear());
            </script>
            Evert Visser, S3727884, Group 1. Last modified
            <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.
          </div>
          <div>
            <button id="toggleWireframeCSS" onclick="toggleWireframe()">
              Toggle Wireframe CSS
            </button>
          </div>
        </div>
      </div>
      <hr />
      <p class="copyright">Evert Visser © 2022 - All Rights Reserved</p>
    </footer>
    <script src="./script.js"></script>

    <aside id="debug">
      <hr />
      <h3>Debug Area</h3>
      <pre>
GET Contains:
<?php print_r($_GET) ?>
POST Contains:
<?php print_r($_POST) ?>
SESSION Contains:
<?php print_r($_SESSION) ?>
      </pre>
    </aside>
  </body>
</html>
