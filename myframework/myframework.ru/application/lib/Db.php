<?php

namespace application\lib;

class Db {

	protected $db;

	public function __construct() {
		
		$dbConfig = require "application/config/db.php";
    
    	$this->db = mysqli_connect($dbConfig['host'], $dbConfig['user'], $dbConfig['password'], $dbConfig['dbname']);

	}

	public function query($sql) {
		$dbResult = mysqli_query($this->db, $sql);
		$dbArray = mysqli_fetch_all($dbResult, MYSQLI_ASSOC);
		return $dbArray;
	}

}

?>