<?php

require __DIR__ . '/autoload.php';

$view = new \App\View();

$view->title = 'My site!';
$view->users = \App\Models\User::findAll();
$view->authors = \App\Models\Author::findAll();
var_dump($view->authors);
$view->news = \App\Models\News::findAll();
var_dump($view->news);
die;
$view->display(__DIR__ . '/app/templates/index.php');