<?php

namespace App\Models;

use App\Model;

class User extends Model
{
    const TABLE = 'user';

    public $first_name;
    public $last_name;
    public $age;

}