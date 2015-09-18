<?php

// Write a function that converts and returns just the file name from a URL
// example: ‘http://www.weblab.com/weblab/index.php
// result: ‘index.php’

$url = isset($_POST['string']) ? $_POST['string'] : '';

function fileSearch($url) {
  print substr(strrchr($url ,"/"), 1);
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
<h1><?= fileSearch($url); ?></h1>
</body>
</html>
