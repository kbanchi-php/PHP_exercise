<?php

// 変数の定義
$num = 10;

// 2未満の場合は対象外
if ($num < 2) {
    echo '2以上の正の整数としてください';
    return;
}

// 2のときは素数、または2以外の2で割り切れる場合は素数ではない(偶数)
if ($num == 2) {
    echo '素数です';
    return;
} elseif ($num % 2 == 0) {
    echo '素数ではありません';
    return;
}

// 奇数の場合
$count = 3;
while($count < $num) {
    if ($num % $count == 0) {
        echo '素数ではありません';
        return;
    }
    $count = $count + 2;
}

echo '素数です';