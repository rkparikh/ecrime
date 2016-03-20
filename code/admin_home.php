<?php

	
?>
<html>
<head>
<title>www.ecrime.com/Register New Applicant</title>
<link rel="stylesheet" href="../css/mystyle.css" type="text/css"/>
<script type="text/javascript">
	var image1=new Image()
	image1.src="police.jpg"
	var image2=new Image()
	image2.src="real-crime.jpg"
	var image3=new Image()
	image3.src="crim.jpg"
</script>
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
	<td align='center'>
	<img src="police.jpg" name="slide" height=300 width=500/>
	<script>
		var step=1
		function slideit()
		{
			if (!document.images)
			return
			document.images.slide.src=eval("image"+step+".src")
			if (step<3)
				step++
			else
				step=1
			setTimeout("slideit()",2300)
		}
		slideit()
	</script>
	</td>
 </tr>
 <tr>
 <td colspan="2"><?php include "../code/ecrime_footer.php"; ?></td>
 </tr>
</table>
</body></html>