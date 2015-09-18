<?php

// Write a function that turns a unix timestamp into a readable date and time.

$ts = time();

function unixTodateTime($ts){
  print date('G:i:s \(g:i:s A\) \o\n \t\h\e jS \o\f F\, Y ');
}

?>

  <html>
  <head>
  </head>
  <body>
  <h1><?= unixTodateTime($ts); ?></h1>
  </body>
  </html>
