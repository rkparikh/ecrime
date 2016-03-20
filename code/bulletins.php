<?php
	include "data_connect.php";
	include "class.citizen.php";
	dbc();
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
	<td>
	<div align="center" class="welcome">
	<?php echo "Logged By :".$citizen_f_name." ".$citizen_m_name." ".$citizen_l_name;?></div>
	<div>
	<form  name="form9" action="class.controller.php" method="post">
		<table width="500" border="3" align="center">
		<tr><td><b>Date</b></td>
			<td><b>News</b></td></tr>
		<?php
		$reg_id=$_GET["reg_id"];
			$a1=mysql_query("select * from news where reg_id=$reg_id");
			
			while($res2=mysql_fetch_array($a1))
			{
				echo "<tr>";			
				$date1=$res2["ndate"];
				$news_id=$res2["news_id"];
				echo "<td>$date1</td>";
				echo "<td><a href='../pdf/$news_id.pdf'><img src='pdf-small.jpg' width='30px' height='30px'/></a></td>";
				echo "</tr>";
			}
			
		?>	
		</table>
	
	</form></div>
</td>	
</tr>
<tr>
 <td colspan="2"><?php include "../code/ecrime_footer.php"; ?></td>
 </tr>
</table>
</body>
</html>	