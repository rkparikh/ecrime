<?php
	include "class.citizen.php";
	include "data_connect.php";
	
	session_start();
	dbc();
	$count=0;
	$res1=mysql_query("select * from fir_data");
	while($res2=mysql_fetch_array($res1))
	{
		global $count;
		$count++;
	}
	$count++;
	
	
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
	<td><div align="center" class="welcome">
	<?php echo "Logged By :".$citizen_f_name." ".$citizen_m_name." ".$citizen_l_name;?></div>
	<div class="wrapper">
	<form  name="form7" class="login active" action="class.controller.php" method="post">
		<h3>View Complaint</h3>
			<table>
			<?php
			$a1=mysql_query("select * from crime_type");
			echo "<tr>";
					echo "<td>Complaint type:</td> ";
						echo "<td><select name='crime_id' id='crime_name'><option value='0'>Select</option>";
						while($res2=mysql_fetch_array($a1))
						{
							
							$crime_id=$res2["crime_id"];
							$crime_name=$res2["crime_name"];
							echo "<option value=$crime_id>$crime_name</option>";
						}
					echo "</select></td></tr>";	
			?>		
			<tr>
			<td>Complaint number:</td>
				<td><input type='text'  name='case_id' id='case_id' value=<?php echo $count;?>  readonly='true' >
				</td></tr>
					
			</table>	
			
			<div class="bottom"> 
			<input  name="submit" type="submit" value="Submit" height="100px"></input>
			<input type='hidden' name='submit' id='submit' size ='10' value='log_complaint_submit'/> 
				</div>
    </form>
	</div></td></tr>
	<tr>
	<td colspan="2"><?php include "../code/ecrime_footer.php"; ?></td>
 </tr>
	</table>
</body>
</html>
