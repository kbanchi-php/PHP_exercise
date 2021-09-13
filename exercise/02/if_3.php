<?php

// 変数の定義
$score = 10;

// スコア判定
if ($score >= 60) {
    // 60点以上
    echo '合格です';
} elseif ($score >= 30) {
    // 30点以上、60未満
    echo '追試です';
} else {
    // 30点以下
    echo '不合格です';
}
