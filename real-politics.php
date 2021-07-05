<?php

// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

$demoShowCase = [
  [
    0,1,5,0,0,
  ],
];

function solution($Board) {
  $rows = 0;
  $columns = 0;
  foreach ($Board as $row) {
    $rows++;
  }
  foreach ($Board[0] as $column) {
    $columns++;
  }
  $n = $rows;
  $m = $columns;

  $digits4 = [];
  $cumulativeAggregation = 4;
  $cumulativePointer = 0;

  $optionsAggregationETL = [];
  while ($cumulativePointer !== $cumulativeAggregation) {
    for ($i = 0; $i < $n; $i++) {
      for ($j = 0; $j < $m; $j++) {
        if (empty($digits4)) {
          $digits4 []= [
            $Board[$i][$j],
            $i,
            $j,
          ];
          $cumulativePointer++;
        }
        var_export($digits4);
        var_export($cumulativePointer);
        echo 'export break' . "\n";
        exit;
        if (
          $digits4[$cumulativePointer - 1][1] === $i - 1
          || $digits4[$cumulativePointer - 1][2] === $j - 1
          && !($digits4[$cumulativePointer - 1][1] === $i - 1 && $digits4[$cumulativePointer][2] === $j - 1)
        ) {
          $digits4 []= $Board[$i][$j];
          $cumulativePointer++;
        }
      }
      exit;
    }
  }

  $optionsAggregationETL[]= $digits4;
}

echo solution($demoShowCase);

?>
