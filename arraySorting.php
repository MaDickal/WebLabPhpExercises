<?php

// Write a function that sorts the items of an array.

$arr = [];

function VlowHigh($arr) {
  asort($arr);
  return $arr;
}

function VhighLow($arr) {
  arsort($arr);
  return $arr;
}

function KlowHigh($arr) {
  ksort($arr);
  return $arr;
}

function KhighLow($arr) {
  krsort($arr);
  return $arr;
}

?>
