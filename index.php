<?php

require __DIR__ . '/autoload.php';

$users = \App\Models\User::findAll();

include_once __DIR__ . '/app/templates/index.php';