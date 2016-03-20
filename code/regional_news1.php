<?php
	include "data_connect.php";
	include "class.citizen.php";
	session_start();
	dbc();
	
	$citizen_obj=$_SESSION["citizen_obj"];
	$citizen_f_name=$_SESSION["citizen_f_name"];
 	$citizen_m_name=$_SESSION["citizen_m_name"];
    $citizen_l_name=$_SESSION["citizen_l_name"];
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
	<?php include "../code/ecrime_main_menu2.php"; ?>
	</td> 
	<td>
	<div align="center" class="welcome">
	<?php echo "Logged By :".$citizen_f_name." ".$citizen_m_name." ".$citizen_l_name;?></div>
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
			<input  name="submit" type="submit" value="Search" height="100px"></input>
			<input type='hidden' name='submit' id='submit' size ='10' value='regional_news_submit'/> 
				</div>
    </form>
	</div></td></tr>
	<tr>
 <td colspan="2"><?php include "../code/ecrime_footer.php"; ?></td>
 </tr>
	</table>
</body>
</html>