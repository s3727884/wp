<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment 2</title>
    
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime("style.css"); ?>">
    <link id='booking' href="booking.php">
    <script src='../wireframe.js'></script>
  </head>

  <body>

    <!--// LOGO and NAV -->
    <section class="header">
      <nav> 
        <a href="index.php"><img src='../media/logo2.png'></a>
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


    <!--// MAIN BODY -->
    <main>
   
<h1 id="nowShowing">Now Showing</h1>
      <!--// NOW SHOWING-->
     <div class="content-wrapper">
        <div class="now-showing-wrapper">
          <div class ="now-showing-card-wrapper">
             <div class="card-front-background" >< img src="../media/movie1.jpg"></div>
              <!-- Creative Commons image sourced from https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.imdb.com%2Ftitle%2Ftt1160419%2F&psig=AOvVaw2y_RGhrdYzmV11XmwRFmxa&ust=1641097279670000&source=images&cd=vfe&ved=0CAgQjRxqFwoTCLiTl_XZj_UCFQAAAAAdAAAAABAF/ and used for educational purposes only -->
          
             <div class="card-text-wrapper">
                <div class="synopsis">A mythic and emotionally charged hero's journey, "Dune" tells the story of Paul Atreides, a brilliant and gifted young man born into a great destiny beyond his understanding, who must travel to the most dangerous planet in the universe to ensure the future of his family and his people. As malevolent forces explode into conflict over the planet's exclusive supply of the most precious resource in existence-a commodity capable of unlocking humanity's greatest potential-only those who can conquer their fear will survive.</div>
                    <div class="booking">
                      <a href= "booking.php">Book Now</a>
                    </div>
             </div>
           </div>



         <div class ="now-showing-card-wrapper">
           <div class="card-front-background" style="background-image:url(../media/movie2.jpg)"></div>
             <!-- Creative Commons image sourced from https://https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.imdb.com%2Ftitle%2Ftt12889404%2F&psig=AOvVaw2TVjqTOBkMYRmL-UUoTA_w&ust=1641097550591000&source=images&cd=vfe&ved=0CAgQjRxqFwoTCICHrvfaj_UCFQAAAAAdAAAAABADand used for educational purposes only -->
          
           <div class="card-text-wrapper">
                <div class="synopsis">A man ahead of his time, Cyrano de Bergerac dazzles whether with ferocious wordplay at a verbal joust or with brilliant swordplay in a duel. But, convinced that his appearance renders him unworthy of the love of a devoted friend, the luminous Roxanne, Cyrano has yet to declare his feelings for her and Roxanne has fallen in love, at first sight, with Christian.</div>
                    <div class="booking">
                        <a href= "booking.php">Book Now</a>
                   </div>
            </div>
         </div>


         <div class ="now-showing-card-wrapper">
           <div class="card-front-background" style="background-image:url(../media/movie3.jpg)"></div>
             <!-- Creative Commons image sourced from https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.imdb.com%2Ftitle%2Ftt10872600%2F&psig=AOvVaw0Zr31mfK_jPG1IBIV8BGOr&ust=1641097752131000&source=images&cd=vfe&ved=0CAgQjRxqFwoTCNDFotfbj_UCFQAAAAAdAAAAABAD used for educational purposes only -->
          
            <div class="card-text-wrapper">
               <div class="synopsis">With Spider-Man's identity now revealed, Peter asks Doctor Strange for help. When a spell goes wrong, dangerous foes from other worlds start to appear, forcing Peter to discover what it truly means to be Spider-Man.</div>
                   <div class="booking">
                       <a href= "booking.php">Book Now</a>
                   </div>
           </div>
          </div>


         <div class ="now-showing-card-wrapper">
           <div class="card-front-background" style="background-image:url(../media/movie4.jpg)"></div>
             <!-- Creative Commons image sourced from https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.imdb.com%2Ftitle%2Ftt11628854%2F&psig=AOvVaw2_vRqPQBVXsXuI43TaWyeM&ust=1641098029336000&source=images&cd=vfe&ved=0CAgQjRxqFwoTCIDP1dzcj_UCFQAAAAAdAAAAABAD used for educational purposes only -->
          
           <div class="card-text-wrapper">
                <div class="synopsis">Nell, Simon and their son Art host a yearly Christmas dinner at their country estate for their former school friends and their spouses. It is gradually revealed that there is an imminent environmental catastrophe and that this dinner will be their last night alive.</div>
                    <div class="booking">
                        <a href= "booking.php">Book Now</a>
                    </div>
           </div>
          </div>
      </div>
      

      <h1 id="seatsPricing">Seats and Pricing</h1>
    </main>

    <!--// FOOTER -->
    <footer>

    <!--// CONTACT INFO -->
     <h1 id="contactInfo">Contact Us</h1>
         <div class ="contactInfo">
           Contact Information: Phone +61(0) 3 555 1234.   Email: thelunardocinema@cinema.com
         </div> 

           <div>&copy;<script>
             document.write(new Date().getFullYear());
           </script> Evert Visser, S3727884, Group 1. Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>

          <a href="https://github.com/s3727884/wp.git" target="_blank">GitHub Link</a> 

      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
  
  
    </footer>

</body>

<!--// JavaScript-->

<!--// Card Blackout Script-->
<script>
  const nowShowingItems = document.querySelectorAll('.now-showing-card-wrapper')

  nowShowingItems.forEach(nowShowingItem => {
      nowShowingItem.addEventListener('mouseover', () =>{
          nowShowingItem.childNodes[1].classList.add('img-darken');
      })

      nowShowingItem.addEventListener('mouseout', () =>{
        nowShowingItem.childNodes[1].classList.remove('img-darken');
    })
  })
</script>
</html>
