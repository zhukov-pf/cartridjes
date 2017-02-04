<?php

/**
* 
*/

class pointView {
	
	function __construct(){

		$query = mysql_query("SELECT * FROM points WHERE view=1");

		while ($row = mysql_fetch_array($query)) {

			echo "<td><input type=\"checkbox\" name=\"point\" value=\"".$row['id']."\"></td>";
			echo "<td>".$row['id']."</td>";
			echo "<td>".$row['point_name']."</td>";
			echo "</tr>";
		}


	}
}

?>