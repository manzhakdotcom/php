<?php

namespace App;

/**
* 
*/
class View {

	protected $display;

	public function __set($key, $value) {

		$this->display[$key] = $value;
	}

	public function __get($key) {

		return $this->display[$key];
	}

	public function display($template) {

		echo $this->render($template);
	}


	/**
	* @return string
	*/
	public function render($template) {		
		ob_start();
		include $template;
		$content = ob_get_contents();
		ob_end_clean();

		return $content;
	}


}