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
		include "class.missing_citizen.php";

		session_start();
		$arr=$_SESSION["missing_citizen_arr"];
		//print_r ($arr[1]);
		echo"<table border=2><th><h5>Missing Citizen Id</h5></th><th>Missing Citizen First Name</th><th>Missing Citizen Middle Name</th><th>Missing Citizen Last Name</th><th>Mobile Number</th><th>Residence Number</th><th>Address</th><th>Date of birth</th><th>Details</th><th>Skin_color</th><th>Hair_color</th><th>Height</th>";
			$max=sizeof($arr);
			for($i=0; $i<$max; $i++)
			{
				$missing_citizen_obj=$arr[$i];
			    
				echo"<tr><td>".$missing_citizen_obj->missing_citizen_id."</td><td>".$missing_citizen_obj->missing_citizen_f_name."</td>";
				echo"<td>".$missing_citizen_obj->missing_citizen_m_name."</td><td>".$missing_citizen_obj->missing_citizen_l_name."</td>";
				echo"<td>".$missing_citizen_obj->mob_no."</td><td>".$missing_citizen_obj->res_no."</td>";
				echo"<td>".$missing_citizen_obj->address."</td><td>".$missing_citizen_obj->dob."</td>";
				echo"<td>".$missing_citizen_obj->details."</td><td>".$missing_citizen_obj->skin_color."</td>";
				echo"<td>".$missing_citizen_obj->hair_color."</td><td>".$missing_citizen_obj->height."</td>";
				echo "<td><a href=class.controller.php?link=edit_missing_citizen_data&&missing_citizen_id=$missing_citizen_obj->missing_citizen_id&&missing_citizen_f_name=$missing_citizen_obj->missing_citizen_f_name>Edit</a></td>";
				echo "<td><a href=class.controller.php?link=delete_missing_citizen_data&&missing_citizen_id=$missing_citizen_obj->missing_citizen_id&&missing_citizen_f_name=$missing_citizen_obj->missing_citizen_f_name>Delete</a></td>";
				echo "</tr>";
				
			}
			echo'</table>';
	?>
	</td>
	</tr>
</table>
</body>
</html>