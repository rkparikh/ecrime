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
		include "class.criminal.php";
	
		session_start();
		$arr=$_SESSION["criminal_arr"];
		//print_r ($arr[1]);
		echo"<table border=2><th><h3>Criminal Id</h3></th><th>Criminal First Name</th><th>Criminal Middle Name</th><th>Criminal Last Name</th><th>Date of birth</th><th>Mobile Number</th><th>Residence Number</th><th>Address</th><th>Skin color</th><th>Hair color</th><th>Height</th><th>Weight</th><th>Scars</th><th>Physical Deformity</th>";
		$max=sizeof($arr);
		for($i=0; $i<$max; $i++)
		{
			//print_r ($arr[$i]);
			$criminal_obj=$arr[$i];
			echo"<tr><td>".$criminal_obj->criminal_id."</td><td>".$criminal_obj->criminal_f_name."</td>";
			echo"<td>".$criminal_obj->criminal_m_name."</td><td>".$criminal_obj->criminal_l_name."</td>";
			echo"<td>".$criminal_obj->dob."</td><td>".$criminal_obj->mob_no."</td>";
			echo"<td>".$criminal_obj->res_no."</td><td>".$criminal_obj->address."</td>";
			echo"<td>".$criminal_obj->skin_color."</td><td>".$criminal_obj->hair_color."</td>";
			echo"<td>".$criminal_obj->height."</td><td>".$criminal_obj->weight."</td>";
			echo"<td>".$criminal_obj->scars."</td><td>".$criminal_obj->phy_deformity."</td>";
			echo "<td><a href=class.controller.php?link=edit_criminal_data&&criminal_id=$criminal_obj->criminal_id&&criminal_f_name=$criminal_obj->criminal_f_name>Edit</a></td>";
			echo "<td><a href=class.controller.php?link=delete_criminal_data&&criminal_id=$criminal_obj->criminal_id&&criminal_f_name=$criminal_obj->criminal_f_name>Delete</a></td>";
			echo "</tr>";
		}
		echo'</table>';
	?>
	</td>
	</tr>
</table>
</body>
</html>