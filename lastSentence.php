<?php

// Write a function that returns the last sentence of a string.
/* example: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
  eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.’
 result: 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.’
*/

$str = isset($_POST['string']) ? $_POST['string'] : '';

function lastSentence($str) {
  $pieces = explode(".", $str);
  print $pieces[count($pieces)-2];
}

?>

<html>
<head>
</head>
<body>
<form method="POST">
    <input type="text" name="string" /> <!-- text box on html page -->
    <input type="submit" value="Submit" />  <!-- submit button on html page -->
</form>
<h1><?= lastSentence($str); ?></h1>
</body>
</html>
