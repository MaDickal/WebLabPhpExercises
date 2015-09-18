<?php

// Write a function to reverse a string.

$str = isset($_POST['string']) ? $_POST['string'] : '';

function reverseStr($str) {
  print strrev($str);
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
<h1><?php reverseStr($str); ?><h1>
</body>
</html>
