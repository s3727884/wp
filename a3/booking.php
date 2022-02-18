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
<link rel="stylesheet" href="" class="post-validation php">
    
  </head>

  <body>

    <!--// LOGO and NAV -->
    <section class="header">
      <a href ="index.php"><img src="../../media/Logo2.png" class="logo"></a>
      <nav>
          
          <div class="navbar">
          <ul>
              <li><a href="index.php">HOME</a></li>
              <li><a href="#contact">CONTACT</a></li>
          </ul>
      </div>
      </nav>

      <div class="iframe-container">
          <iframe width="460" height="215" src="https://www.youtube.com/embed/8g18jFHCLXk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </section>

    <section>

      <div class="info-container">
        <div class="info-header">  
          <h2>Enter Personal Information</h2>
        </div>

        <form class ="form" id="form">
          <div class="personal-info success">
            <label>Name</label>
            <input type="text" placeholder="Name" id="username">
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
          </div>

          <div class="personal-info error">
            <label>Phone</label>
            <input type="text" placeholder="Phone" id="phone">
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
          </div>

          <div class="personal-info">
            <label>Email</label>
            <input type="email" placeholder="email@email.com" id="email">
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
          </div>


        </div>
        </form>
      </div>
    </section>

    <section>
      <div class="info-container">
      <h2 class="info-header">Select Session Time</h2>
      </div>
      <div class="radio-container">
      <div class="radio">
        <input class="radio__input" type="radio" value="option1" name="myRadio" id="myRadio1">
        <label class="radio__label" for="myRadio1">MON 9 PM</label>
         <input class="radio__input" type="radio" value="option2" name="myRadio" id="myRadio2">
        <label class="radio__label" for="myRadio2">TUE 9 PM</label>
         <input class="radio__input" type="radio" value="option3" name="myRadio" id="myRadio3">
        <label class="radio__label" for="myRadio3">WED 9 PM</label>
         <input class="radio__input" type="radio" value="option4" name="myRadio" id="myRadio4">
        <label class="radio__label" for="myRadio4">THU 9 PM</label>
         <input class="radio__input" type="radio" value="option5" name="myRadio" id="myRadio5">
        <label class="radio__label" for="myRadio5">FRI 9 PM</label>
         <input class="radio__input" type="radio" value="option6" name="myRadio" id="myRadio6">
        <label class="radio__label" for="myRadio6">SAT 6 PM</label>
         <input class="radio__input" type="radio" value="option7" name="myRadio" id="myRadio7">
        <label class="radio__label" for="myRadio7">SUN 6 PM</label>
      </div>
      </div>
    </section>


    <section>
      <div class="info-container">
      <h2 class="info-header">Ticket Selection</h2>
      </div>
      <div class="bookings-row">
      <div class="booking-col">
        <h3>Ticket Type</h3>
        <p>Standard Adult</p>
        <p>Standard Consession</p>
        <p>Standard Child</p>
        <p>First Class Adult</p>
        <p>First Class Consession</p>
        <p>First Class Child</p>
      </div>

      <div class="booking-col">
      <h3>Discount Price</h3>
      <p>$15.00</p>
      <p>$13.50</p>
      <p>$12.00</p>
      <p>$24.00</p>
      <p>$22.50</p>
      <p>$21.00</p>
    </div>

      <div class="booking-col">
      <h3>Normal Price</h3>
      <p>$20.50</p>
      <p>$18.00</p>
      <p>$16.50</p>
      <p>$30.00</p>
      <p>$27.00</p>
      <p>$24.00</p>
    </div>


    <div class="booking-col">
      <h3>Qty Required</h3>
      <span class="ticket-quantity">
          <input type="text" id="0001" class="quantity" name="ticket-0001;" value="0"
            autocomplete="off" tabindex="1" min="0" max="10">
      </span>
      <span class="ticket-quantity">
          <input type="text" id="0002" class="quantity" name="ticket-0002;" value="0"
            autocomplete="off" tabindex="1" min="0" max="10">
      </span>
      <span class="ticket-quantity">
          <input type="text" id="0003" class="quantity" name="ticket-0003;" value="0"
            autocomplete="off" tabindex="1" min="0" max="10">
      </span>
      <span class="ticket-quantity">
          <input type="text" id="0004" class="quantity" name="ticket-0004;" value="0"
            autocomplete="off" tabindex="1" min="0" max="10">
      </span>
      <span class="ticket-quantity">
          <input type="text" id="0005" class="quantity" name="ticket-0005;" value="0"
            autocomplete="off" tabindex="1" min="0" max="10">
      </span>
      <span class="ticket-quantity">
          <input type="text" id="0006" class="quantity" name="ticket-0006;" value="0"
            autocomplete="off" tabindex="1" min="0" max="10">
      </span>

    </div>
    </section>

    <section>
      <div class="final-bookbtn">
       <a><button class="bookbtn">Confirm Booking</button></a>
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


 <script src="./script.js"></script>
  </body>


</html>
