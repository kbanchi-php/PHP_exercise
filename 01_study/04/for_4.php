<?php

// 配列の要素を全て取り出す
$fruits = ['banana', 'apple', 'melon'];

// 配列のインデックスに合わせて、i = 0からスタート
for ($i = 0; $i < 3; $i++) {
    echo $fruits[$i] . '<br>';
}

echo '<hr>';

// 1から10までの値の配列を作る
// PHP5.4以降
$nums = [];

// PHP5.3以前
# $nums = array();
for ($j = 1; $j <= 10; $j++) {
    $nums[] = $j;
}
var_dump($nums);