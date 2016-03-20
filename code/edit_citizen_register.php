
<html>
<?php
include "class.citizen.php";
include "data_connect.php";
	dbc();
session_start();
$citizen_obj=$_SESSION["citizen_obj"];
//echo "22222".$citizen_obj->citizen_id;
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
	<table  border="0" align="top" width=100%>
		<form name="form1" action="class.controller.php" method="post" enctype="multipart/form-data">
		<tr>
			<td bgcolor="#C0C0C0" colspan='4' align=center height=20><b>Edit Citizen Information</b></td>
		</tr>
		<tr>
			<td>Citizen ID</td><td>
			<input type='text' name='citizen_id' id='citizen_id' size ='40' value=<?php echo $citizen_obj->citizen_id; ?> /></td>
			<td>Upload Pic.</td><td><input type="file" name="pic" id="pic" >&nbsp;</td>
			
		</tr>
		<tr>
			<td>First Name</td><td>
			<input type='text' name='citizen_f_name' id='citizen_f_name' size ='40' value=<?php echo $citizen_obj->citizen_f_name; ?>  ></td>
			<td>&nbsp;</td><td>&nbsp;</td>
		</tr>
		<tr>
			<td>Middle Name</td><td>
			<input type='text' name='citizen_m_name' id='citizen_m_name 'size ='40' value=<?php echo $citizen_obj->citizen_m_name;?> ></td>
			<td>&nbsp;</td><td>&nbsp;</td>
		</tr>
		<tr>
			<td>Last Name</td><td>
			<input type='text' name='citizen_l_name' id='citizen_l_name 'size ='40' value=<?php echo $citizen_obj->citizen_l_name;?> ></td>
			<td>&nbsp;</td><td>&nbsp;</td>
		</tr>
		<tr>
			<td>Mobile No.</td>
			<td><input type='text' name='mob_no' id='mob_no' size ='15' value=<?php echo $citizen_obj->mob_no;?> ></td>
		</tr>
		<tr>
			<td>Residence No.</td>
			<td><input type='text' name='res_no' id='res_no' size ='15' value=<?php echo $citizen_obj->res_no;?> ></td>
		</tr>
		<tr>
			<td>Email Id</td>
			<td><input type='text' name='email' id='email' size ='25' value=<?php echo $citizen_obj->email;?> ></td>
		</tr>
		<tr>
			<td>DOB</td>
			<td><input type='text' name='dob' id='dob' size ='10' value=<?php echo $citizen_obj->dob;?> >(yyyy-mm-dd)</td>
		</tr>	
		<tr>
			<td>Location</td>
			<td><input type='text' name='location' id='location' size ='15' value=<?php echo $citizen_obj->location;?> ></td>
		</tr>
		<tr>
			<td>Details</td>
			<td><textarea name='details' id='details' rows='3' cols="20" value=''><?php echo $citizen_obj->details;?></textarea></td>
		</tr>
		<tr>
			<td colspan=2 align=center>
			<input type='submit'  id='submit' size ='10' value="Edit"/>
			</a></td>
		</tr>
		<input type='hidden' name='edit' id='edit' size ='10' value='ecrime_citizen_register_edit'/> 
	</form></table>
 </td>
 </tr>
 <tr>
 <td colspan="2"><?php include "../code/ecrime_footer.php"; ?></td>
 </tr>
</table>
</body></html>