<?php
	
	include "data_connect.php";
	dbc();
	$count=0;
	$res1=mysql_query("select * from citizen_record");
	while($res2=mysql_fetch_array($res1))
	{
		global $count;
		$count++;
	}
	$count++;
	
?>
<html>
<head>
<title>www.ecrime.com/Register New Applicant</title>
<link rel="stylesheet" href="../css/mystyle.css" type="text/css"/>

<script type="text/javascript" >
	function formValidator()
	{
		var firstname = document.getElementById('citizen_f_name');
		var mob_no = document.getElementById('mob_no');
		var email = document.getElementById('email');
		var location = document.getElementById('location');
		
		if(isAlphabet(firstname, "Please enter only letters for your first name"))
		{
			if(isNumeric(mob_no, "Please enter a mob_no"))
			{
				if(emailValidator(email, "Please enter a valid email address"))
				{
					return true;	
				}		
			}	
		}
		return false;
	}
	function check()
	{
		var middlename = document.getElementById('citizen_m_name');
		var lastname = document.getElementById('citizen_l_name');
		var res_no = document.getElementById('res_no');
		var dob = document.getElementById('dob');
		var location = document.getElementById('location');
		var details = document.getElementById('details');
		
		if(notEmpty(middlename,"citizen middle name can not empty"))
		{
			if(notEmpty(lastname,"citizen last name can't be empty"))
			{
				if(notEmpty(res_no,"resedential number can't be empty"))
				{
					if(notEmpty(dob,"dob can't be empty"))
					{
						if(notEmpty(location,"location  can't be empty"))
						{
							if(notEmpty(details,"details  can't be empty"))
							{
								return true;
							}
						}
					}
				}	
			}	
		}
	}
	function isAlphabet(elem, helperMsg)
	{
		var alphaExp = /^[a-zA-Z]+$/;
		if(elem.value.match(alphaExp))
		{
		return true;
		}else{
		alert(helperMsg);
		elem.focus();
		return false;
		}
	}
	function isNumeric(elem, helperMsg)
	{
		var numericExpression = /^[0-9]+$/;
		if(elem.value.match(numericExpression))
		{
			return true;
		}else
		{
		alert(helperMsg);
		elem.focus();
		return false;
		}
	}
	function emailValidator(elem, helperMsg)
	{
		var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
		if(elem.value.match(emailExp))
		{
			return true;
		}else{
		alert(helperMsg);
		elem.focus();
		return false;
		}
	}
	function notEmpty(elem,helperMsg)
	{
		if(elem.value.length == 0)
		{
			alert(helperMsg);
			elem.focus(); // set the focus to this input
			return false;
		}
		return true;
	}	
</script>
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
	<?php  include "../code/ecrime_main_menu3.php";  ?>
	</td>  
	<td width ="750">
	<table  border="0" align="top" width=100%>
		<form name="form1" action="class.controller.php" method="post" enctype="multipart/form-data" onsubmit='return formValidator()'>
		<tr>
			<td bgcolor="#C0C0C0" colspan='4' align=center height=20><b>Citizen Information
			<p align="right"> <a href="class.controller.php?link=citizen_all_data">View all records</b></a></td>
		</tr>
		<tr>
			<td>Citizen ID</td><td>
			<input type='text' name='citizen_id' id='citizen_id' size ='40' value=<?php echo $count;?>  readonly='true'></td>
			<td>Upload Pic.</td><td><input type="file" name="pic" id="pic"/>&nbsp;</td>
			
		</tr>
		<tr>
			<td>First Name</td><td>
			<input type='text' name='citizen_f_name' id='citizen_f_name' size ='40' value='' /></td>
			<td>&nbsp;</td><td>&nbsp;</td>
		</tr>
		<tr>
			<td>Middle Name</td><td>
			<input type='text' name='citizen_m_name' id='citizen_m_name' onBlur="check()"size ='40' value='' /></td>
			<td>&nbsp;</td><td>&nbsp;</td>
		</tr>
		<tr>
			<td>Last Name</td><td>
			<input type='text' name='citizen_l_name' id='citizen_l_name' onBlur="check()" size ='40' value='' /></td>
			<td>&nbsp;</td><td>&nbsp;</td>
		</tr>
		<tr>
			<td>Mobile No.</td>
			<td><input type='text' name='mob_no' id='mob_no' size ='15' value=''/></td>
		</tr>
		<tr>
			<td>Residence No.</td>
			<td><input type='text' name='res_no' id='res_no' onBlur="check()" size ='15' value=''/></td>
		</tr>
		<tr>
			<td>Email Id</td>
			<td><input type='text' name='email' id='email' size ='25' value=''/></td>
		</tr>
		<tr>
			<td>DOB</td>
			<td><input type='text' name='dob' id='dob' onBlur="check()" size ='10' value=''/>(yyyy-mm-dd)</td>
		</tr>	
		<tr>
			<td>Location</td>
			<td><input type='text' name='location' id='location' onBlur="check()" size ='15' value=''/></td>
		</tr>
		<tr>
			<td>Details</td>
			<td><textarea name='details' id='details' onBlur="check()" rows='3' cols="20" value=''></textarea></td>
		</tr>
		<tr>
			<td colspan=2 align=center>
			<input type='submit'  id='submit' name='submit' size ='10' value="Submit"/>
			</a></td>
		</tr>
		<input type='hidden' name='submit' id='submit' size ='10' value='ecrime_citizen_register_submit'/> 
	</form></table>
 </td>
 </tr>
 <tr>
 <td colspan="2"><?php include "../code/ecrime_footer.php"; ?></td>
 </tr>
</table>
</body></html>