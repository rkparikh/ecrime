<?php
include "class.crime_ques.php";

class ques_methods
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
	function search_crime_ques($crime_id)
	{
		$crime_ques_obj=new crime_ques();
		echo "search completed";
		
		$rec1=mysql_query("select * from crime_ques where crime_id=$crime_id");
		while($rec2=mysql_fetch_array($rec1))
		{			
			$crime_ques_obj->crime_id=$rec2["crime_id"];
			$crime_ques_obj->ques1=$rec2["ques1"];
			$crime_ques_obj->ques2=$rec2["ques2"];
			$crime_ques_obj->ques3=$rec2["ques3"];
			$crime_ques_obj->ques4=$rec2["ques4"];
			$crime_ques_obj->ques5=$rec2["ques5"];
		}	
		
		return(Object)$crime_ques_obj;
	}
	
}

$ob=new ques_methods();
	$ob->search_crime_ques();
	
?>