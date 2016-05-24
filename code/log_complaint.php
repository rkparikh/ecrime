<?php
	include "data_connect.php";
	include "class.log_complaint.php";
	include "class.citizen.php";
	session_start();
	dbc();
	
	$log_complaint_obj=$_SESSION["log_complaint_obj"];
	
	
	//echo $log_complaint_obj->case_id;
	
	$citizen_obj=$_SESSION["citizen_obj"];
	$citizen_f_name=$_SESSION["citizen_f_name"];
 	$citizen_m_name=$_SESSION["citizen_m_name"];
    $citizen_l_name=$_SESSION["citizen_l_name"];
	//echo "22222".$citizen_obj->citizen_id;
	
	$res1=mysql_query("select * from crime_type where crime_id=$log_complaint_obj->crime_id");
	while($res2=mysql_fetch_array($res1))
	{
		$crime_name=$res2["crime_name"];
	}
?>
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
	<?php include "../code/ecrime_main_menu2.php"; ?>
	</td>
	<td width ="750">
	<div align="center" class="welcome">
	<?php echo "Logged By :".$citizen_f_name." ".$citizen_m_name." ".$citizen_l_name;?></div>
	<table  border="0" align="top" width=100%>
		<form name="form4" action="class.controller.php" method="post">
		<tr>
			<td bgcolor="#C0C0C0" colspan='4' align=center height=20><b>Log complaint
			</td>
		</tr>
		<tr>
			<td>Complaint no.</td><td>
			<input type='text' name='case_id' id='case_id' size ='40' value=<?php echo $log_complaint_obj->case_id; ?> >
			<input type=hidden name=crime_id value=<?php echo $log_complaint_obj->crime_id; ?>></td>
		</tr>
		<tr>
			<td>Complaint type</td><td>
			<input type='text' name='crime_name' id='crime_name' size ='40' value= <?php echo $crime_name; ?> ></td>
		</tr>
		
		<tr>
			<td>Location</td><td>
			<input type='text' name='location' id='location' size ='40' value='' /></td>
			<td>&nbsp;</td><td>&nbsp;</td>
		</tr>
		<tr>
			<td>Complaint by</td><td>
			<input type='text' name='citizen_id' id='citizen_id' size ='40' value=<?php echo $citizen_obj->citizen_id ?> ></td>
			<td>&nbsp;</td><td>&nbsp;</td>
		</tr>
		<tr>
			<td>Complaint date</td>
			<td><input type='text' name='fdate' id='fdate' size ='10' value=<?php echo date('Y-m-d');  ?>>(yyyy-mm-dd)</td>
		</tr>	
		<tr>
			<td>Where did the it occurs?</td>
			<td><textarea name='ans1' id='ans1' rows='2' cols="31" value=''></textarea></td>
		</tr>
		<tr>
			<td>When did the it happen?</td>
			<td><textarea name='ans2' id='ans2' rows='2' cols="31" value=''></textarea></td>
		</tr>
		<tr>
			<td>What was stolen?</td>
			<td><textarea name='ans3' id='ans3' rows='2' cols="31" value=''></textarea></td>
		</tr>
		<tr>
			<td>Where was you present at that time?</td>
			<td><textarea name='ans4' id='ans4' rows='2' cols="31" value=''></textarea></td>
		</tr>
		<tr>
			<td>Was there any witness at that location?</td>
			<td><textarea name='ans5' id='ans5' rows='2' cols="31" value=''></textarea></td>
		</tr>
		<tr>
			<td colspan=2 align=center>
			<input type='submit'  id='submit' size ='10' value="Submit"/>
			</a></td>
		</tr>
		<input type='hidden' name='submit' id='submit' size ='10' value='log_robbery_submit'/> 
	</form></table>
 </td>
 </tr>
 <tr>
 <td colspan="2"><?php include "../code/ecrime_footer.php"; ?></td>
 </tr>
</table>
</body></html>