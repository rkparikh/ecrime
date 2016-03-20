<?php
include "class.fir_data.php";

class fir_datamethods
{
	private $con;
	function __construct()
	{
		echo "higgghhhh";
		$this->con=mysql_connect("localhost","root","");
		if(!$this->con)
		{
			die("connection failed".mysql_error());
		}
		mysql_select_db("ecrime",$this->con);
	}
	function populate_fir_data($case_id,$crime_id,$crime_name,$location,$citizen_id,$fdate,$ans1,$ans2,$ans3,$ans4,$ans5)
	{
		//echo "(".$crime_id.",".$crime_name.",".$location.",".$citizen_id.",".$fdate.",".$ans1.",".$ans2.",".$ans3.",".$ans4.",".$ans5.")";
		
		$fir_data_obj=new fir_data();
		
		$fir_data_obj->case_id=$case_id;
		$fir_data_obj->crime_id=$crime_id;
		$fir_data_obj->crime_name=$crime_name;
		$fir_data_obj->location=$location;
		$fir_data_obj->citizen_id=$citizen_id;
		$fir_data_obj->fdate=$fdate;
		$fir_data_obj->ans1=$ans1;
		$fir_data_obj->ans2=$ans2;
		$fir_data_obj->ans3=$ans3;
		$fir_data_obj->ans4=$ans4;
		$fir_data_obj->ans5=$ans5;
		
		return(Object)$fir_data_obj;
	}
	function search_fir_data($case_id,$crime_name,$citizen_id)
	{
		echo "hiiiiii";
		$fir_data_obj=new fir_data();
		$rec1=mysql_query("select * from fir_data where case_id=$case_id and crime_name='$crime_name'",$this->con);
		if($rec2=mysql_fetch_array($rec1))
		{
			$fir_data_obj->case_id=$rec2["case_id"];
			$fir_data_obj->crime_id=$rec2["crime_id"];
			$fir_data_obj->crime_name=$rec2["crime_name"];
			$fir_data_obj->location=$rec2["location"];
			$fir_data_obj->citizen_id=$rec2["citizen_id"];
			$fir_data_obj->fdate=$rec2["fdate"];
			$fir_data_obj->ans1=$rec2["ans1"];
			$fir_data_obj->ans2=$rec2["ans2"];
			$fir_data_obj->ans3=$rec2["ans3"];
			$fir_data_obj->ans4=$rec2["ans4"];
			$fir_data_obj->ans5=$rec2["ans5"];
			
		}
		return(Object)$fir_data_obj;

	}
	function insert_fir_data($fir_data_obj)
	{
		echo "hellooooooooooooo";
		
		$stt=mysql_query("insert into fir_data(case_id,crime_id,crime_name,location,citizen_id,fdate,ans1,ans2,ans3,ans4,ans5)
					values ($fir_data_obj->case_id,$fir_data_obj->crime_id,'".$fir_data_obj->crime_name."','".$fir_data_obj->location."',$fir_data_obj->citizen_id,'".$fir_data_obj->fdate."','".$fir_data_obj->ans1."','".$fir_data_obj->ans2."','".$fir_data_obj->ans3."','".$fir_data_obj->ans4."','".$fir_data_obj->ans5."')");	
						if($stt)
						{
							echo "record inserted";
						}
						
		
	}
	function search_by_criteria($criteria)
	{
		echo "search by criteria";
		$i=0;
		$rec1=mysql_query("select * from fir_data");
		while($rec2=mysql_fetch_array($rec1))
		{
			$fir_data_obj= new fir_data();
			$fir_data_obj->case_id=$rec2["case_id"];
			$fir_data_obj->crime_id=$rec2["crime_id"];
			$fir_data_obj->crime_name=$rec2["crime_name"];
			$fir_data_obj->location=$rec2["location"];
			$fir_data_obj->citizen_id=$rec2["citizen_id"];
			$fir_data_obj->fdate=$rec2["fdate"];
			$fir_data_obj->ans1=$rec2["ans1"];
			$fir_data_obj->ans2=$rec2["ans2"];
			$fir_data_obj->ans3=$rec2["ans3"];
			$fir_data_obj->ans4=$rec2["ans4"];
			$fir_data_obj->ans5=$rec2["ans5"];
			
			$arr[$i]=$fir_data_obj;
			$i++;
		}
		return $arr;
	}
	function insert_fir_status($fir_data_obj)
	{
		$status="Pending";
		$stt=mysql_query("insert into crime_status(case_id,status)
					values ($fir_data_obj->case_id,'".$fir_data_obj->status=$status."')");	
						if($stt)
						{
							echo "status record inserted";
						}
	}
}	
	/*
	$obj=new fir_datamethods();
	$a=$obj->populate_fir_data(109,"Missing","Karve nagar",101,"2013-04-10","a","b","c","d","e");
	echo $a->crime_id;
	$obj->insert_fir_data($a);
	*/
 ?>