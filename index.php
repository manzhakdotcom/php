<?php

use App\Models\User;

require __DIR__ . '/autoload.php';

$users = new User;
$users->age = 24;
$users->first_name = 'Mike';
$users->last_name = 'Teddy';
$users->insert();