<?php

// Write a function that returns the first part of an email address
// example: david@drj.io
// result: david

$email = isset($_POST['string']) ? $_POST['string'] : '';

function emailSearch($email) {
    $pieces = explode("@", $email);
    print $pieces[0];
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
<h1><?= emailSearch($email); ?></h1>
</body>
</html>
