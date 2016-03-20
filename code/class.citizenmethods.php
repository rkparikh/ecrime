<?php
include "class.citizen.php";

class citizenmethods
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
	function populate_citizen_record($citizen_id,$citizen_f_name,$citizen_m_name,$citizen_l_name,$mob_no,$res_no,$email,$dob,$location,$details,$pic)
	{
		//echo "(".$citizen_id.",".$citizen_f_name.",".$citizen_m_name.",".$citizen_l_name.",".$mob_no.",".$res_no.",".$email.",".$dob.",".$location.",".$details.",".$pic.")";
		
		$citizen_obj=new citizen();
		$citizen_obj->citizen_id=$citizen_id;
		$citizen_obj->citizen_f_name=$citizen_f_name;
		$citizen_obj->citizen_m_name=$citizen_m_name;
		$citizen_obj->citizen_l_name=$citizen_l_name;
		$citizen_obj->mob_no=$mob_no;
		$citizen_obj->res_no=$res_no;
		$citizen_obj->email=$email;
		$citizen_obj->dob=$dob;
		$citizen_obj->location=$location;
		$citizen_obj->details=$details;
		$citizen_obj->pic=$pic;
		
		return(Object)$citizen_obj;
	}
	function search_citizen_record($citizen_id,$citizen_f_name)
	{
		echo "hiiiiii";
		$citizen_obj=new citizen();
		$rec1=mysql_query("select * from citizen_record where citizen_id=$citizen_id and citizen_f_name='$citizen_f_name'",$this->con);
		if($rec2=mysql_fetch_array($rec1))
		{
		//global $citizen_obj;
			$citizen_obj->citizen_id=$rec2["citizen_id"];
			$citizen_obj->citizen_f_name=$rec2["citizen_f_name"];
			$citizen_obj->citizen_m_name=$rec2["citizen_m_name"];
			$citizen_obj->citizen_l_name=$rec2["citizen_l_name"];
			$citizen_obj->mob_no=$rec2["mob_no"];
			$citizen_obj->res_no=$rec2["res_no"];
			$citizen_obj->email=$rec2["email"];
			$citizen_obj->dob=$rec2["dob"];
			$citizen_obj->location=$rec2["location"];
			$citizen_obj->details=$rec2["details"];
			$citizen_obj->pic=$rec2["pic"];
			
		}
		return(Object)$citizen_obj;

	}
	//citizen password
	function populate_citizen_password($email,$password)
	{
		 //echo"One";
			$citizen_obj=new citizen();
			//$citizen_obj->citizen_id=$citizen_id;
			$citizen_obj->email=$email;
			$citizen_obj->password=$password;
			
			return(Object)$citizen_obj;
	}
	function search_citizen_password($email,$password)
	{
		$citizen_obj=new citizen();
		$rec1=mysql_query("select * from citizen_record where email='$email' and password='$password'",$this->con);
		if($rec2=mysql_fetch_array($rec1))
		{
			$citizen_obj->citizen_id=$rec2["citizen_id"];
			$citizen_obj->email=$rec2["email"];
			$citizen_obj->password=$rec2["password"];
			$citizen_obj->citizen_f_name=$rec2["citizen_f_name"];
			$citizen_obj->citizen_m_name=$rec2["citizen_m_name"];
			$citizen_obj->citizen_l_name=$rec2["citizen_l_name"];
			$citizen_obj->mob_no=$rec2["mob_no"];
			$citizen_obj->res_no=$rec2["res_no"];
			$citizen_obj->email=$rec2["email"];
			$citizen_obj->dob=$rec2["dob"];
			$citizen_obj->location=$rec2["location"];
			$citizen_obj->details=$rec2["details"];
			$citizen_obj->pic=$rec2["pic"];
			
			
		}
		return(Object)$citizen_obj;
		
	}

	
	
	function insert_citizen_record($citizen_obj)
	{
		echo "hellooooooooooooo";
		
		$stt=mysql_query("insert into citizen_record(citizen_id,citizen_f_name,citizen_m_name,citizen_l_name,mob_no,res_no,email,dob,location,details,pic)
					values ($citizen_obj->citizen_id,'".$citizen_obj->citizen_f_name."','".$citizen_obj->citizen_m_name."','".$citizen_obj->citizen_l_name."','".$citizen_obj->mob_no."','".$citizen_obj->res_no."','".$citizen_obj->email."','".$citizen_obj->dob."','".$citizen_obj->location."','".$citizen_obj->details."','".$citizen_obj->pic."')");	
						if($stt)
						{
							echo "record inserted";
						}
						
		
	}
	function update_citizen_record($citizen_obj)
	{
		echo "updated"."<br>";
		//pic='$citizen_obj->pic'
		//mysql_query("update citizen_record set citizen_f_name='Mohan',citizen_m_name='Kumar' where citizen_id=103");
		mysql_query("update citizen_record set citizen_f_name='$citizen_obj->citizen_f_name',citizen_m_name='$citizen_obj->citizen_m_name',citizen_l_name='$citizen_obj->citizen_l_name',mob_no='$citizen_obj->mob_no',res_no='$citizen_obj->res_no',email='$citizen_obj->email',dob='$citizen_obj->dob',location='$citizen_obj->location',details='$citizen_obj->details',pic='$citizen_obj->pic' where citizen_id=$citizen_obj->citizen_id");
	}
	function delete_citizen_record($citizen_obj)
	{
		$query="delete from citizen_record where citizen_id=$citizen_obj->citizen_id";
		mysql_query($query);
		echo "record deleted"."<br>";
		//header("location:citizen_all_data.php");
	}
	
	
	function search_by_criteria($criteria)
	{
		echo "search by criteria";
		$i=0;
		$record1=mysql_query("select * from citizen_record");
		while($record2=mysql_fetch_array($record1))
		{
			$citizen_obj=new citizen();
			$citizen_obj->citizen_id=$record2["citizen_id"];
			$citizen_obj->citizen_f_name=$record2["citizen_f_name"];
			$citizen_obj->citizen_m_name=$record2["citizen_m_name"];
			$citizen_obj->citizen_l_name=$record2["citizen_l_name"];
			$citizen_obj->mob_no=$record2["mob_no"];
			$citizen_obj->res_no=$record2["res_no"];
			$citizen_obj->email=$record2["email"];
			$citizen_obj->dob=$record2["dob"];
			$citizen_obj->location=$record2["location"];
			$citizen_obj->details=$record2["details"];
			$citizen_obj->pic=$record2["pic"];
			$arr[$i]=$citizen_obj;
			$i++;
		}
		return $arr;
	}
}
	
	//$ob=new citizenmethods();
	/*$a=$ob->populate_citizen_record(103,"Kajal","Gopal","Patil","9403385647","3432112","asbs@gmail.com","1989-10-03","Karve nagar","Hingane Coloni","flower");
	echo $a->citizen_id;
	$ob->search_citizen_record(101,"Pramod");
	$ob->insert_citizen_record($a);
	$ob->update_citizen_record($a);
	$ob->search_by_criteria($a);
	
	
	$a=$ob->populate_citizen_password("mihu@yahoo.in","mihu");*/
	
	//$ob->update_citizen_password($a);
?>