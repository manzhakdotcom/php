<?php

require __DIR__ . '/autoload.php';

function test($a,...$args) {
    echo $a;
    return $args;
}

var_dump(test(6, 7, 45));
die();

$view = new \App\View();

$view->title = 'My site!';
$view->users = \App\Models\User::findAll();
$view->authors = \App\Models\Author::findAll();
$view->news = \App\Models\News::findAll();
$view->data = \App\Data::get_clean_data($_POST['data']);

$view->display(__DIR__ . '/app/templates/index.php');

