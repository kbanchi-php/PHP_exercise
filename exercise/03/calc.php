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

// 加減乗除を判定
if ($operator == ADD) {
    // 加算
    echo $num1 . '+' . $num2 . '=' . ($num1 + $num2);
} elseif ($operator == SUB) {
    // 減算
    echo $num1 . '-' . $num2 . '=' .  ($num1 - $num2);
} elseif ($operator == MUL) {
    // 乗算
    echo $num1 . '*' . $num2 . '=' .  ($num1 * $num2);
} elseif ($operator == DIV) {
    // 除算
    try {
        echo $num1 . '/' . $num2 . '=' .  ($num1 / $num2);
    } catch (DivisionByZeroError $e) {
        echo 'num2には0以外の数を指定してください';
    }
} else {
    // その他
    echo '正しい演算子を指定して下さい';
}
