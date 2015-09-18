<?php

// Write a function that converts currency from one type to another.  (USD, EUR, YEN, GBP)

error_reporting(0);
$selectFrom = ($_POST['from']);
$selectTo = ($_POST['to']);

function output() {
  global $selectFrom;
  global $selectTo;
    if($selectFrom == "USD") {
      if($selectTo == "EUR") {
        $val = floatval($_POST['string']) * 0.88;
        print $_POST['string'] ." ". $selectFrom ." is equal to ". $val ." ". $selectTo .".";
      }
      elseif($selectTo == "YEN") {
        $val = floatval($_POST['string']) * 120.06;
        print $_POST['string'] ." ". $selectFrom ." is equal to ". $val ." ". $selectTo .".";
      }
      elseif($selectTo == "GBP") {
        $val = floatval($_POST['string']) * 0.64;
        print $_POST['string'] ." ". $selectFrom ." is equal to ". $val ." ". $selectTo .".";
      }
      elseif($selectTo == "USD") {
        $val = floatval($_POST['string']) * 1;
        print $_POST['string'] ." ". $selectFrom ." is equal to ". $val ." ". $selectTo .", Duh -_-";
      }

    }
    if($selectFrom == "EUR") {
      if($selectTo == "USD") {
        $val = floatval($_POST['string']) / 0.88;
        print $_POST['string'] ." ". $selectFrom ." is equal to ". $val ." ". $selectTo .".";
      }
      elseif($selectTo == "YEN") {
        $val = floatval($_POST['string']) * 136.92;
        print $_POST['string'] ." ". $selectFrom ." is equal to ". $val ." ". $selectTo .".";
      }
      elseif($selectTo == "GBP") {
        $val = floatval($_POST['string']) * 0.73;
        print $_POST['string'] ." ". $selectFrom ." is equal to ". $val ." ". $selectTo .".";
      }
      elseif($selectTo == "EUR") {
        $val = floatval($_POST['string']) * 1;
        print $_POST['string'] ." ". $selectFrom ." is equal to ". $val ." ". $selectTo .", Duh -_-";
      }

    }
    if($selectFrom == "YEN") {
      if($selectTo == "USD") {
        $val = floatval($_POST['string']) / 120.06;
        print $_POST['string'] ." ". $selectFrom ." is equal to ". $val ." ". $selectTo .".";
      }
      elseif($selectTo == "EUR") {
        $val = floatval($_POST['string']) / 136.92;
        print $_POST['string'] ." ". $selectFrom ." is equal to ". $val ." ". $selectTo .".";
      }
      elseif($selectTo == "GBP") {
        $val = floatval($_POST['string']) * 0.0053;
        print $_POST['string'] ." ". $selectFrom ." is equal to ". $val ." ". $selectTo .".";
      }
      elseif($selectTo == "YEN") {
        $val = floatval($_POST['string']) * 1;
        print $_POST['string'] ." ". $selectFrom ." is equal to ". $val ." ". $selectTo .", Duh -_-";
      }

    }
    if($selectFrom == "GBP") {
      if($selectTo == "USD") {
        $val = floatval($_POST['string']) / 0.64;
        print $_POST['string'] ." ". $selectFrom ." is equal to ". $val ." ". $selectTo .".";
      }
      elseif($selectTo == "EUR") {
        $val = floatval($_POST['string']) / 0.73;
        print $_POST['string'] ." ". $selectFrom ." is equal to ". $val ." ". $selectTo .".";
      }
      elseif($selectTo == "YEN") {
        $val = floatval($_POST['string']) / 0.0053;
        print $_POST['string'] ." ". $selectFrom ." is equal to ". $val ." ". $selectTo .".";
      }
      elseif($selectTo == "GBP") {
        $val = floatval($_POST['string']) * 1;
        print $_POST['string'] ." ". $selectFrom ." is equal to ". $val ." ". $selectTo .", Duh -_-";
      }

    }
}

?>

<html>
<head>
</head>
<body>
<form method="POST">
    <input type="text" name="string" /></br></br>
    <select name="from">
      <option value="USD">USD</option>
      <option value="EUR">EUR</option>
      <option value="YEN">YEN</option>
      <option value="GBP">GBP</option>
    </select></br>
    <h1>To</h1>
    <select name="to">
      <option value="USD">USD</option>
      <option value="EUR">EUR</option>
      <option value="YEN">YEN</option>
      <option value="GBP">GBP</option>
    </select></br></br>
    <input type="submit" value="Submit" />
</form>
<h1><?php output() ?></h1>
</body>
</html>
