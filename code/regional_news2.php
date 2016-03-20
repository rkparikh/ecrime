<?php
	include "data_connect.php";
	dbc();
?>
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
	<form  name="form8" class="login active" action="class.controller.php" method="post">
		<h3>Regional News</h3>
			<table>
			<?php
			$a1=mysql_query("select * from region");
			echo "<tr>";
					echo "<td>Select your region:</td> ";
						echo "<td><select name='reg_name' id='reg_name'><option value='0'>Select</option>";
						while($res2=mysql_fetch_array($a1))
						{
							
							$reg_id=$res2["reg_id"];
							$reg_name=$res2["reg_name"];
							echo "<option value=$reg_id>$reg_name</option>";
						}
					echo "</select></td></tr>";	
			?>
			</table>	
			
			<div class="bottom"> 
			<input  name="submit" type="submit" value="Submit" height="100px"></input>
			<input type='hidden' name='submit' id='submit' size ='10' value='regional_news_admin_submit'/> 
				</div>
    </form>
	</div></td></tr>
	<tr>
 <td colspan="2"><?php include "../code/ecrime_footer.php"; ?></td>
 </tr>
	</table>
</body>
</html>