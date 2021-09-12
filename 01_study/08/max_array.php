<?php

function maxArray($array) {
    $max = $array[0];
    foreach ($array as $element) {
        if ($element > $max) {
            $max = $element;
        }
    }
    return $max;
}

$nums = range(1, 100);

echo maxArray($nums);