<?php 

namespace application\core;
use application\lib\DB;

abstract class Model {

	public $db;

	public function __construct() {
		//Чтобы модели заработали это надо раскомментить!
		//$this->db = new Db;
	}

}