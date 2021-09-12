<?php

// GETパラメータを取得
$num1 = $_GET["num1"];
$num2 = $_GET["num2"];
$operator = $_GET['operator'];

// 加減乗除の定数を定義
const ADD = 'addition';
const SUB = 'subtraction';
const MUL = 'multiplication';
const DIV = 'division';

// 加算
if ($operator == ADD) {
    echo $num1 . '+' . $num2 . '=' . ($num1 + $num2);
}
// 減算
elseif ($operator == SUB) {
    echo $num1 . '-' . $num2 . '=' .  ($num1 - $num2);
}
// 乗算
elseif ($operator == MUL) {
    echo $num1 . '*' . $num2 . '=' .  ($num1 * $num2);
}
// 除算
elseif ($operator == DIV) {
    try {
        echo $num1 . '/' . $num2 . '=' .  ($num1 / $num2);
    } catch (DivisionByZeroError $e) {
        echo 'num2には0以外の数を指定してください';
    }
}
// その他
else {
    echo '正しい演算子を指定して下さい';
}