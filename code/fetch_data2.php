<?php
 include "data_connect.php";
	dbc();
	
    $id=$_GET["id"];
	$res1=mysql_query("select * from criminal_record where criminal_id=".$id);
	while($res2=mysql_fetch_array($res1))
		{
			
			$criminal_id=$res2["criminal_id"];
			$criminal_f_name=$res2["criminal_f_name"];
			$criminal_m_name=$res2["criminal_m_name"];
			$criminal_l_name=$res2["criminal_l_name"];
			$dob=$res2["dob"];
			$mob_no=$res2["mob_no"];
			$res_no=$res2["res_no"];
			$address=$res2["address"];
			$skin_color=$res2["skin_color"];
			$hair_color=$res2["hair_color"];
			$height=$res2["height"];
			$weight=$res2["weight"];
			$scars=$res2["scars"];
			$phy_deformity=$res2["phy_deformity"];
			$pic=$res2["pic"];
		}	
		//echo $skin_color;	
?>
	<table  border="0" align="top" width=100%>
	<tr>
			<td>Criminal Id</td><td>
			<input type='text' name='criminal_id' id='criminal_id'size ='40' value=<?php echo $criminal_id ?> ></td>
			
		</tr>
	<tr>
			<td>Criminal Name</td><td>
			<input type='text' name='criminal_f_name' id='criminal_f_name 'size ='40' value=<?php echo $criminal_f_name. $criminal_m_name. $criminal_l_name; ?> ></td>
			<?php
			echo"<td><img src=../images/$pic width=100 height=100><br>$criminal_f_name $criminal_m_name $criminal_l_name</td><td>&nbsp;</td>";
			
			?>
		</tr>
		<tr>
			<td>DOB</td>
			<td><input type='text' name='dob' id='dob' size ='10' value=<?php echo $dob;?> >(yyyy-mm-dd)</td>
		</tr>
		<tr>
			<td>Mobile No.</td>
			<td><input type='text' name='mob_no' id='mob_no' size ='15' value=<?php echo $mob_no;?> ></td>
		</tr>
		<tr>
			<td>Residence No.</td>
			<td><input type='text' name='res_no' id='res_no' size ='15' value=<?php echo $res_no;?> ></td>
		</tr>	
		<tr>
			<td>Address</td>
			<td><input type='text' name='address' id='address' size ='40' value=<?php echo $address;?> ></td>
		</tr>
	<tr>
		<td>Skin Color</td>
		<td><input type='text' name='skin_color' id='skin_color' size ='15' value=<?php echo $skin_color;?> ></td>
	</tr>
	<tr>
		<td>Hair Color</td>
		<td><input type='text' name='hair_color' id='hair_color' size ='15' value=<?php echo $hair_color; ?> ></td>
	</tr>
	<tr>
		<td>Height</td>
		<td><input type='text' name='height' id='height' size ='15' value=<?php echo $height;?> ></td>
	</tr>
	<tr>
		<td>Weight</td>
		<td><input type='text' name='weight' id='weight' size ='15' value=<?php echo $weight;?>></td>
	</tr>
	<tr>
		<td>Scars</td>
		<td><input type='text' name='scars' id='scars' size ='20' value=<?php echo $scars;?> ></td>
	</tr>
	<tr>
		<td>Physical Deformity</td>
		<td><textarea name='phy_deformity' id='phy_deformity' rows='3' cols="20"><?php echo $phy_deformity;?></textarea></td>
	</tr>
	<tr>
		<td>Additional Details</td>
		<td><input type='text' name='add_details' id='add_details' size ='20' value=''/></td>
	</tr>
	</table>
