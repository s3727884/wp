<?php 

  $moviesObject = [
    'ACT' => [
      'trailer' => '8g18jFHCLXk',
      'title' => 'Dune',
      'rating' => 'PG-13 (Some Disturbing Images|Sequences of Strong Violence|Suggestive Material)',
      'genre' => 'Action, Adventure, Sci-Fi',
      'plot' => 'Paul Atreides, a brilliant and gifted young man born into a great destiny beyond his understanding, must travel to the most dangerous planet in the universe to ensure the future of his family and his people. As malevolent forces explode into conflict over the planet\'s exclusive supply of the most precious resource in existence, only those who can conquer their own fear will survive.',
      'imdb' => 'tt1160419',
      'screening-summary' => 'Mon-Tue: 9pm, Wed-Fri: 9pm, Sat-Sun: 6pm',
      'screenings' => [
        'MON' => [
          'time' => '9pm',
          'rate' => 'discount'
        ],
        'TUE' => [
          'time' => '9pm',
          'rate' => 'regular'
        ],
        'WED' => [
          'time' => '9pm',
          'rate' => 'regular'
        ],
        'THU' => [
          'time' => '9pm',
          'rate' => 'regular'
        ],
        'FRI' => [
          'time' => '9pm',
          'rate' => 'regular'
        ],
        'SAT' => [
          'time' => '6pm',
          'rate' => 'regular'
        ],
        'SUN' => [
          'time' => '6pm',
          'rate' => 'regular'
        ]
      ]
    ], 
    'RMC' => [
      'trailer' => 'fOInHcgmKus',
      'title' => 'Cyrano',
      'rating' => 'PG-13 (Suggestive Material|Some Strong Violence|Brief Language|Thematic Material)',
      'genre' => 'Romance, Drama, Musical',
      'plot' => 'Award-winning director Joe Wright envelops moviegoers in a symphony of emotions with music, romance, and beauty in Cyrano, re-imagining the timeless tale of a heartbreaking love triangle. A man ahead of his time, Cyrano de Bergerac (played by Peter Dinklage) dazzles whether with ferocious wordplay at a verbal joust or with brilliant swordplay in a duel. But, convinced that his appearance renders him unworthy of the love of a devoted friend, the luminous Roxanne (Haley Bennett), Cyrano has yet to declare his feelings for her -- and Roxanne has fallen in love, at first sight, with Christian (Kelvin Harrison, Jr.).',
      'imdb' => 'tt12889404',
      'screening-summary' => 'Mon-Tue: 6pm, Wed-Fri: Not Showing, Sat-Sun: 3pm',
      'screenings' => [
        'MON' => [
          'time' => '6pm',
          'rate' => 'discount'
        ],
        'TUE' => [
          'time' => '6pm',
          'rate' => 'regular'
        ],
        'SAT' => [
          'time' => '3pm',
          'rate' => 'regular'
        ],
        'SUN' => [
          'time' => '3pm',
          'rate' => 'regular'
        ]
      ]
    ],
    'FAM' => [
      'trailer' => 'JfVOs4VSpmA',
      'title' => 'Spider Man: No Way Home',
      'rating' => 'PG-13 (Sequences of Action/Violence|Brief Suggestive Comments|Some Language)',
      'genre' => 'Comedy, Adventure, Fantasy, Action',
      'plot' => 'For the first time in the cinematic history of Spider-Man, our friendly neighborhood hero\'s identity is revealed, bringing his Super Hero responsibilities into conflict with his normal life and putting those he cares about most at risk. When he enlists Doctor Strange\'s help to restore his secret, the spell tears a hole in their world, releasing the most powerful villains who\'ve ever fought a Spider-Man in any universe. Now, Peter will have to overcome his greatest challenge yet, which will not only forever alter his own future but the future of the Multiverse.',
      'imdb' => 'tt10872600',
      'screening-summary' => 'Mon-Tue: 12pm, Wed-Fri: 6pm, Sat-Sun: 12pm',
      'screenings' => [
        'MON' => [
          'time' => '12pm',
          'rate' => 'discount'
        ],
        'TUE' => [
          'time' => '12pm',
          'rate' => 'discount'
        ],
        'WED' => [
          'time' => '6pm',
          'rate' => 'regular'
        ],
        'THU' => [
          'time' => '6pm',
          'rate' => 'regular'
        ],
        'FRI' => [
          'time' => '6pm',
          'rate' => 'regular'
        ],
        'SAT' => [
          'time' => '12pm',
          'rate' => 'regular'
        ],
        'SUN' => [
          'time' => '12pm',
          'rate' => 'regular'
        ]
      ]
    ],
    'AHF' => [
      'trailer' => 'u1dOECVgqIQ',
      'title' => 'Silent Night',
      'rating' => 'MA15+',
      'genre' => 'Horror, Drama, Comedy',
      'plot' => 'Nell, Simon and their son Art host a yearly Christmas dinner at their country estate for their former school friends and their spouses. It is gradually revealed that there is an imminent environmental catastrophe and that this dinner will be their last night alive.',
      'imdb' => 'tt11628854',
      'screening-summary' => 'Mon-Tue: Not Showing, Wed-Fri: 12pm, Sat-Sun: 9pm',
      'screenings' => [
        'WED' => [
          'time' => '12pm',
          'rate' => 'discount'
        ],
        'THU' => [
          'time' => '12pm',
          'rate' => 'discount'
        ],
        'FRI' => [
          'time' => '12pm',
          'rate' => 'discount'
        ],
        'SAT' => [
          'time' => '9pm',
          'rate' => 'regular'
        ],
        'SUN' => [
          'time' => '9pm',
          'rate' => 'regular'
        ]
      ]
    ]
  ];

  $seatsObject = [
    'STA'=> [
      'desc' => 'Standard Adult',
      'regular' => 20.50,
      'discount' => 15.00
    ],
    'STP'=> [
      'desc' => 'Standard Concession',
      'regular' => 18.00,
      'discount' => 13.50
    ],
    'STC'=> [
      'desc' => 'Standard Child',
      'regular' => 16.50,
      'discount' => 12.00
    ],
    'FCA'=> [
      'desc' => 'First Class Adult',
      'regular' => 30.00,
      'discount' => 24.00
    ],
    'FCP'=> [
      'desc' => 'First Class Concession',
      'regular' => 27.00,
      'discount' => 22.50
    ],
    'FCC'=> [
      'desc' => 'First Class Child',
      'regular' => 24.00,
      'discount' => 21.00
    ]
  ];

  $movie = 'ACT'; // default setting for A4 simplicity
  if ( isset($_GET['movie']) && isset($moviesObject[$_GET['movie']]) ) {
    $movie = $_GET['movie'];
  }
