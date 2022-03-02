<?php
  session_start();

/* Put your PHP functions and modules here.
   Many will be provided in the teaching materials,
   keep a look out for them!
*/

function moviePanel( $movieID ) {
  global $moviesObject;
  echo <<<"CDATA"
<div id='panel_$movieID'>
  <img src='/media/poster_$movieID.png' .../>
  <h2>{$moviesObject[$movieID]['title']}</h2>
  <img src='/classifications/{$moviesObject[$movieID]['classification']}.png'.../>
  <p class='summary'>{$moviesObject[$movieID]['summary']}</p>
  <p class='synopsis'>{$moviesObject[$movieID]['synopsis']}</p>
  <div>
    <span class='rating'> ... </span>
    <button class='film-info' ... > ... </button>
  </div>
CDATA;
}

function debugModule() {    
 echo "<pre id='debug'>";     
 print_r($_POST);    
 echo "</pre>";    
}

function printMyCode() {
  $allLinesOfCode = file($_SERVER['SCRIPT_FILENAME']);
  echo "<pre id='myCode'><ol>"; 
  foreach($allLinesOfCode as $oneLineOfCode) {
    echo "<li>" .rtrim(htmlentities($oneLineOfCode)) . "</li>";
  }
  echo "</ol></pre>";
}


function php2js( $arr, $arrName ) {
  $arrJSON = json_encode($arr, JSON_PRETTY_PRINT);
  echo <<<"CDATA"
  <script>
    /* Variable generated with Trev's handy php2js() function */
    var $arrName = $arrJSON;
  </script>
CDATA;
}

function topModule($title) {
  $navExtended = ""; // initially blank
  if( $title != "Booking" ) { // only the booking page does not need more links
    $navExtended = <<<CDATA
    <a href="#now showing">Now Showing</a>
    ...
CDATA;
  
  echo <<<CDATA
  ...
  <nav>
    <a href="index.php">Home</a>
    $navExtended
  </nav>
  ...
CDATA;
  
}

?>
