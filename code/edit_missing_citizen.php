
<html>
<?php
include "class.missing_citizen.php";

session_start();
$missing_citizen_obj=$_SESSION["missing_citizen_obj"];
//echo "0000".$missing_citizen_obj->missing_citizen_id;
?>
<head>
<title>www.ecrime.com/Register New Applicant</title>
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
	<table border="0" align="top" width=100%>
		<form name="form3" method="post" action="class.controller.php">
		<tr>
			<td bgcolor="#C0C0C0" colspan='4' align=center height=20><b>Edit Missing Citizen Information</b></td>
		</tr>
		<tr>
			<td>Missing Citizen ID</td><td>
			<input type='text' name='missing_citizen_id' id='missing_citizen_id' size ='40' value=<?php echo $missing_citizen_obj->missing_citizen_id;?> ></td>
			<td>&nbsp;</td><td>&nbsp;</td>
		</tr>
		<tr>
			<td>First Name</td><td>
			<input type='text' name='missing_citizen_f_name' id='missing_citizen_f_name'size ='40' value=<?php echo $missing_citizen_obj->missing_citizen_f_name;?> ></td>
			<td>&nbsp;</td><td>&nbsp;</td>
		</tr>
		<tr>
			<td>Middle Name</td><td>
			<input type='text' name='missing_citizen_m_name' id='missing_citizen_m_name'size ='40' value=<?php echo $missing_citizen_obj->missing_citizen_m_name;?> ></td>
			<td>&nbsp;</td><td>&nbsp;</td>
		</tr>
		<tr>
			<td>Last Name</td><td>
			<input type='text' name='missing_citizen_l_name' id='missing_citizen_l_name'size ='40' value=<?php echo $missing_citizen_obj->missing_citizen_l_name;?> ></td>
			<td>&nbsp;</td><td>&nbsp;</td>
		</tr>
		<tr>
			<td>Mobile No.</td>
			<td><input type='text' name='mob_no' id='mob_no' size ='15' value=<?php echo $missing_citizen_obj->mob_no;?> ></td>
		</tr>
		<tr>
			<td>Residence No.</td>
			<td><input type='text' name='res_no' id='res_no' size ='15' value=<?php echo $missing_citizen_obj->res_no;?> ></td>
		</tr>	
		<tr>
			<td>Address</td>
			<td><input type='text' name='address' id='address' size ='40' value=<?php echo $missing_citizen_obj->address;?> ></td>
		</tr>
		<tr>
			<td>DOB</td>
			<td><input type='text' name='dob' id='dob' size ='10' value=<?php echo $missing_citizen_obj->dob;?> >(yyyy-mm-dd)</td>
		</tr>
		<tr>
			<td>Details</td>
			<td><textarea name='details' id='details' rows='3' cols="20" >  <?php echo $missing_citizen_obj->details;?>   </textarea></td>
		</tr>
		<tr>
			<td>Skin Color</td>
			<td><input type='text' name='skin_color' id='skin_color' size ='15' value=<?php echo $missing_citizen_obj->skin_color;?> ></td>
		</tr>
		<tr>
			<td>Hair Color</td>
			<td><input type='text' name='hair_color' id='hair_color' size ='15' value=<?php echo $missing_citizen_obj->hair_color;?> ></td>
		</tr>
		<tr>
			<td>Height</td>
			<td><input type='text' name='height' id='height' size ='15' value=<?php echo $missing_citizen_obj->height;?> ></td>
		</tr>
		<tr>
			<td colspan=2 align=center><input type='submit' id='submit' size ='10' value='Edit'/></td>
		</tr>
		<input type='hidden' name='edit' id='edit' size ='10' value='ecrime_missing_citizen_edit'/> 
	</form></table>
 </td>
 </tr>
 <tr>
 <td colspan="2"><?php include "../code/ecrime_footer.php"; ?></td>
 </tr>
</table>
</body></html>