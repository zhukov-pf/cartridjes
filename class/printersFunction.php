<?php

include_once($_SERVER['DOCUMENT_ROOT']."/cartridjes/class/connect_db.php");

new ConnectDB();

/**
* 
*/

class printersFunction {

	# Вывод списка принтеров
	function viewPrintersList(){

		$query = mysql_query("SELECT * FROM printers");

		while ($row = mysql_fetch_array($query)) {
			echo "<tr>";
			echo "<td><input type=\"checkbox\" name=\"printerId\" value=\"".$row['id']."\"></td>";
			echo "<td>".$row['id']."</td>";
			echo "<td>".$row['model']."</td>";
			echo "</tr>";
		}
	}
	
	# Добавление принтера
	function addPrinter() {
		$model = $_POST['printerModel'];
		$cartridje = $_POST['modelCartridje'];

		mysql_query("INSERT INTO printers (model, cartridjes_name) VALUES ('$model', '$cartridje')");

	}

	# Удаление принтера
	function deletePrinter() {
		$id = $_POST['printerId'];
		mysql_query("DELETE FROM printers WHERE id='$id'");
		mysql_query("ALTER TABLE printers AUTO_INCREMENT=0");
	}

	# Вывод списка картриджей
	function selectCartridjes() {
		$query = mysql_query("SELECT * FROM cartridjes");

		while ($row = mysql_fetch_array($query)) {
			echo "<option value=\"".$row['model_name']."\">".$row['model_name']."</option>";
		}

	}

}

?>