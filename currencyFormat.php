<?php
// Write a function that converts an integer to currency with 2 decimal places and a dollar sign and commas.
// Example: 1000 result: $1,000.00
// example: 100 result: $100.00
// example: 20001.50 result: $20001.50

$str = null;

function curFormat($str) {
  if(isset($_POST['string'])) {
    $str = $_POST['string'];
    $val = floatval($str);
    $form = number_format($val, 2, '.', ',');
    print "$". $form;
  }
}

?>

<html>
<header>
</header>
<body>
<form method="POST">
    <input type="text" name="string" />
    <input type="submit" value="Submit" />
</form>
<h1><?php curFormat($str); ?><h1>
</body>
</html>
