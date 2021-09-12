<?php

// echoを使用することでも可能ですが修正が大変です
echo 'こんにちは' . '<br>';
echo 'こんにちは' . '<br>';
echo 'こんにちは' . '<br>';
echo 'こんにちは' . '<br>';
echo 'こんにちは' . '<br>';
echo 'こんにちは' . '<br>';
echo 'こんにちは' . '<br>';
echo 'こんにちは' . '<br>';
echo 'こんにちは' . '<br>';
echo 'こんにちは' . '<br>';

echo '<hr>';

// forならスッキリ
for ($i = 1; $i <= 10; $i++) {
    echo 'こんにちは' . '<br>';
}