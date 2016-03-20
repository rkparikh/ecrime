<?php
?>
<html>
<head>
<title>www.ecrime.com/Register New Applicant</title>
<link rel="stylesheet" href="../css/mystyle.css" type="text/css"/>
<script type='text/javascript'>
	function formValidator()
	{
		var email = document.getElementById('email');
		var password= document.getElementById('password');
		
		// Check each input in the order that it appears in the form!
		if(emailValidator(email, "Please enter a email id"))
		{					
			if(isAlphanumeric(password, "Please enter password"))
			{
				
				return true;
			}
		}
		return false;
	}
	
	function check()
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
	function isAlphanumeric(elem, helperMsg)
	{
		var alphaExp = /^[0-9a-zA-Z,.]+$/;
		if(elem.value.match(alphaExp))
		{
			return true;
		}
		else
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

	<form action="class.controller.php" class="login active" method="post"  onsubmit='return formValidator()'>
		<h3>Login</h3>
			<table>
				<tr>
					<td>Email-ID:</td>
					<td><input type="text" name="email" id="email" onBlur="check()" size="40" /></br>
					</td> </tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="password" id="password" onBlur="check()" size="40" /></br>
					</td> </tr>
				<tr> <td colspan="2">	
				 <a href="#">Forgot your password</a></td></tr>
			</table>	
			<div class="bottom"> 
			<input  name="submit" id='submit' type="submit" value="Login" height="100px" >
			<input type='hidden' name='submit' id='submit'  size ='10' value='ecrime_index_submit'/> 
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