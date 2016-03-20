
<html>
<head>
<title>www.ecrime.com/Register New Applicant</title>
<link rel="stylesheet" href="../css/mystyle.css" type="text/css"/>
<script type='text/javascript'>
	function formValidator()
	{
		var email = document.getElementById('email');
		var password= document.getElementById('password');
		if(notEmpty(email,"Username can not empty"))
		{
			if(notEmpty(password,"Password can't be empty"))
			{
				return true;
			}	
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
	<?php include "../code/ecrime_header.php";?>
	</td></tr>
<tr>
<td>
<div class="wrapper">
<?php
	if(isset($_GET["err"]))
	{
		echo"<font color=red>Incorrect Login:</font>";
	}
?>
	<form  action="class.controller.php" method="post" onsubmit='return formValidator()'>
		<h3>Admin Login</h3>
			<table>
				<tr>
					<td>Email-ID:</td>
					<td><input type="text" name="email" id="email" /></td> </tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="password" id="password" /></td> </tr>
				<tr> <td colspan="2">	
				 <a href="#">Forgot your password</a></td></tr>
			</table>	
			<div class="bottom"> 
			<input  name="submit" type="submit" value="Login" height="100px" >
			<input type='hidden' name='submit' id='submit' size ='10' value='ecrime_admin_index_submit'/> 
				</div>
    </form>
	</div>
	</td>
	</tr>
<tr>
 <td colspan="2"><?php include "../code/ecrime_footer.php"; ?></td>
 </tr>
</body>
</html>
<?php

?>