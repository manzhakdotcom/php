<?php

require __DIR__ . '/autoload.php';

$view = new \App\View();

$view->title = 'My site!';
$view->users = \App\Models\User::findAll();


$view->display(__DIR__ . '/app/templates/index.php');