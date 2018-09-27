<?php

require __DIR__ . '/autoload.php';

$view = new \App\View();
//echo stdClass::class;
$view->title = 'My site!';
$view->users = \App\Models\User::findAll();
$view->authors = \App\Models\Author::findAll();

$view->news = \App\Models\News::findAll();
var_dump(\App\Models\News::findById(1)->title);
$view->display(__DIR__ . '/app/templates/index.php');