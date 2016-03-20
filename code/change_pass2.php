
<html>

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
		<form name="form7"  method="post" action="class.controller.php">
		<tr>
			<td bgcolor="#C0C0C0" colspan='4' align=center height=20><b>Change Password</b></td>
		</tr>
		<tr>
			<td>Email ID</td><td>
			<input type='text' name='email' id='email' size ='40' value=></td>
			<td>&nbsp;</td><td>&nbsp;</td>
		</tr>
		<tr>
			<td>Old Password</td><td>
			<input type='password' name='old_pass' id='old_pass' size ='40' value= ></td>
			<td>&nbsp;</td><td>&nbsp;</td>
		</tr>
		<tr>
			<td>New Password</td><td>
			<input type='password' name='new_pass' id='new_pass' size ='40' value= ></td>
			<td>&nbsp;</td><td>&nbsp;</td>
		</tr>
		<tr>
			<td>Retype Password</td><td>
			<input type='password' name='retype_pass' id='retype_pass' size ='40' value= ></td>
			<td>&nbsp;</td><td>&nbsp;</td>
		</tr>
		<tr>
			<td colspan=2 align=center><input type='submit'  id='submit' size ='10' value='Submit'/></td>
		</tr>
		<input type='hidden' name='submit' id='submit' size ='10' value='ecrime_change_pass2_submit'/> 
	</form></table>
 </td>
 </tr>
 <tr>
 <td colspan="2"><?php include "../code/ecrime_footer.php"; ?></td>
 </tr>
</table>
</body></html>