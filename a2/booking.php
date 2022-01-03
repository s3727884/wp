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
  </head>

  <body>

    <section class="header">
        <nav> 
          <a href="index.php"><img src="../media/Logo2.png"></a>
          <div class="navLinks">
            <ul>
              <li><a href="index.php">HOME</a></li>
              <li><a href="booking.php">BOOKINGS</a></li>
              <li><a href="#">ABOUT</a></li>
              <li><a href="#nowShowing">NOW SHOWING</a></li>
              <li><a href="#seatsPricing">SEATS & PRICING</a></li>
              <li><a href="#contactInfo">CONTACT US</a></li>
            </ul>
          </div>
          
       </section>

    <main>

      
    </main>
    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Evert Visser, S3727884, Group 1. Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
      <a href="https://github.com/s3727884/wp.git" target="_blank">GitHub Link</a> 
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
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
