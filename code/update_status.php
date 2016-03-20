
<html>
<head>
<title>www.ecrime.com/Log Complaint</title>
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
	<form action="class.controller.php" method="post">
	<?php
		include "class.fir_data.php";
		session_start();
		
		$arr=$_SESSION["fir_arr"];
		echo"<table border=2><th>Case Id</th><th>Type</th><th>Date</th><th>Complaint By</th><th>Status</th><th>Complaint</th>";
		
		$max=sizeof($arr);
		for($i=0; $i<$max;$i++)
		{
			//print_r ($arr[$i]);
			$fir_data_obj=$arr[$i];
			echo"<tr><td>".$fir_data_obj->case_id."</td><td>".$fir_data_obj->crime_name."</td>";
			echo "<td>".$fir_data_obj->fdate."</td><td>".$fir_data_obj->citizen_id."</td>";
			echo "<td>New</td>";
			echo "<td><a href=class.controller.php?link=edit_complaint_status&&case_id=$fir_data_obj->case_id>Edit</a>";
			echo "</td>";
			echo "</tr>";
		}
		echo "</table>";	
	?>
	</form>
	</td>
	</tr>
</table>
</body></html>

