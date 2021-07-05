<?php

// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";
$demoSample1 = [
  -1, 1, 3, 6, 4, 1, 2,
];

$demoSample2 = [
  0, -2, -3, -4, -5, 5, 6, 8, 7,
];

function solution($A) {
  sort($A);
  $A = array_unique($A);
  $maxLimit = $A[sizeof($A) - 1];
  $positiveCursor = null;
  for ($i = 0; $i < sizeof($A); $i++) {
    if ($A[$i] >= 0) {
      $positiveCursor = $i;
      break;
    }
  }
  $A = array_values($A);
  for ($j = $positiveCursor, $size = sizeof($A); $j < $size; $j++) {
    if (isset($A[$j + 1]) && $A[$j + 1] === $A[$j] + 1) {
      continue;
    }
    return $A[$j] + 1;
  }

  return $A[$j] + 1;
}

echo solution($demoSample1);
echo "\n";
echo solution($demoSample2);
 ?>
