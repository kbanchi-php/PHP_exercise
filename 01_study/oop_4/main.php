<?php

require_once __DIR__ . '/Person.php';
require_once __DIR__ . '/Teacher.php';

$taro = new Person("田中", "太郎");
var_dump($taro);
echo $taro->selfIntroduction();

echo "\n";

// $jiro = new Teacher('佐藤', '次郎');
// var_dump($jiro);
// echo $jiro->selfIntroduction();

$taro = new Teacher('田中', '太郎', 'ネクレボ高等学校');
// $taro->setSchoolName('ネクレボ高等学校');
echo $taro->selfIntroduction();