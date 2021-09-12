<?php

// $i = $i + 1 と $i += 1 と $i++ は 全て同じ意味

$i = 0;

echo $i . '<br>'; // 0

$i++;

echo $i . '<br>'; // 1;

$i++;

echo $i . '<br>'; // 2

$i++;

echo $i . '<br>'; // 3

// $i = $i - 1 と $i -= 1 と $i-- は 全て同じ意味

$i--;

echo $i . '<br>'; // 2

$i--;

echo $i . '<br>'; // 1

$i--;

echo $i; // 0