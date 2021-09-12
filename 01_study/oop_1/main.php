<?php

require_once __DIR__ . '/User.php';

$user = new User();

// var_dump($user);
echo $user->name . "\n";
echo $user->age . "\n";

$user->name = 'Tom';
echo $user->name . "\n";
echo $user->greet('Tom');
echo $user->selfIntroduction();