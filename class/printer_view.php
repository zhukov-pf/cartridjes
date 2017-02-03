<?php

/**
* 
*/

class printerView {
	
	function __construct(){

		$query = mysql_query("SELECT * FROM printers");

		while ($row = mysql_fetch_array($query)) {
			echo "<tr>";
			echo "<td>".$row['id']."</td>";
			echo "<td>".$row['model']."</td>";
			echo "<td>".$row['cartridjes_name']."</td>";
			echo "</tr>";
		}


	}
}

?>