<?php

/**
* КЛАСС СОЕДИНЕНИЯ С БАЗОЙ ДАННЫХ
*/

class ConnectDB {

	private $dbhost;
	private $dbuser;
	private $dbpass;
	private $dbname;
	public $link;
	
	function __construct() {

		$dbhost = "localhost";
		$dbuser = "cartridjes";
		$dbpass = "cartridjes";
		$dbname = "cartridjes";

		$link = mysql_connect($dbhost, $dbname, $dbpass);

		if ($link === FALSE) {

			echo "Не могу подключить к серверу базы данных: ".$dbhost;
			mysql_close($link);
			exit();

		}
		else {

			$select_db = mysql_select_db($dbname);

			if ($select_db === FALSE) {

				echo "Не могу подключиться к базе данных ".$dbname;
				mysql_close($link);
				exit();

			}

		}

	}
}

?>