<?php
include "class.citizen.php";
session_start();
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
	<td align="center">
	<div align="center" class="welcome">
	<?php echo "Logged By :".$citizen_f_name." ".$citizen_m_name." ".$citizen_l_name;?></div>
		<h1>Map</h1>
		<?php
			$reg_id=$_GET["reg_name"];
			//echo "^".$reg_id."^";
			echo "<img src='../region/$reg_id.jpg' width='400' height='400'/>";
		?>	
	</td>
</tr>
<tr>
	<td></td>
	<td>
	<?php
		echo "<a href=class.controller.php?link=bulletin&&d1=$reg_id>Click here for Crime Bulletins</a>";
		?>
	</td>	
</tr>
</table>
</body>
</html>	