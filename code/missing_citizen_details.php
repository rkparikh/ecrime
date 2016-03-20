<?php
	include "data_connect.php";
	include "class.citizen.php";
	session_start();
	dbc();
 $first_name=$_GET["first_name"];
 //echo $first_name; 
 
	$res1=mysql_query("select * from missing_citizen_record where missing_citizen_f_name='$first_name'");
	while($res2=mysql_fetch_array($res1))
	{
		$missing_citizen_f_name=$res2["missing_citizen_f_name"];
		$missing_citizen_m_name=$res2["missing_citizen_m_name"];
		$missing_citizen_l_name=$res2["missing_citizen_l_name"];
		$mob_no=$res2["mob_no"];
	}
		
	$citizen_obj=$_SESSION["citizen_obj"];
	$citizen_f_name=$_SESSION["citizen_f_name"];
 	$citizen_m_name=$_SESSION["citizen_m_name"];
    $citizen_l_name=$_SESSION["citizen_l_name"];
?>
<html>
<head>
<title>Untitled Document</title>
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
	<td>
	<div align="center" class="welcome">
	<?php echo "Logged By :".$citizen_f_name." ".$citizen_m_name." ".$citizen_l_name;?></div>
	<table border="0" align="top" width=100%>
		<form method="post" action="class.controller.php">
		<tr>
			<td bgcolor="#C0C0C0" colspan='4' align=center height=20><b>View Missing Citizen Details
		</tr>
		<tr>
			<td>First Name</td><td><?php echo $missing_citizen_f_name;?></td>
		</tr>
		<tr>
			<td>Middle Name</td><td><?php echo $missing_citizen_m_name;?></td>
		</tr>
		<tr>
			<td>Last Name</td><td><?php echo $missing_citizen_l_name;?></td>
		</tr>
		<tr>
			<td>Mobile No.</td><td><?php echo $mob_no;?></td>
		</tr>
		<tr>
			<td>Residence No.</td>
		</tr>
		<tr>
			<td>Address</td>
		</tr>
		<tr>
			<td>DOB</td>
		</tr>
		<tr>
			<td>Details</td>
		</tr>
		<tr>
			<td bgcolor="#C0C0C0" colspan='4' align=center height=10></td>
		</tr>
		<tr>
			<td>Last Status:</td><td>Status</td>
		 </tr>
		 <tr>
			<td>Updated by:</td><td>User</td>
		 </tr>
		 <tr>
			<td>Updated date:</td><td>Date</td>
		 </tr>
		<tr>
			<td colspan=2 align=center><input type='submit' id='submit' size ='10' value='Submit'/></td>
		</tr>
		<input type='hidden' name='submit' id='submit' size ='10' value='missing_citizen_details_submit'/> 
	</form></table>
	</td>
</tr>
<tr>
	<td colspan="2"><?php include "../code/ecrime_footer.php"; ?></td>
</tr>
</table>
</body>
</html>