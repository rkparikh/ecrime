
<html>
<head>
<title>www.ecrime.com/Register New Applicant</title>
<link rel="stylesheet" href="../css/mystyle.css" type="text/css"/>
<script type="text/javascript">
// this function check whether the selected filed is empty or not 
		function isempty(d)
		{ 
			if(d=="")
				return true;
			else
				return false;
		}
		function check()
		{
			var d1=document.getElementById("citizen_f_name").value;
			var d2=document.getElementById("citizen_m_name").value;
			var d3=document.getElementById("citizen_l_name").value;
			var d4=document.getElementById("mob_no").value;
			var d5=document.getElementById("res_no").value;
			var d6=document.getElementById("email").value;
			var d7=document.getElementById("dob").value;
			var d8=document.getElementById("location").value;
			if(isempty(d1))
			{	//alert("Hi");
				document.getElementById('dd1').innerHTML = 'Enter your first name ';
				return;
			}
			if(isempty(d2))
			{	//alert("Hi");
				document.getElementById('dd2').innerHTML = 'Enter your middle name ';
				return;
			}
			if(isempty(d3))
			{	//alert("Hi");
				document.getElementById('dd3').innerHTML = 'Enter your last name ';
				return;
			}
			if(isempty(d4))
			{	//alert("Hi");
				document.getElementById('dd4').innerHTML = 'Enter your moblie number';
				return;
			}
			if(isempty(d5))
			{	//alert("Hi");
				document.getElementById('dd5').innerHTML = 'Enter your residence number';
				return;
			}
			if(isempty(d6))
			{	//alert("Hi");
				document.getElementById('dd6').innerHTML = 'Enter your email-id';
				return;
			}
			if(isempty(d7))
			{	//alert("Hi");
				document.getElementById('dd7').innerHTML = 'Enter your date of birth';
				return;
			}
			if(isempty(d8))
			{	//alert("Hi");
				document.getElementById('dd8').innerHTML = 'Enter your location';
				return;
			}
		}
		//For first name field
		
		function first_name_valid()
		{
			var fname= document.form1.citizen_f_name.value;
			if(fname=="")
			{
				alert("Please Enter First Name");
				document.form1.citizen_f_name.focus();
				return false;
			}
			if(fname != "")
			{
				var flag=false;
				for(var indx=0;indx < fname.length;indx++)
					if(fname.toUpperCase().charAt(indx)<'A' || fname.toUpperCase().charAt(indx)>'Z')
						if(fname.charAt(indx) != ' ')
						{
							alert("Name is not valid..");
							flag=true;
							break;
						}
						return flag;
			}	
		}
		//For middle name field
		
		function middle_name_valid()
		{
			var mname= document.form1.citizen_m_name.value;
			if(mname=="")
			{
				alert("Please Enter Middle Name");
				document.form1.citizen_m_name.focus();
				return false;
			}
			if(mname != "")
			{
				var flag=false;
				for(var indx=0;indx < mname.length;indx++)
					if(mname.toUpperCase().charAt(indx)<'A' || mname.toUpperCase().charAt(indx)>'Z')
						if(mname.charAt(indx) != ' ')
						{
							alert("Name is not valid..");
							flag=true;
							break;
						}
						return flag;
			}	
		}
		//For middle name field
		
		function last_name_valid()
		{
			var lname= document.form1.citizen_l_name.value;
			if(lname=="")
			{
				alert("Please Enter Middle Name");
				document.form1.citizen_l_name.focus();
				return false;
			}
			if(lname != "")
			{
				var flag=false;
				for(var indx=0;indx < lname.length;indx++)
					if(lname.toUpperCase().charAt(indx)<'A' || lname.toUpperCase().charAt(indx)>'Z')
						if(lname.charAt(indx) != ' ')
						{
							alert("Name is not valid..");
							flag=true;
							break;
						}
						return flag;
			}	
		}
		//For phone moblie
		
		function mobile_valid()
		{
			var mob = document.form1.mob_no.value;
			if(mob=="")
			{
				alert("Please Enter the Mobile Number");
				document.form1.mob_no.focus();
				return false;
			}
			if(isNaN(mob))
			{
				alert("Enter the valid Mobile Number(Like : +91-8237143513)");
				document.form1.mob_no.focus();
				return false;
			}
		}
		//For E-Mail

		function email_valid()
		{
			var emailfilter=/^\w+[\+\.\w-]*@([\w-]+\.)*\w+[\w-]*\.([a-z]{2,4}|\d+)$/i
			var b=emailfilter.test(document.form1.email.value);
			if(b==false)
			{
				alert("Please Enter a valid Mail ID");
				document.form1.email.focus();
				return false;
			}
		}	
		//For location
		function location_valid()
		{
			var location = document.form1.location.value;
			if(location == "")
			{
				alert("Please Enter Your Address Details. Like- House/Building name/no & Landmark");
				document.form1.location.focus(this.id);
				return false;
			}
						//alert("Hi");
		}					
