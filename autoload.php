<?php

/**
 * App\Models\User => ./App/Models/User.php
 */
spl_autoload_register(function ($class){
    //echo nl2br($class . PHP_EOL);
    require __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';

});


