<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lunardo Booking Page</title>
    
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime("style.css"); ?>">
    <script src='../wireframe.js'></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    
  </head>

  <body>

    <!--// LOGO and NAV -->
    <section class="header">
      <nav>
          <a href ="index.php"><img src="../../media/Logo2.png" class="logo"></a>
          <div class="navbar">
          <ul>
              <li><a href="index.php">HOME</a></li>
              <li><a href="index.php#about">ABOUT</a></li>
              <li><a href="booking.php">BOOKINGS</a></li>
              <li><a href="index.php#nowshowing">NOW SHOWING</a></li>
              <li><a href="index.php#seatspricing">SEATS & PRICING</a></li>
              <li><a href="#contact">CONTACT</a></li>
          </ul>
      </div>
      </nav>

      <div class="text-box">
        <h1 id="booking">BOOKINGS</h1>
        <p>This is the bookings page.</p>
        <p>get yer tickets here.</p>

    </div>

    </section>
   <section>


<div class="row">
  <div class="col">
    <h3>Ticket Type</h3>
    <p>Standard Adult</p>
    <p>Standard Consession</p>
    <p>Standard Child</p>
    <p>First Class Adult</p>
    <p>First Class Consession</p>
    <p>First Class Child</p>
  </div>

  <div class="col">
  <h3>Cost</h3>
  <p>20.50</p>
  <p>18.00</p>
  <p>16.50</p>
  <p>30.00</p>
  <p>27.00</p>
  <p>24.00</p>
</div>

<div class="col">
  <h3>Qty</h3>
  <span class="ticket-quantity-plus-minus-numeric">
    <button type="button" class="minus icon icon-minus"></button>
      <input type="text" id="0001" class="quantity" name="ticket-0001;" value="0"
        autocomplete="off" tabindex="1" min="0" max="10">
      </input>
    <button type="button" class="plus icon icon-plus"></button>
  </span>
  <span class="ticket-quantity-plus-minus-numeric">
    <button type="button" class="minus icon icon-minus"></button>
      <input type="text" id="0002" class="quantity" name="ticket-0002;" value="0"
        autocomplete="off" tabindex="1" min="0" max="10">
      </input>
    <button type="button" class="plus icon icon-plus"></button>
  </span>
  <span class="ticket-quantity-plus-minus-numeric">
    <button type="button" class="minus icon icon-minus"></button>
      <input type="text" id="0003" class="quantity" name="ticket-0003;" value="0"
        autocomplete="off" tabindex="1" min="0" max="10">
      </input>
    <button type="button" class="plus icon icon-plus"></button>
  </span>
  <span class="ticket-quantity-plus-minus-numeric">
    <button type="button" class="minus icon icon-minus"></button>
      <input type="text" id="0004" class="quantity" name="ticket-0004;" value="0"
        autocomplete="off" tabindex="1" min="0" max="10">
      </input>
    <button type="button" class="plus icon icon-plus"></button>
  </span>
  <span class="ticket-quantity-plus-minus-numeric">
    <button type="button" class="minus icon icon-minus"></button>
      <input type="text" id="0005" class="quantity" name="ticket-0005;" value="0"
        autocomplete="off" tabindex="1" min="0" max="10">
      </input>
    <button type="button" class="plus icon icon-plus"></button>
  </span>
  <span class="ticket-quantity-plus-minus-numeric">
    <button type="button" class="minus icon icon-minus"></button>
      <input type="text" id="0006" class="quantity" name="ticket-0006;" value="0"
        autocomplete="off" tabindex="1" min="0" max="10">
      </input>
    <button type="button" class="plus icon icon-plus"></button>
  </span>

</div>

<div class="col">
  <h3>Subtotal</h3>
    <p><span class="sub-total last-child">0.00</span></p>
    <p><span class="sub-total last-child">0.00</span></p>
    <p><span class="sub-total last-child">0.00</span></p>
    <p><span class="sub-total last-child">0.00</span></p>
    <p><span class="sub-total last-child">0.00</span></p>
    <p><span class="sub-total last-child">0.00</span></p>
  </div>

</div>


</section>




    <footer>
    <div class="row">
      <div class="col">
          <p>GITHUB LINK</p>
        <a href="https://github.com/s3727884/wp.git" target="blank"><img src="../../media/GitHubLogo.png" class="gitlogo"></a>
          <p>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</p>
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
            <li><a href="index.php">HOME</a></li>
            <li><a href="index.php#about">ABOUT</a></li>
            <li><a href="booking.php">BOOKINGS</a></li>
            <li><a href="index.php#nowshowing">NOW SHOWING</a></li>
            <li><a href="index.php#seatspricing">SEATS & PRICING</a></li>
          </ul>
      </div>

      <div class="col">
          <h3>Required Info</h3>
          
          <div>&copy;<script>
            document.write(new Date().getFullYear());
          </script> Evert Visser, S3727884, Group 1. Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
          <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
      </div>
   </div>
  <hr>
  <p class="copyright">Evert Visser © 2022 - All Rights Reserved</p>
</footer>

    <aside id="debug">
      <hr>
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
