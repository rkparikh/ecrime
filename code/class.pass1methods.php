<?php
include "class.change_pass1.php";

 class pass1methods
 {
	private $con;
	function __construct()
	{
		
		$this->con=mysql_connect("localhost","root","");
		if(!$this->con)
		{
			die("connection failed".mysql_error());
		}
		mysql_select_db("ecrime",$this->con);
	}
	function populate_change_pass1($email,$old_pass,$new_pass,$retype_pass)
	{
		$pass1_obj=new change_pass1();
		
		$pass1_obj->email=$email;
		$pass1_obj->old_pass=$old_pass;
		$pass1_obj->new_pass=$new_pass;
		$pass1_obj->retype_pass=$retype_pass;
		
		return(Object)$pass1_obj;
	}
	function update_password($pass1_obj)
	{
		//mysql_query("update citizen_record set password='mihu' where email='mihu@yahoo.in' and passwrod='mihika'");
		mysql_query("update citizen_record set password='$pass1_obj->new_pass' where email='$pass1_obj->email' and password='$pass1_obj->old_pass'");
		echo "password changed";	
	}
 }
?>