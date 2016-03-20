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
	<td align='center'>
	<marquee dir="ltr">
	<?php
	echo "Welcome :".$citizen_f_name." ".$citizen_m_name." ".$citizen_l_name;
	?></marquee>
		<br><img src="crime2.jpg"/>
	</td> 
	</tr>
<tr>
 <td colspan="2"><?php include "../code/ecrime_footer.php"; ?></td>
 </tr>	
</table>
</body>
</html>
