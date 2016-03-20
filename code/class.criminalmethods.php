<?php
include "class.criminal.php";

class criminalmethods
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
	function populate_criminal_record($criminal_id,$criminal_f_name,$criminal_m_name,$criminal_l_name,$dob,$mob_no,$res_no,$address,$skin_color,$hair_color,$height,$weight,$scars,$phy_deformity,$pic)
	{
		//echo "(".$criminal_id.",".$criminal_f_name.",".$criminal_m_name.",".$criminal_l_name.",".$dob.",".$mob_no.",".$res_no.",".$address.",".$skin_color.",".$hair_color.",".$height.",".$weight.",".$scars.",".$phy_deformity.",".$pic.")";
				
		$criminal_obj=new criminal();
		$criminal_obj->criminal_id=$criminal_id;
		$criminal_obj->criminal_f_name=$criminal_f_name;
		$criminal_obj->criminal_m_name=$criminal_m_name;
		$criminal_obj->criminal_l_name=$criminal_l_name;
		$criminal_obj->dob=$dob;
		$criminal_obj->mob_no=$mob_no;
		$criminal_obj->res_no=$res_no;
		$criminal_obj->address=$address;
		$criminal_obj->skin_color=$skin_color;
		$criminal_obj->hair_color=$hair_color;
		$criminal_obj->height=$height;
		$criminal_obj->weight=$weight;
		$criminal_obj->scars=$scars;
		$criminal_obj->phy_deformity=$phy_deformity;
		$criminal_obj->pic=$pic;

		return(Object)$criminal_obj;
	}
	function search_criminal_record($criminal_id,$criminal_f_name)
	{
		echo "search in criminal"."</br>";
		$criminal_obj=new criminal();
		$rec1=mysql_query("select * from criminal_record where criminal_id=$criminal_id and criminal_f_name='$criminal_f_name'",$this->con);
		if($rec2=mysql_fetch_array($rec1))
		{
			$criminal_obj->criminal_id=$rec2["criminal_id"];
			$criminal_obj->criminal_f_name=$rec2["criminal_f_name"];
			$criminal_obj->criminal_m_name=$rec2["criminal_m_name"];
			$criminal_obj->criminal_l_name=$rec2["criminal_l_name"];
			$criminal_obj->dob=$rec2["dob"];
			$criminal_obj->mob_no=$rec2["mob_no"];
			$criminal_obj->res_no=$rec2["res_no"];
			$criminal_obj->address=$rec2["address"];
			$criminal_obj->skin_color=$rec2["skin_color"];
			$criminal_obj->hair_color=$rec2["hair_color"];
			$criminal_obj->height=$rec2["height"];
			$criminal_obj->weight=$rec2["weight"];
			$criminal_obj->scars=$rec2["scars"];
			$criminal_obj->phy_deformity=$rec2["phy_deformity"];
			$criminal_obj->pic=$rec2["pic"];
		}
		return(Object)$criminal_obj;

	}
	function insert_criminal_record($criminal_obj)
	{
	
		echo "hellooooooooooooo"."<br>";
		//echo $criminal_obj->criminal_id;
		//echo $criminal_obj->criminal_f_name;
		
		
		$stt=mysql_query("insert into criminal_record(criminal_id,criminal_f_name,criminal_m_name,criminal_l_name,dob,mob_no,res_no,address,skin_color,hair_color,height,weight,scars,phy_deformity,pic) values($criminal_obj->criminal_id,'".$criminal_obj->criminal_f_name."','".$criminal_obj->criminal_m_name."','".$criminal_obj->criminal_l_name."','".$criminal_obj->dob."','".$criminal_obj->mob_no."','".$criminal_obj->res_no."','".$criminal_obj->address."','".$criminal_obj->skin_color."','".$criminal_obj->hair_color."','".$criminal_obj->height."','".$criminal_obj->weight."','".$criminal_obj->scars."','".$criminal_obj->phy_deformity."','".$criminal_obj->pic."')");				
						if($stt)
						{
							echo "record inserted";
						}
	}
	
	function update_criminal_record($criminal_obj)
	{
		echo "updated"."<br>";
		//mysql_query("update criminal_record set criminal_f_name='Mohan',criminal_m_name='Kumar' where criminal_id=1017");
		mysql_query("update criminal_record set criminal_f_name='$criminal_obj->criminal_f_name',criminal_m_name='$criminal_obj->criminal_m_name',criminal_l_name='$criminal_obj->criminal_l_name',dob='$criminal_obj->dob',mob_no='$criminal_obj->mob_no',res_no='$criminal_obj->res_no',address='$criminal_obj->address',skin_color='$criminal_obj->skin_color',hair_color='$criminal_obj->hair_color',height=$criminal_obj->height,weight=$criminal_obj->weight,scars='$criminal_obj->scars',phy_deformity='$criminal_obj->phy_deformity',pic='$criminal_obj->pic' where criminal_id=$criminal_obj->criminal_id");
	}
	
	function delete_criminal_record($criminal_obj)
	{
		$query="delete from criminal_record where criminal_id=$criminal_obj->criminal_id";
		mysql_query($query);
		echo "record deleted"."<br>";
		//header("location:class.controller.php");
	}
	
	function search_by_criteria($criteria)
	{
		//echo "search by criteria criminal";
		$i=0;
		$record1=mysql_query("select * from criminal_record");
		while($rec2=mysql_fetch_array($record1))
		{
			$criminal_obj=new criminal();
			$criminal_obj->criminal_id=$rec2["criminal_id"];
			$criminal_obj->criminal_f_name=$rec2["criminal_f_name"];
			$criminal_obj->criminal_m_name=$rec2["criminal_m_name"];
			$criminal_obj->criminal_l_name=$rec2["criminal_l_name"];
			$criminal_obj->dob=$rec2["dob"];
			$criminal_obj->mob_no=$rec2["mob_no"];
			$criminal_obj->res_no=$rec2["res_no"];
			$criminal_obj->address=$rec2["address"];
			$criminal_obj->skin_color=$rec2["skin_color"];
			$criminal_obj->hair_color=$rec2["hair_color"];
			$criminal_obj->height=$rec2["height"];
			$criminal_obj->weight=$rec2["weight"];
			$criminal_obj->scars=$rec2["scars"];
			$criminal_obj->phy_deformity=$rec2["phy_deformity"];
			$criminal_obj->pic=$rec2["pic"];
			$arr[$i]=$criminal_obj;
			$i++;
		}
		return $arr;
	}
	
	
}
	/*
	
	$obj=new criminalmethods();
	$a=$obj->populate_criminal_record(1017,"Kirti","Gopal","Patil","1990-10-03","9423937542","3432134","Nigadi","cream","black",5.2,45.2,"sdasd","nothig","ram");
	//echo $a->criminal_id;
	
	$obj->insert_criminal_record($a);
	$obj->update_criminal_record($a);
	*/
 ?>