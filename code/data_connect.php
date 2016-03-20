<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	function dbc()
	{
		$con=mysql_connect("localhost","root","");
		if(!$con)
		{
				die("connection failed".mysql_error());
		}
		mysql_select_db("ecrime",$con);
			
	}
?>