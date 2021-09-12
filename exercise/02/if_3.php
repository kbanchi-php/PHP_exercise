<?php

// 変数の定義
$score = 10;

// 60点以上
if ($score >= 60) {
    echo '合格です';
}
// 30点以上、60未満
elseif ($score >= 30) {
    echo '追試です';
}
// 30点以下
else {
    echo '不合格です';
}