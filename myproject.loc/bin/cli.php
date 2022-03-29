<?php



unset($argv[0]);

$sum = 0;

foreach ($argv as $item) {
    $sum += $item;
}

echo $sum;