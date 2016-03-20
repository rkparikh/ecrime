<?php
include "class.log_complaint.php";

class log_complaintmethods
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
	function populate_log_complaint($case_id,$crime_id)
	{
		$log_complaint_obj=new log_complaint();
		
		$log_complaint_obj->case_id=$case_id;
		//$log_complaint_obj->crime_id=$crime_id;
		$log_complaint_obj->crime_id=$crime_id;
		
		return(Object)$log_complaint_obj;
	}
	
}

?>