<?php
	include "data_connect.php";
	dbc();
	$count=0;
	$res1=mysql_query("select * from criminal_record");
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
		var firstname = document.getElementById('criminal_f_name');
		var mob_no = document.getElementById('mob_no');
		var address = document.getElementById('address');
		
		if(isAlphabet(firstname, "Please enter only letters for your first name"))
		{
			if(isNumeric(mob_no, "Please enter a mob_no"))
			{
				if(isAlphanumeric(address, "Numbers and Letters Only for Address"))
				{
					return true;
				}	
			}
		}	
		return false;
	}	
	
	function check()
	{
		var middlename = document.getElementById('criminal_m_name');
		var lastname = document.getElementById('criminal_l_name');
		var res_no = document.getElementById('res_no');
		var dob = document.getElementById('dob');
		var skin_color = document.getElementById('skin_color');
		var hair_color = document.getElementById('hair_color');
		var scars = document.getElementById('scars');
		var phy_deformity = document.getElementById('phy_deformity');
		
		if(notEmpty(middlename,"criminal middle name can not empty"))
		{
			if(notEmpty(lastname,"criminal last name can't be empty"))
			{
				if(notEmpty(dob,"dob can't be empty"))
				{
					if(notEmpty(res_no,"resedential number can't be empty"))
					{
						if(notEmpty(skin_color,"skin_color can't be empty"))
						{
							if(notEmpty(hair_color,"hair_color can't be empty"))
							{
								if(notEmpty(scars,"scars can't be empty"))
								{
									if(notEmpty(phy_deformity,"phy_deformity can't be empty"))
									{
										return true;
									}
								}
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
	function isAlphanumeric(elem, helperMsg)
	{
		var alphaExp = /^[0-9a-zA-Z,.]+$/;
		if(elem.value.match(alphaExp))
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
	<?php include "../code/ecrime_main_menu3.php"; ?>
	</td>  
	<td width ="750">
	<table  border="0" align="top" width=100%>
		<form name="form2" action="class.controller.php" method="post" enctype="multipart/form-data" onsubmit='return formValidator()'>
		<tr>
			<td bgcolor="#C0C0C0" colspan='4' align=center height=20><b>Criminal Information
			<p align="right"> <a href="class.controller.php?link=criminal_all_data">View all records</b></a></p></td>
		</tr>
		<tr>
			<td>Criminal ID</td><td>
			<input type='text' name='criminal_id' id='criminal_id' size ='40' value=<?php echo $count; ?> readonly='true' /></td>
			<td>Upload</td><td><input type="file" name="pic" id="pic"/>&nbsp;</td>
		</tr>
		<tr>
			<td>First Name</td><td>
			<input type='text' name='criminal_f_name' id='criminal_f_name'size ='40' value='' /></td>
			<td>&nbsp;</td><td>&nbsp;</td>
		</tr>
		<tr>
			<td>Middle Name</td><td>
			<input type='text' name='criminal_m_name' id='criminal_m_name' onBlur="check()" size ='40' value='' /></td>
			<td>&nbsp;</td><td>&nbsp;</td>
		</tr>
		<tr>
			<td>Last Name</td><td>
			<input type='text' name='criminal_l_name' id='criminal_l_name' onBlur="check()" size ='40' value='' /></td>
			<td>&nbsp;</td><td>&nbsp;</td>
		</tr>
		<tr>
			<td>DOB</td>
			<td><input type='text' name='dob' id='dob' onBlur="check()" size ='10' value=''/>(yyyy-mm-dd)</td>
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
			<td>Address</td>
			<td><input type='text' name='address' id='address' size ='40' value=''/></td>
		</tr>
		<tr>
			<td>Skin Color</td>
			<td><input type='text' name='skin_color' id='skin_color' onBlur="check()" size ='15' value=''/></td>
		</tr>
		<tr>
			<td>Hair Color</td>
			<td><input type='text' name='hair_color' id='hair_color' onBlur="check()" size ='15' value=''/></td>
		</tr>
		<tr>
			<td>Height</td>
			<td><input type='text' name='height' id='height' size ='15' value=''/></td>
		</tr>
		<tr>
			<td>Weight</td>
			<td><input type='text' name='weight' id='weight' size ='15' value=''/></td>
		</tr>
		<tr>
			<td>Scars</td>
			<td><input type='text' name='scars' id='scars' onBlur="check()" size ='20' value=''/></td>
		</tr>
		<tr>
			<td>Physical Deformity</td>
			<td><textarea name='phy_deformity' id='phy_deformity' onBlur="check()" rows='3' cols="20" value=''></textarea></td>
		</tr>
		
		<tr>
			<td colspan=2 align=center>
			<input type='submit'  id='submit' name='submit' size ='10' value='Submit'/></td>
		</tr>
		<input type='hidden' name='submit' id='submit' size ='10' value='ecrime_manage_criminal_data_submit'/> 
	</form></table>
 </td>
 </tr>
 <tr>
 <td colspan="2"><?php include "../code/ecrime_footer.php"; ?></td>
 </tr>
</table>
</body></html>