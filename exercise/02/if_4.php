<?php

// 変数の定義
$score_math = 15;
$score_english = 24;

// ともに60以上
if ($score_math >= 60 && $score_english >= 60) {
    echo '合格';
}
// どちらかが50点以上、60点未満
elseif ($score_math >= 50 || $score_english >= 50) {
    echo '再試験';
}
// ともに50点以下
else {
    echo '不合格';
}
