<?php

$sql = "CREATE TABLE `php.users` ( 
        `id` INT(10) NOT NULL AUTO_INCREMENT, 
        `first_name` VARCHAR(100) NOT NULL, 
        `last_name` VARCHAR(100) NOT NULL, 
        `age` INT(10) NOT NULL, 
        PRIMARY KEY (`id`)
        ) 
        ENGINE = innoDB 
        CHARSET = utf8 
        COLLATE utf8_general_ci";