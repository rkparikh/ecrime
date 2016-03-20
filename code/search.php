
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
	<?php include "../code/ecrime_main_menu3.php"; ?>
	</td> 
	<td>
	<div class="wrapper">
	<form  name="form7" class="login active" action="class.controller.php" method="post">
		<h3>Search Complaint</h3>
			<table>
			<tr>
			<td>Complaint Type:</td>
			<td><select name='crime_name' id='crime_name'>
				<option value='0'>Select</option>
				<option value='1'>Complaint</option>
				<option value='2'>Missing Citizen</option>
			<tr>
			<td>Complaint number:</td>
				<td><input type='text'  name='case_id' id='case_id' value='' >
				</td></tr>
					
			</table>	
			
			<div class="bottom"> 
			<input  name="submit" type="submit" value="Search" height="100px"></input>
			<input type='hidden' name='submit' id='submit' size ='10' value='search_complaint_submit'/> 
				</div>
    </form>
	</div></td></tr>
	<tr>
	<td colspan="2"><?php include "../code/ecrime_footer.php"; ?></td>
 </tr>
	</table>
</body>
</html>
