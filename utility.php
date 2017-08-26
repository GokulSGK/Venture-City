<?php

	function ExecuteQuery ($SQL)
	{	
		$con=mysql_connect ("localhost", "root","");
		mysql_select_db ("codexworld",$con);
		
		$rows = mysql_query ($SQL);
		echo "Hii";
		mysql_close ();
		
		return $rows;
	}
	
	function ExecuteNonQuery ($SQL)
	{
		$con=mysql_connect ("localhost", "root","");
		mysql_select_db ("codexworld",$con);
		
		$result = mysql_query ($SQL);
		echo "Hii";
		mysql_close ();
		
		return $result;
	}
?>