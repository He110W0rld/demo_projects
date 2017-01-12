<?php

class Model {

	public $mysqli;

   function __construct() {

		$config['MYSQL_SERVER'] 	= 'localhost';
		$config['MYSQL_DB'] 		= 'bash';
		$config['MYSQL_USER'] 		= 'test';
		$config['MYSQL_PASSWORD'] 	= 'qwerty';

		$_mysqli = new MySQLi($config['MYSQL_SERVER'],$config['MYSQL_USER'],$config['MYSQL_PASSWORD'],$config['MYSQL_DB']);

		if ($_mysqli->connect_error) {
			die('Ошибка подключения (' . BD::$_mysqli->connect_errno . ') '. BD::$_mysqli->connect_error);
		}
		$this->mysqli = $_mysqli;
   }
}