<?php
include "class.missing_citizen.php";

class missing_citizenmethods
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
	function populate_missing_citizen($missing_citizen_id,$missing_citizen_f_name,$missing_citizen_m_name,$missing_citizen_l_name,$mob_no,$res_no,$address,$dob,$details,$skin_color,$hair_color,$height)
	{
		echo "<br>";
		//echo "(".$missing_citizen_id.",".$missing_citizen_f_name.",".$missing_citizen_m_name.",".$missing_citizen_l_name.",".$mob_no.",".$res_no.",".$address.",".$dob.",".$details.",".$skin_color.",".$hair_color.",".$height.")";
		
		$missing_citizen_obj=new missing_citizen();
		$missing_citizen_obj->missing_citizen_id=$missing_citizen_id;
		$missing_citizen_obj->missing_citizen_f_name=$missing_citizen_f_name;
		$missing_citizen_obj->missing_citizen_m_name=$missing_citizen_m_name;
		$missing_citizen_obj->missing_citizen_l_name=$missing_citizen_l_name;
		$missing_citizen_obj->mob_no=$mob_no;
		$missing_citizen_obj->res_no=$res_no;
		$missing_citizen_obj->address=$address;
		$missing_citizen_obj->dob=$dob;
		$missing_citizen_obj->details=$details;
		$missing_citizen_obj->skin_color=$skin_color;
		$missing_citizen_obj->hair_color=$hair_color;
		$missing_citizen_obj->height=$height;
		
		return(Object)$missing_citizen_obj;
	}
	
	function search_missing_citizen($missing_citizen_id,$missing_citizen_f_name)
	{
		echo "search in missing CITIZEN ";
		$missing_citizen_obj=new missing_citizen();
		$rec1=mysql_query("select * from missing_citizen_record where missing_citizen_id=$missing_citizen_id and missing_citizen_f_name='$missing_citizen_f_name'",$this->con);
		if($rec2=mysql_fetch_array($rec1))
		{
		//global $citizen_obj;
			$missing_citizen_obj->missing_citizen_id=$rec2["missing_citizen_id"];
			$missing_citizen_obj->missing_citizen_f_name=$rec2["missing_citizen_f_name"];
			$missing_citizen_obj->missing_citizen_m_name=$rec2["missing_citizen_m_name"];
			$missing_citizen_obj->missing_citizen_l_name=$rec2["missing_citizen_l_name"];
			$missing_citizen_obj->mob_no=$rec2["mob_no"];
			$missing_citizen_obj->res_no=$rec2["res_no"];
			$missing_citizen_obj->address=$rec2["address"];
			$missing_citizen_obj->dob=$rec2["dob"];
			$missing_citizen_obj->details=$rec2["details"];
		    $missing_citizen_obj->skin_color=$rec2["skin_color"];
		    $missing_citizen_obj->hair_color=$rec2["hair_color"];
		    $missing_citizen_obj->height=$rec2["height"];
		
			
		}
		return(Object)$missing_citizen_obj;

	}
	
	
	
	function insert_missing_citizen($missing_citizen_obj)
	{	
		echo "hellooooooooooooo"."<br>";
		//echo $missing_citizen_obj->missing_citizen_id;
		
		$stt1=mysql_query("insert into missing_citizen_record(missing_citizen_id,missing_citizen_f_name,missing_citizen_m_name,missing_citizen_l_name,mob_no,res_no,address,dob,details,skin_color,hair_color,height)
					values($missing_citizen_obj->missing_citizen_id,'".$missing_citizen_obj->missing_citizen_f_name."','".$missing_citizen_obj->missing_citizen_m_name."','".$missing_citizen_obj->missing_citizen_l_name."','".$missing_citizen_obj->mob_no."','".$missing_citizen_obj->res_no."','".$missing_citizen_obj->address."','".$missing_citizen_obj->dob."','".$missing_citizen_obj->details."','".$missing_citizen_obj->skin_color."','".$missing_citizen_obj->hair_color."','".$missing_citizen_obj->height."')");	
						if($stt1)
						{
							echo "record inserted";
						}
	}
	function update_missing_citizen($missing_citizen_obj)
	{
		echo "updated"."<br>";
		//mysql_query("update missing_citizen_record set missing_citizen_f_name='Mohan',missing_citizen_m_name='Kumar' where missing_citizen_id=1013");
		mysql_query("update missing_citizen_record set missing_citizen_f_name='$missing_citizen_obj->missing_citizen_f_name',missing_citizen_m_name='$missing_citizen_obj->missing_citizen_m_name',missing_citizen_l_name='$missing_citizen_obj->missing_citizen_l_name',mob_no='$missing_citizen_obj->mob_no',res_no='$missing_citizen_obj->res_no',address='$missing_citizen_obj->address',dob='$missing_citizen_obj->dob',details='$missing_citizen_obj->details',skin_color='$missing_citizen_obj->skin_color',hair_color='$missing_citizen_obj->hair_color',height=$missing_citizen_obj->height where missing_citizen_id=$missing_citizen_obj->missing_citizen_id");
	}
	
	function delete_missing_citizen($missing_citizen_obj)
	{
		$query="delete from missing_citizen_record where missing_citizen_id=$missing_citizen_obj->missing_citizen_id";
		mysql_query($query);
		echo "record deleted"."<br>";
		//header("location:citizen_all_data.php");
	}
	
	
	function search_by_criteria($criteria)
	{
		echo "search by criteria missing";
		$i=0;
		$record1=mysql_query("select * from missing_citizen_record");
		while($rec2=mysql_fetch_array($record1))
		{
			$missing_citizen_obj=new missing_citizen();
					
			$missing_citizen_obj->missing_citizen_id=$rec2["missing_citizen_id"];
			$missing_citizen_obj->missing_citizen_f_name=$rec2["missing_citizen_f_name"];
			$missing_citizen_obj->missing_citizen_m_name=$rec2["missing_citizen_m_name"];
			$missing_citizen_obj->missing_citizen_l_name=$rec2["missing_citizen_l_name"];
			$missing_citizen_obj->mob_no=$rec2["mob_no"];
			$missing_citizen_obj->res_no=$rec2["res_no"];
			$missing_citizen_obj->address=$rec2["address"];
			$missing_citizen_obj->dob=$rec2["dob"];
			$missing_citizen_obj->details=$rec2["details"];
		    $missing_citizen_obj->skin_color=$rec2["skin_color"];
		    $missing_citizen_obj->hair_color=$rec2["hair_color"];
		    $missing_citizen_obj->height=$rec2["height"];
		
			
			$arr[$i]=$missing_citizen_obj;
			$i++;
		}
		return $arr;
	}
}	

	/*
	$obj=new missing_citizenmethods();
	$a=$obj->populate_missing_citizen(1013,"Hemant","Gopal","Joshi","9423937644","3432102","Warje","1989-10-03","Hingane Coloni","cream","black",5.2);
	echo $a->missing_citizen_id;
	
	$obj->insert_missing_citizen($a); 
	
	$obj->search_missing_citizen(1011,"Komal");
	$obj->update_missing_citizen($a); */
 ?>