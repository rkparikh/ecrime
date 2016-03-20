<?php
include "class.citizen.php";
include "class.missing_citizen.php";
	session_start();
	
	$citizen_obj=$_SESSION["citizen_obj"];
	$citizen_f_name=$_SESSION["citizen_f_name"];
 	$citizen_m_name=$_SESSION["citizen_m_name"];
    $citizen_l_name=$_SESSION["citizen_l_name"];
	
?>
<html>
<head>
<title>www.ecrime.com/Register New Applicant</title>
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
	<?php  include "../code/ecrime_main_menu2.php";  ?>
	</td>
	<td>
	<div align="center" class="welcome">
	<?php echo "Logged By :".$citizen_f_name." ".$citizen_m_name." ".$citizen_l_name;?></div>
	<form action="class.controller.php" method="post">
	<?php
		$arr=$_SESSION["missing_citizen_arr"];
		//print_r ($arr[1]);
		echo"<table border=2><th>Missing Citizen First Name</th><th>Missing Citizen Middle Name</th><th>Missing Citizen Last Name</th><th>Entry by</th><th>Mobile Number</th><th>Status</th><th>Profile</th>";
			$max=sizeof($arr);
			for($i=0; $i<$max; $i++)
			{
				$missing_citizen_obj=$arr[$i];
			    
				echo"<tr><td>".$missing_citizen_obj->missing_citizen_f_name."</td>";
				echo"<td>".$missing_citizen_obj->missing_citizen_m_name."</td><td>".$missing_citizen_obj->missing_citizen_l_name."</td>";
				echo "<td> Department </td>";
				echo"<td>".$missing_citizen_obj->mob_no."</td>";
				echo "<td><a href='#'>Closed</a></td>";
				echo "<td><a href=class.controller.php?link=missing_citizen_view&&first_name=$missing_citizen_obj->missing_citizen_f_name > View </a></td>";
			}
			echo'</table>';
	?>
	</form>
	</td>
	</tr>
</table>
</body>
</html>