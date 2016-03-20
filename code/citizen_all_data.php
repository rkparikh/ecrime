<?php

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
	<?php  include "../code/ecrime_main_menu3.php";  ?>
	</td>
	<td>
	<?php
		include "class.citizen.php";
		session_start();
		$arr=$_SESSION["citizen_arr"];
		
		//print_r ($arr[1]);
		echo"<table border=2><th>Citizen Id</th><th>Citizen First Name</th><th>Citizen Middle Name</th><th>Citizen Last Name</th><th>Mobile Number</th><th>Residence Number</th><th>Email ID</th><th>Date of birth</th><th>Location</th><th>Details</th>";
					
			$max=sizeof($arr);
			for($i=0; $i<$max; $i++)
			{
				
				$citizen_obj=$arr[$i];
			    echo"<tr><td>".$citizen_obj->citizen_id."</td><td>".$citizen_obj->citizen_f_name."</td>";
				echo"<td>".$citizen_obj->citizen_m_name."</td><td>".$citizen_obj->citizen_l_name."</td>";
				echo"<td>".$citizen_obj->mob_no."</td><td>".$citizen_obj->res_no."</td>";
				echo"<td>".$citizen_obj->email."</td><td>".$citizen_obj->dob."</td>";
				echo"<td>".$citizen_obj->location."</td><td>".$citizen_obj->details."</td>";	
				echo "<td><a href=class.controller.php?link=edit_citizen_data&&citizen_id=$citizen_obj->citizen_id&&citizen_f_name=$citizen_obj->citizen_f_name>Edit</a></td>";
				echo "<td><a href=class.controller.php?link=delete_citizen_data&&citizen_id=$citizen_obj->citizen_id&&citizen_f_name=$citizen_obj->citizen_f_name>Delete</a></td>";
				echo "</tr>";
			}
			echo'</table>';
	?>
	</td>
	</tr>
</table>
</body>
</html>