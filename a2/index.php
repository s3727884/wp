<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment 2</title>
    
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime("style.css"); ">
    <script src='../wireframe.js'></script>
  </head>

  <body>

    <div class="topbox">
    <header>
      <div class="wrapper">
          <div class="logo">
            <a href="#">LUNARDO</a>
          </div>    

          <nav>                
               <a href="#">Home</a>
               <a href="#">About Us</a> 
               <a href="#">Seats and Pricing</a>
               <a href="#">Now Showing</a>
          </nav>
        </div>
        </header>
    </div>

    <div class ="card topleft">
        <div class="front">
            <img src="movie1.jpg" alt="">
        </div>
        
        <div class="back">
            <div class="back-content topleft">
                <h2>Synopsis goes here</h2>
                <div class="booking">
                    <a href= "">Booking</a>
                </div>
            </div>
        </div>
    </div>

    <div class ="card topright">
        <div class="front">
            <img src="movie2.jpg" alt="">
        </div>
        
        <div class="back">
            <div class="back-content topright">
                <h2>Synopsis goes here</h2>
                <div class="booking">
                    <a href= "">Booking</a>
                </div>
            </div>
        </div>
    </div>

    <div class ="card bottomleft">
        <div class="front">
            <img src="movie3.jpg" alt="">
        </div>
        
        <div class="back">
            <div class="back-content bottomleft">
                <h2>Synopsis goes here</h2>
                <div class="booking">
                    <a href= "">Booking</a>
                </div>
            </div>
        </div>
    </div>

    <div class ="card bottomright">
        <div class="front">
            <img src="movie4.jpg" alt="">
        </div>
        
        <div class="back">
            <div class="back-content bottomright">
                <h2>Synopsis goes here</h2>
                <div class="booking">
                    <a href= "">Booking</a>
                </div>
            </div>
        </div>
    </div>

    <main>
      <article id='Website Under Construction'>
    <!-- Creative Commons image sourced from https://pixabay.com/en/maintenance-under-construction-2422173/ and used for educational purposes only -->
        <img src='../../media/website-under-construction.png' alt='Website Under Construction' />
      </article>
    </main>

    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Evert Visser, S3727884, Group 1. Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

  </body>
</html>
