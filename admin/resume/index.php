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
	
	<style type="text/css">
		hr.pme-hr		     { border: 0px solid; padding: 0px; margin: 0px; border-top-width: 1px; height: 1px; }
		table.pme-main 	     { border: #004d9c 1px solid; border-collapse: collapse; border-spacing: 0px; width: 100%; }
		table.pme-navigation { border: #004d9c 0px solid; border-collapse: collapse; border-spacing: 0px; width: 100%; }
		td.pme-navigation-0, td.pme-navigation-1 { white-space: nowrap; }
		th.pme-header	     { border: #004d9c 1px solid; padding: 4px; background: #add8e6; }
		td.pme-key-0, td.pme-value-0, td.pme-help-0, td.pme-navigation-0, td.pme-cell-0,
		td.pme-key-1, td.pme-value-1, td.pme-help-0, td.pme-navigation-1, td.pme-cell-1,
		td.pme-sortinfo, td.pme-filter { border: #004d9c 1px solid; padding: 3px; }
		td.pme-buttons { text-align: left;   }
		td.pme-message { text-align: center; }
		td.pme-stats   { text-align: right;  }
	</style>	 
			<link rel="stylesheet" type="text/css" href="../admin.css" />
			
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>admin | resume </title>
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
<li > <a href="../about">about</a> </li>|
<li style="color:orange;"> resume</li> 
 </ul>
</div><!-- admin-nav -->


<div id="update-about">
<form action="make/" method="POST">


	<h1>Medium:</h1><br> 
	<select name="table">
	  <option value="tv">TV</option>
	  <option value="theatre">THEATRE</option>
	  <option value="film">FILM</option>
	  <option value="education">EDUCATION</option> 
 	  <option value="training">TRAINING</option>
	<option value="specialskills">SPECIAL SKILLS</option>



	</select>

<br> <br> 

	<h1>Title</h1><br> 
<input type="text" name="tvtitle" /><br><br>

	<h1>Role</h1><br>
<input type="text" name="tvrole" /><br><br>

	<h1>Where</h1><br>
<input type="text" name="tvnetwork" /><br><br>

 
 	<br><br><input type="submit" value="update resume!"  /><br><br><br> <br><br> 
</form>



 
 


</div>	<!-- !admin-wrap -->

</body>
</html>
