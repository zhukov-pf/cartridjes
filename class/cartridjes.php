<?php

/**
* 
*/

class cartridjes {
	
	# Вывод списка картриджей на странице "Картриджи"
	function __construct(){
		
		$query = mysql_query("SELECT * FROM cartridjes");

		while ($row = mysql_fetch_array($query)) {
			echo "<tr>";
			echo "<td>".$row['id']."</td>";
			echo "<td>".$row['model_name']."</td>";
			echo "</tr>";
		}
	}

	# Добавление картриджей
	function addCartridjes(){

	}

	# Удаление картриджей
	function deleteCartridjes(){

	}

	# Отправка картриджей (списание)
	function transferCartridjes(){

	}

	# Редактирование картриджей 
	function editCartridjes(){

	}

}

?>