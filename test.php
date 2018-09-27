<?php
require __DIR__ . '/autoload.php';

$users = \App\Models\User::findAll();

foreach ($users as $user){
    echo 'age: ' . $user->age . PHP_EOL;
}
