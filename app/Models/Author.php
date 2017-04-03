<?php

namespace App\Models;

use App\Model;


class Author extends Model
{
	const TABLE = 'authors';

	public $name;

	public function getAuthor($id)
	{
		echo 'Author';
	}
}