</script>
<?php
	
		$con=mysql_connect("localhost","root","");
		if(! $con)
		{
			die("connection failed".mysql_error());
		}
		mysql_select_db("test",$con);
		$count=0;
		$rec1=mysql_query("select * from citizen_record");
		while($rec2=mysql_fetch_array($rec1))
		{
			global $count;
			$count++;
		}
		$count++;
		mysql_close($con);
?>		
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
		<form name="form1" method="post" enctype="multipart/form-data" action="citizen_register2.php">
		<tr>
			<td bgcolor="#C0C0C0" colspan='4' align=center height=20><b>Personal Information</b></td>
		</tr>
		<tr>
			<td>Citizen ID</td><td>
			<input type='text' name='citizen_id' id='citizen_id' size ='40' value=<?php echo $count ?>  readonly="true"></td>
			<td>Upload Pic.</td><td><input type="file" name="pic" id="pic"/>&nbsp;</td>
			
		</tr>
		<tr>
			<td>First Name</td><td>
			<input type='text' name='citizen_f_name' id='citizen_f_name' onBlur="first_name_valid()" size ='40' value='' /></td>
			<td><font color="red"><b id="dd1"></b></font></td><td>&nbsp;</td>
		</tr>
		<tr>
			<td>Middle Name</td><td>
			<input type='text' name='citizen_m_name' id='citizen_m_name'  onBlur="middle_name_valid()" size ='40' value='' /></td>
			<td><font color="red"><b id="dd2"></b></font>&nbsp;</td><td>&nbsp;</td>
		</tr>
		<tr>
			<td>Last Name</td><td>
			<input type='text' name='citizen_l_name' id='citizen_l_name'  onBlur="last_name_valid()" size ='40' value='' /></td>
			<td><font color="red"><b id="dd3"></b></font>&nbsp;</td><td>&nbsp;</td>
		</tr>
		<tr>
			<td>Mobile No.</td>
			<td><input type='text' name='mob_no' id='mob_no' onBlur="mobile_valid()" size ='15' value=''/></td>
			<td><font color="red"><b id="dd4"></b></font>&nbsp;</td>
		</tr>
		<tr>
			<td>Recidence No.</td>
			<td><input type='text' name='res_no' id='res_no' size ='15' value=''/></td>
			<td><font color="red"><b id="dd5"></b></font>&nbsp;</td>
		</tr>
		<tr>
			<td>Email Id</td>
			<td><input type='text' name='email' id='email' onBlur="email_valid()" size ='25' value=''/></td>
			<td><font color="red"><b id="dd6"></b></font>&nbsp;</td>
		</tr>
		<tr>
			<td>DOB</td>
			<td><input type='text' name='dob' id='dob' size ='10' value=''/>(yyyy-mm-dd)
			<font color="red"><b id="dd7"></b></font>&nbsp;</td>
		</tr>	
		<tr>
			<td>Location</td>
			<td><input type='text' name='location' id='location'  onBlur="location_valid()"size ='15' value=''/></td>
			<td><font color="red"><b id="dd8"></b></font>&nbsp;</td>
		</tr>
		<tr>
			<td>Details</td>
			<td><textarea name='details' id='details' rows='3' cols="20" value=''></textarea></td>
		</tr>
		<tr>
			<td colspan=2 align=center>
			<input type='button' onClick="check()" name='submit' id='submit' size ='10' value="Submit"/>
			</a></td>
		</tr>
		<input type='hidden' name='action_submit' id='action_submit' size ='10' value='ecrime_citizen_register_submit'/> 
	</form></table>
 </td>
 </tr>
 <tr>
 <td colspan="2"><?php include "../code/ecrime_footer.php"; ?></td>
 </tr>
</table>
</body></html>