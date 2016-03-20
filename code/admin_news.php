<?php

	include "data_connect.php";
	dbc();
	$count=0;
	$res1=mysql_query("select * from news");
	while($res2=mysql_fetch_array($res1))
	{
		global $count;
		$count++;
	}
	$count++;
?>
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
	<td width ="750">
	<table  border="0" align="top" width=100%>
		<form name="form4" action="class.controller.php" method="post" enctype="multipart/form-data">
		<tr>
			<td bgcolor="#C0C0C0" colspan='4' align=center height=20><b>Regional News
			</td>
		</tr>
		<tr>
			<td>News ID</td><td>
			<input type='text' name='news_id' id='news_id' size ='40' value=<?php echo $count;?>  readonly='true'></td>
		</tr>
		<tr>
			<td>Region Name</td><td>
			<?php $reg_id=$_GET["reg_name"]; ?>
			<input type='text' name='reg_id' id='reg_id' size ='40' value=<?php echo $reg_id;?> ></td>
		</tr>
		<tr>
			<td>Today</td>
			<td><input type='text' name='ndate' id='ndate' size ='10' value=<?php echo date('y-m-d');?> >(yyyy-mm-dd)</td>
		</tr>	
		<tr>
			<td>Upload News</td>
			<td><input type="file" name="news_pdf" id="news_pdf"></td>
		</tr>
		<tr>
			<td colspan=2 align=center>
			<input type='submit'  id='submit' size ='10' value="Upload"/>
			</a></td>
		</tr>
		<input type='hidden' name='submit' id='submit' size ='10' value='admin_news_submit'/> 
	</form></table>
 </td>
 </tr>
 <tr>
 <td colspan="2"><?php include "../code/ecrime_footer.php"; ?></td>
 </tr>
</table>
</body></html>