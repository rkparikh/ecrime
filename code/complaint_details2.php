<?php
	include "class.criminalmethods.php";
	include "class.status.php";
	include "data_connect.php";
	dbc();
	include "class.fir_data.php";
	session_start();
	
	$status_obj=$_SESSION["status_obj"];
	$case_id=$_SESSION["case_id"];
	//echo $case_id;
	$res1=mysql_query("select * from fir_data where case_id=$case_id");
	while($res2=mysql_fetch_array($res1))
		{
			$crime_name=$res2["crime_name"];
			$citizen_id=$res2["citizen_id"];
			$fdate=$res2["fdate"];
			$ans1=$res2["ans1"];
			$ans2=$res2["ans2"];
			$ans3=$res2["ans3"];
			$ans4=$res2["ans4"];
			$ans5=$res2["ans5"];
		}
		
	//echo $crime_name;
?>
<script language="javascript">
	function loadXMLDoc(d)
	{

		var xmlhttp;
		if (window.XMLHttpRequest)
		{// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		}
		else
		{// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
			}
		}
		xmlhttp.open("GET","fetch_data2.php?id="+d,true);
		xmlhttp.send();
	}
</script>	
<html>
<head>
<title>www.ecrime.com/Log Complaint</title>
<link rel="stylesheet" href="../css/mystyle.css" type="text/css"/>
</head>
<body>
<table width="900" border="0" align="center"> 
	<tr>
	<td colspan="2" >
	<?php include "../code/ecrime_header.php"; ?>
	</td>
	</tr>
	<tr>
	<td width="150" valign="top">
	<?php include "../code/ecrime_main_menu3.php"; ?>
	</td>
	<td width ="750">
	<table  border="0" align="top" width=100%>
		<form name="form4" action="class.controller.php" method="post">
		<tr>
			<td bgcolor="#C0C0C0" colspan='4' align=center height=20><b>Complaint details
			</td>
		</tr>
		<tr>
			<td>Complaint no. :</td><td>
			<?php echo $case_id; ?>
			</td>
		</tr>
		<tr>
			<td>Complaint type :</td><td><?php echo $crime_name; ?></td>
		</tr>
		<tr>
			<td>Complaint by :</td><td><?php echo $citizen_id; ?></td>
		</tr>
		<tr>
			<td>Complaint date :</td><td><?php echo $fdate; ?></td>
		</tr>	
		<tr>
			<td>Where did the it occurs?</td><td><?php //echo $ans1; ?></td>
		</tr>
		<tr>
			<td>When did the it happen?</td>
			<td><?php echo $ans2; ?></td>
		</tr>
		<tr>
			<td>What was stolen?</td>
			<td><?php echo $ans3; ?></td>
		</tr>
		<tr>
			<td>Where was you present at that time?</td>
			<td><?php echo $ans4; ?></td>
		</tr>
		<tr>
			<td>Was there any witness at that location?</td>
			<td><?php echo $ans5; ?></td>
		</tr>
		<tr>
			<td bgcolor="#C0C0C0" colspan='4' align=center height=10></td>
		</tr>
		<tr>
			<td>Last Status:</td>
			<td>New</td>
		 </tr>
		 <tr>
			<td>Updated by:</td><td><?php echo $status_obj->updated_by;  ?></td>
		 </tr>
		 <tr>
			<td>Updated date:</td><td><?php echo $status_obj->updated_date;  ?></td>
		 </tr>
		 <tr>
			<td bgcolor="#C0C0C0" colspan='4' align=center height=10></td>
		</tr>
		<tr>
			<td>Status:</td>
			<td><select name='status' id='status'><option value='0'>Select Status</option>
				<option value='1'>Pending</option>
				<option value='2'>Closed</option>
				</select>
			</td>
		</tr>
		 <tr>
			<td bgcolor="#C0C0C0" colspan='4' align=center height=10></td>
		</tr>
		<tr>
			<td>Criminal </td>
			<td><select name='criminal_id' id='criminal_id' onChange="loadXMLDoc(this.value)">
			<option value=0>Select</option>
			<?php
	
			$criminalmethods_obj=new criminalmethods();
			$criminal_obj=$criminalmethods_obj->search_by_criteria("select * from criminal_record");
			//$max=sizeof($criminal_obj);
			for($i=0; $i<10; $i++)
			{
			$criminal_id=$criminal_obj[$i]->criminal_id;
			$criminal_f_name=$criminal_obj[$i]->criminal_f_name;
			$criminal_m_name=$criminal_obj[$i]->criminal_m_name;
			$criminal_l_name=$criminal_obj[$i]->criminal_l_name;
				echo "<option value=$criminal_id>$criminal_f_name $criminal_m_name $criminal_l_name</option>";
			}	
			?>
			
			</select>
			</td>
		</tr>
		<tr><td id=myDiv></div></tr>
		<tr>
			<td colspan=2 align=center>
			<input type='submit'  id='submit' size ='10' value="Submit"/>
			</a></td>
		</tr>
		<input type='hidden' name='submit' id='submit' size ='10' value='complaint_details2_submit'/> 
	</form></table>
 </td>
 </tr>
 <tr>
 <td colspan="2"><?php include "../code/ecrime_footer.php"; ?></td>
 </tr>
</table>
</body></html>