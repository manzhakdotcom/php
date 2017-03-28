<?php

namespace App;

trait Singleton {

	

	protected static $instance;

	protected function __construct(){}

	public static function instance() {

		if (null === self::$instance) {

			self::$instance = new self;
		}

		return self::$instance;

	}

}