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
<title>www.ecrime.com/Complaint History</title>
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
	<?php
		$res1=mysql_query("select * from fir_data");
		echo"<table border=2><th>Case Id</th><th>Crime Name</th><th>Location</th><th>Date</th><th>Status</th>";
		while($res2=mysql_fetch_array($res1))
		{
			echo "<tr>";
			echo "<td>".$res2["case_id"]."</td>";
			echo "<td>".$res2["crime_name"]."</td>";
			echo "<td>".$res2["location"]."</td>";
			echo "<td>".$res2["fdate"]."</td>";
			echo "<td>Closed</td>";
			echo "</tr>";
		}
		echo "</table>";
	?>
	</td>
	</tr>
</table>
</body>
</html>