?>

<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lunardo Booking Page</title>
  <style>
    body {
      font-family: Arial;
    }
    fieldset {
      padding: 10px;
      margin-bottom: 20px;
    }
    button, input {
      padding: 10px;
      margin: 5px;
    }
    label {
      display: inline-flex;
      align-items: center;
      border: 1px #999 solid;
      border-radius: 10px;
      padding: 5px 10px 5px 5px;
      margin: 10px;
      
    }
  </style>
  <script>
    var moviesObjectJS = <?= json_encode($moviesObject, JSON_PRETTY_PRINT) ?>;
    var seatsObjectJS = <?= json_encode($seatsObject, JSON_PRETTY_PRINT) ?>;
  </script>
</head>

<body>

  <header>
    <h1>🌝 Lunardo Booking Page</h1>
  </header>

  <hr>

  <nav><a href="booking.php?movie=<?= $movie ?>">Booking Page</a></nav>

  <hr>

  <main>

    <h2>Movie Selection</h2>

    <p>Movie Title: <?= $moviesObject[$movie]['title'] ?></p>
    <p>Rating: <?= $moviesObject[$movie]['rating'] ?></p>
    <p>Genre: <?= $moviesObject[$movie]['genre'] ?></p>
    <p>Plot: <?= $moviesObject[$movie]['plot'] ?></p>
    <p>IMDB Link: <a href='https://www.imdb.com/title/<?= $moviesObject[$movie]['imdb'] ?>/' target="_blank">More about <?= $moviesObject[$movie]['title'] ?> over at IMDB</a></p>
    <p>Screening Times: <?= $moviesObject[$movie]['screening-summary'] ?></p>

    <hr>

    <h2>Booking Form</h2>

    <form action="booking.php?movie=<?= $movie ?>" method='POST'>

      <input type="hidden" id="movie" name="movie" value="<?= $movie ?>" />

      <fieldset id="screening-set">
        <legend>Screenings</legend>
        <?php
          foreach($moviesObject[$movie]['screenings'] as $day => $details) {
            echo "<label><input type='radio' id='$day' name='day' value='$day' />
         $day {$details['time']} ({$details['rate']})</label>";
          }
        ?>
      </fieldset>

      <fieldset id="seating-set">
        <legend>Seating</legend>
        <?php
          foreach($seatsObject as $seat => $details) {
            echo "<input type='text' name='seats[$seat]' id='{$seat}-qty' value='' placeholder='{$details['desc']}' pattern='[1-9]|10' /><br>";
          }
        ?>
      </fieldset>

      <fieldset>
        <legend>Personal Details</legend>
        <input type='text' name="user[name]" id="name" value='' placeholder="Name" /><br>
        <input type='email' name="user[email]" id="email" value='' placeholder="Email" /><br>
        <input type='tel' name="user[mobile]" id="mobile" value='' placeholder="Mobile" />
      </fieldset>

      <fieldset>
        <legend>Submit Options</legend>
        <button id="submitCS" name='submitCS'>Order<br>Client-Side Validation</button>
        <button id="submitSS" name='submitSS'>Order<br>Server-Side Validation</button>
      </fieldset>
    </form>

  </main>

  <hr>

  <footer>
    Assignment 4 Fallback Template for Web Programming SP4 2021
    <pre>
$movie <?= $movie ?>

seatsObject contains:
<?php print_r($seatsObject); ?>
moviesObject contains:
<?php print_r($moviesObject); ?>
GET contains:
<?php print_r($_GET); ?>
POST contains:
<?php print_r($_POST); ?>
SESSION contains:
<?php print_r($_SESSION); ?>
    </pre>
  </footer>
</body>

</html>
