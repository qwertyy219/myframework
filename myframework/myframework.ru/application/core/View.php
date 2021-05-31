<?php

namespace application\core;

class View {

	public $path;
	public $route;
	public $layout = 'default';


	public function __construct($route) {
		$this->route = $route;
		$this->path = $route['controller'].'/'.$route['action'];
	}

	public function render($title, $vars = []) {

		extract($vars);

		$path = 'application/views/'.$this->path.'.php';

		if (file_exists($path)){
			require 'application/views/layouts/'.$this->layout.'.php';
		} else {
			echo 'View not found';
		}
		
		
	}

	public static function errorCode($code){
		http_response_code($code);
		$path = 'application/views/errors/'.$code.'.php';
		if (file_exists($path)) {
			require $path;
		} else {
			echo 'Error view not found';
		}
		exit;
	}

	public function redirect($url) {
		header('location: '.$url);
		exit;
	}


}  