<?php

include '../local.php';
 
$sql = "select * from `about` where ID = 1";
$query = mysql_query($sql);
while ($row = mysql_fetch_array($query)){
	
	$aboutcopy = $row['aboutcopy'];
	
		 
}
mysql_free_result($query);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
		 
			<link rel="stylesheet" type="text/css" href="../admin.css" />
			
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>admin | about </title>
	<meta name="generator" content="TextMate http://macromates.com/">
	<meta name="author" content="superman">
	<!-- Date: 2011-06-16 -->
 
</head>
<body>
	
	
		<div id="admin-wrap">
	
	<div id="admin-nav">
	<ul>	
<li><a href="../">quotes</a> </li>|
<li><a href="#">media</a> </li>|
<li style="color:orange;"> about </li>|
<li><a href="../resume">resume</a></li> 
 </ul>
</div><!-- admin-nav -->


<div id="update-about">
<form action="make/" method="POST">
	<h1>About Copy</h1><br>
<TEXTAREA NAME="aboutcopy" id="aboutcopy" COLS=80 ROWS=19><?php echo $aboutcopy;?></TEXTAREA>
 
 	<br><br><input type="submit" value="update about!"  /><br><br><br> <br><br> 
</form>
</div><!-- update-about -->





</div>	<!-- !admin-wrap -->

</body>
</html>
