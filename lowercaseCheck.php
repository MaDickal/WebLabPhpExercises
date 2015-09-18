<?php

// Write a function that checks if a string is all lower case.

$str = isset($_POST['string']) ? $_POST['string'] : '';

function lowerStr($str) {
  if(ctype_lower($str)) {
    print "All characters are lowercase!";
  }
  else {
    print "Not all characters are lowercase!";
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
<h1><?php lowerStr($str); ?><h1>
</body>
</html>
