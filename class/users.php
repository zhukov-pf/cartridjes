<?php

include_once($_SERVER['DOCUMENT_ROOT']."/cartridjes/class/connect_db.php");
include_once($_SERVER['DOCUMENT_ROOT']."/cartridjes/class/config.php");

new ConnectDB();

/**
* 
*/

class Users {

	# Добавление нового пользователя
	function addNewUser() {

	}

	# Удаление нового пользователя
	function deleteUser() {

	}

	# Авторизация пользователя
	function authUser() {

		$_SESSION['status'] = 'no';

		$login = $_POST['login'];
		$password = $_POST['password'];

		$query = mysql_query("SELECT * FROM users WHERE login='$login' AND password='$password'");

		if(mysql_num_rows($query) == 1) {

			$row = mysql_fetch_object($query);

			$_SESSION['f_name'] = $row->f_name;
			$_SESSION['l_name'] = $row->l_name;

			unset($_SESSION['status']);

			$_SESSION['status'] = "yes";
		}
	}

	# Проверка авторизации пользователя
	function checkSignin() {
		if(!isset($_SESSION['status']) || $_SESSION['status'] == "no") {
			header("Location: /cartridjes");
			exit();
		}
		else {
			if($_SESSION['status'] == "yes") {
				header("Location: /cartridjes/dashboard");
			}
			else {
				header("Location: /cartridjes");
			}
		}
	}

		# Проверка авторизации пользователя
	function checkSigninUser() {
		if(!isset($_SESSION['status']) || $_SESSION['status'] == "no") {
			header("Location: /cartridjes");
			exit();
		}
	}

	# Выход пользователя из системы
	function flushUsersSession() {
		unset($_SESSION['f_name']);
		unset($_SESSION['l_name']);
		unset($_SESSION['status']);

		session_destroy();

		header("Location: /cartridjes");

	}

}

?>