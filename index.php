<?php

require __DIR__ . '/autoload.php';

$users = \App\Models\User::findAll();

function getName(\App\Models\User $user, $message) {
	echo $user->first_name;
}

getName($users[2], '');