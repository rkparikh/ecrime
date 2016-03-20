
<html>
<?php
	include "class.criminal.php";

	session_start();
	$criminal_obj=$_SESSION["criminal_obj"];
	//echo "11111".$criminal_obj->criminal_id;
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
		<form name="form2"  action="class.controller.php" method="post" enctype="multipart/form-data">
		<tr>
			<td bgcolor="#C0C0C0" colspan='4' align=center height=20><b>Edit Criminal Information</b></td>
		</tr>
		<tr>
			<td>Criminal ID</td><td>
			<input type='text' name='criminal_id' id='criminal_id' size ='40' value=<?php echo $criminal_obj->criminal_id; ?> ></td>
			<td>Upload</td><td><input type="file" name="pic" id="pic"/>&nbsp;</td>
		</tr>
		<tr>
			<td>First Name</td><td>
			<input type='text' name='criminal_f_name' id='criminal_f_name 'size ='40' value=<?php echo $criminal_obj->criminal_f_name; ?> ></td>
			<td>&nbsp;</td><td>&nbsp;</td>
		</tr>
		<tr>
			<td>Middle Name</td><td>
			<input type='text' name='criminal_m_name' id='criminal_m_name 'size ='40' value=<?php echo $criminal_obj->criminal_m_name;?> ></td>
			<td>&nbsp;</td><td>&nbsp;</td>
		</tr>
		<tr>
			<td>Last Name</td><td>
			<input type='text' name='criminal_l_name' id='criminal_l_name 'size ='40' value=<?php echo $criminal_obj->criminal_l_name;?> ></td>
			<td>&nbsp;</td><td>&nbsp;</td>
		</tr>
		<tr>
			<td>DOB</td>
			<td><input type='text' name='dob' id='dob' size ='10' value=<?php echo $criminal_obj->dob;?> >(yyyy-mm-dd)</td>
		</tr>
		<tr>
			<td>Mobile No.</td>
			<td><input type='text' name='mob_no' id='mob_no' size ='15' value=<?php echo $criminal_obj->mob_no;?> ></td>
		</tr>
		<tr>
			<td>Residence No.</td>
			<td><input type='text' name='res_no' id='res_no' size ='15' value=<?php echo $criminal_obj->res_no;?> ></td>
		</tr>	
		<tr>
			<td>Address</td>
			<td><input type='text' name='address' id='address' size ='40' value=<?php echo $criminal_obj->address;?> ></td>
		</tr>
		<tr>
			<td>Skin Color</td>
			<td><input type='text' name='skin_color' id='skin_color' size ='15' value=<?php echo $criminal_obj->skin_color;?> ></td>
		</tr>
		<tr>
			<td>Hair Color</td>
			<td><input type='text' name='hair_color' id='hair_color' size ='15' value=<?php echo $criminal_obj->hair_color;?> ></td>
		</tr>
		<tr>
			<td>Height</td>
			<td><input type='text' name='height' id='height' size ='15' value=<?php echo $criminal_obj->height;?> ></td>
		</tr>
		<tr>
			<td>Weight</td>
			<td><input type='text' name='weight' id='weight' size ='15' value=<?php echo $criminal_obj->weight;?> ></td>
		</tr>
		<tr>
			<td>Scars</td>
			<td><input type='text' name='scars' id='scars' size ='20' value=<?php echo $criminal_obj->scars;?> ></td>
		</tr>
		<tr>
			<td>Physical Deformity</td>
			<td><textarea name='phy_deformity' id='phy_deformity' rows='3' cols="20" value=''><?php echo $criminal_obj->phy_deformity;?></textarea></td>
		</tr>
		
		<tr>
			<td colspan=2 align=center><input type='submit'  id='submit' size ='10' value='Edit'/></td>
		</tr>
		<input type='hidden' name='edit' id='edit' size ='10' value='ecrime_manage_criminal_data_edit'/> 
	</form></table>
 </td>
 </tr>
 <tr>
 <td colspan="2"><?php include "../code/ecrime_footer.php"; ?></td>
 </tr>
</table>
</body></html>