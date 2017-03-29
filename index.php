<?php

use App\Models\User;

require __DIR__ . '/autoload.php';

$users = new User;

$users->insert();