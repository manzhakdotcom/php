<?php

require __DIR__ . '/autoload.php';

$view = new \App\View();

$view->title = 'My site!';
$view->dicr = 'The site about news!';
$view->users = \App\Models\User::findAll();

var_dump($view->count());


$view->display(__DIR__ . '/app/templates/index.php');