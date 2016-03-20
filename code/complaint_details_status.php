<?php
	include "data_connect.php";
	include "class.citizen.php";
	session_start();
	dbc();
	
	$citizen_obj=$_SESSION["citizen_obj"];
	$citizen_f_name=$_SESSION["citizen_f_name"];
 	$citizen_m_name=$_SESSION["citizen_m_name"];
    $citizen_l_name=$_SESSION["citizen_l_name"];
	
	$case_id=$_GET["case_id"];
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
			<td bgcolor="#C0C0C0" colspan='4' align=center height=20><b>Complaint details
			</td>
		</tr>
		<tr>
			<td>Complaint no.:</td><td><?php echo $case_id; ?></td>
		</tr>
		<tr>
			<td>Complaint type :</td><td><?php echo $crime_name; ?></td>
		</tr>
		<tr>
			<td>Complaint by :</td><td><?php echo $citizen_id; ?></td>
		</tr>
		<tr>
			<td>Complaint date :</td>
			<td><?php echo $fdate; ?></td>
		</tr>	
		<tr>
			<td>Where did the it occurs?</td>
			<td><?php echo $ans1; ?></td>
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
		 <td>Updated by:</td><td>Department</td>
		 </tr>
		 <tr>
		 <td>Updated date:</td>
		 </tr>
		
	</form></table>
 </td>
 </tr>
 <tr>
 <td colspan="2"><?php include "../code/ecrime_footer.php"; ?></td>
 </tr>
</table>
</body></html>