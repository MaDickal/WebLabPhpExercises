<?php

// Write a function that puts a list of items from a form into an array (text field)
// example:
// bread
// milk
// cheese
// apples
//
// result: [‘bread’,’milk’,’cheese’,’apples’]

function itemList() {
  $pieces = [];
  if(isset($_POST['item'])) {
    if(isset($_POST['string'])) {
      $pieces = explode(' ', $_POST['item']);
      array_push($pieces, $_POST['string']);
    }
  }
  return $pieces;
}

function output() {
    global $pieces;
    foreach($pieces as $key => $val) {
      if($val != null) {
        print $val ."</br>";
      }
    }
}

$pieces = itemList();

?>

<html>
<head>
</head>
<body>
<form method="POST">
    <input type="text" name="string" />
    <input type="submit" value="Submit" />
    <input type="hidden" name="item" value="<?php echo implode(' ', $pieces) ?>" />
</form>
<h1><?php output() ?></h1>
</body>
</html>
