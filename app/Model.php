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

    	$columns = [];
    	$values = [];

    	foreach ($this as $key => $value) {
            if ('id' == $key) {
                continue;
            } else {
                $columns[] = $key;
                $values[':' . $key] = $value;
            }

        }

    	$sql = 'INSERT INTO ' . static::TABLE .' ('. implode(', ', $columns) . ') VALUES ('. implode(', ', array_keys($values)) . ')';

        $db = Db::instance();

        $db->execute($sql, $values);
    }

    public static function findAll()
    {
        $db = Db::instance();
        return $db->query( 'SELECT * FROM ' . static::TABLE, static::class, [] );
    }

    public static function findById($id)
    {
        $db = Db::instance();
        return $db->query( 'SELECT * FROM ' . static::TABLE . 'WHERE id=:id', static::class, [':id' => $id] )[0];
    }
}