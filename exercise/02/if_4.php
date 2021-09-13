<?php

// 変数の定義
$score_math = 15;
$score_english = 24;

// スコア判定
if ($score_math >= 60 && $score_english >= 60) {
    // ともに60以上
    echo '合格';
} elseif ($score_math >= 50 || $score_english >= 50) {
    // どちらかが50点以上、60点未満
    echo '再試験';
} else {
    // ともに50点以下
    echo '不合格';
}
