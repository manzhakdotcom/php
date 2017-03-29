<?php

namespace App;

abstract class Model
{

    const TABLE = '';

    public $id;

    public function isNew() {

    	return empty($this->id);
    }

    public function insert() {

    	if (!$this->isNew()) {
    		return;
    	}

    	var_dump($this);

    	foreach ($this as $key => $value) {
    		echo "\n" . $key . "\n";
    	}

    	die;

    	$sql = 'INSERT INTO ' . static::TABLE . ' ';
    }

    public static function findAll()
    {
        $db = Db::instance();
        return $db->query(
            'SELECT * FROM ' . static::TABLE,
            static::class
        );
    }

}