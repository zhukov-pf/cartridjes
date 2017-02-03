<?php

/**
* 
*/

class stockView {
	
	function __construct(){

		$query = mysql_query("SELECT * FROM cartridjes");

		while ($row = mysql_fetch_array($query)) {
			echo "<tr>";
			echo "<td>".$row['id']."</td>";
			echo "<td>".$row['manufacturer']."</td>";
			echo "<td>".$row['model_name']."</td>";
			echo "<td>".$row['balance']."</td>";
			echo "</tr>";
		}


	}
}

?>