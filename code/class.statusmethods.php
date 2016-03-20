<?php
include "class.status.php";

class statusmethods
{
	private $con;
	function __construct()
	{
		//echo "higgghhhh";
		$this->con=mysql_connect("localhost","root","");
		if(!$this->con)
		{
			die("connection failed".mysql_error());
		}
		mysql_select_db("ecrime",$this->con);
	}
	function populate_change_status($case_id,$status,$criminal_id,$updated_by,$updated_date)
	{
		$status_obj=new status();
		
		$status_obj->updated_by=$updated_by;
		$status_obj->updated_date=$updated_date;
		$status_obj->case_id=$case_id;
		$status_obj->status=$status;
		$status_obj->criminal_id=$criminal_id;
		
		return(Object)$status_obj;
	}
	function update_status($status_obj)
	{
		echo "status changed";
		//mysql_query("update citizen_record set password='mihu' where email='mihu@yahoo.in' and passwrod='mihika'");
		mysql_query("update crime_status set status='$status_obj->status',criminal_id='$status_obj->criminal_id',updated_by='$status_obj->updated_by',updated_date='$status_obj->updated_date' where case_id=$status_obj->case_id");
			
	}
	
	function search_status($case_id)
	{
	
		$status_obj=new status();
		
		$res1=mysql_query("select * from crime_status where case_id=$case_id");
		if($res2=mysql_fetch_array($res1))
		{
	
			$status_obj->updated_by=$res2["updated_by"];
			$status_obj->updated_date=$res2["updated_date"];
		}
		return $status_obj;
		
		
	}
}
?>