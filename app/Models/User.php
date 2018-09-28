<?php

namespace App\Models;

use App\Model;

class User extends Model
{
    const TABLE = 'users';

    public $first_name;
    public $last_name;
    public $age;

}