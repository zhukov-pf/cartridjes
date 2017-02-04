<?php

/**
* 
*/

class stockView {
	
	function __construct(){

		$query = mysql_query("SELECT * FROM cartridjes");

		while ($row = mysql_fetch_array($query)) {
			if ($row['balance'] <= 5) {
				echo "<tr class=\"warning\">";
			}
			if ($row['balance'] <= 3) {
				echo "<tr class=\"danger\">";
			}
			if ($row['balance'] >= 6) {
				echo "<tr class=\"success\">";
			}
			echo "<td>".$row['id']."</td>";
			echo "<td>".$row['manufacturer']."</td>";
			echo "<td>".$row['model_name']."</td>";
			echo "<td>".$row['balance']."</td>";
			echo "</tr>";
		}


	}
}

?>