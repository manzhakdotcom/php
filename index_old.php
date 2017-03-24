<?php


function __autoload($class) {
	require __DIR__ . '/classes/' . $class . '.php';
}

$coffeeMachine = new VendingMachine();
$coffeeMachine->go();

//$coffeeMachine = new VendingMachine(30);
//$coffeeMachine->go();
//include 'form.php';
