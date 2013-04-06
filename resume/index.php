<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Laura Campbell RESUME</title>
	
	<meta name="generator" content="TextMate http://macromates.com/">
	<meta name="author" content="richard oreilly chyeaa.com">
				<link rel="stylesheet" type="text/css" href="../reset.css" />
			<link rel="stylesheet" type="text/css" href="../resumesteez.css" />
 
	
</head>
<body>	 
	
	<div id="body-wrap">
			<div id="top-hat">&nbsp;</div>	<!-- top hat -->
	<div id="name"> <img src="../images/name-veritcal.png">	</div>	<!--  !name -->
	<div id="center-wrap"> 
		
		
		
			<div id="header"> 	 	
	 	
	 <div id="navish"> 	 		
		<ul>
			<li> <a href="../">home</a>	</li>  
			<li > <a href="../media/"> media 	</li>  
			<li> <a href="../about/">about</a> 	</li>  
			<li style="color:#000;"> resume´ 	</li> 		</ul>


		</div>	<!--  !navish -->


				</div>	<!--  !header -->
			
            <center><h15 id="download"  > <span class="small"> <a href="Laura-e-Campbell-resume.doc">download resume</a></span></h15><br></center><br>	<br>
            
 <div id="resume">
    
	
 <span class="resume-header">TV</span><br>
<?php

// Make a MySQL Connection
include '../admin/local.php';

// Get all the data from the "example" table
$result = mysql_query("SELECT * FROM tv ORDER BY id ASC") 
or die(mysql_error());  

// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table



	echo '<table width="600" border="0"> <tr><td width="150">'.$row['tvtitle'].'</td>';
	echo '<td width="150" >'.$row['tvrole'].'</td>';
	echo ' <td  width="150" >'.$row['tvnetwork'].'</td></tr></table>';
} 


?>
<br>
<br>
 <span class="resume-header">THEATRE</span><br>
<?php

// Make a MySQL Connection
include '../admin/local.php';

// Get all the data from the "example" table
$result = mysql_query("SELECT * FROM theatre ORDER BY id ASC") 
or die(mysql_error());  

// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table



	echo '<table width="600" border="0"> <tr><td width="150">'.$row['tvtitle'].'</td>';
	echo '<td width="150" >'.$row['tvrole'].'</td>';
	echo ' <td  width="300" >'.$row['tvnetwork'].'</td></tr></table>';
} 


?>


<br>
<br>
 <span class="resume-header">FILM</span><br>
<?php

// Make a MySQL Connection
include '../admin/local.php';

// Get all the data from the "example" table
$result = mysql_query("SELECT * FROM film ORDER BY id ASC") 
or die(mysql_error());  

// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table



	echo '<table width="600" border="0"> <tr><td width="150">'.$row['tvtitle'].'</td>';
	echo '<td width="150" >'.$row['tvrole'].'</td>';
	echo ' <td  width="300" >'.$row['tvnetwork'].'</td></tr></table>';
} 


?>

<br>
<br>

<span class="resume-header">EDUCATION</span><br>
<?php

// Make a MySQL Connection
include '../admin/local.php';

// Get all the data from the "example" table
$result = mysql_query("SELECT * FROM education ORDER BY id ASC") 
or die(mysql_error());  

// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table



	echo '<table width="600" border="0"> <tr><td >'.$row['tvtitle'].'</td>';
	echo '<td   >'.$row['tvrole'].'</td>';
	echo '  </tr></table>';
} 


?>

<br>
<br>

<span class="resume-header">TRAINING</span><br>
<?php

// Make a MySQL Connection
include '../admin/local.php';

// Get all the data from the "example" table
$result = mysql_query("SELECT * FROM training ORDER BY id ASC") 
or die(mysql_error());  

// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table



	echo '<table width="600" border="0"> <tr><td width="100" >'.$row['tvtitle'].'</td>';
	echo '<td  width="300" >'.$row['tvrole'].'</td>';
	echo '  </tr></table>';
} 


?>

<br>
<br>

<span class="resume-header">SPECIAL SKILLS</span><br>
<?php

// Make a MySQL Connection
include '../admin/local.php';

// Get all the data from the "example" table
$result = mysql_query("SELECT * FROM specialskills ORDER BY id ASC") 
or die(mysql_error());  

// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table



	echo '<table width="600" border="0"> <tr><td width="100" >'.$row['tvtitle'].'</td>';
	echo '<td  width="300" >'.$row['tvrole'].'</td>';
	echo '  </tr></table>';
} 


?>








		 <br><br><br>
        


		<br>
		<br>
		 



	  </div> <!--  !resume-->	


		
 
			<div id="contact"> 

		 <div id="contact-copy">CONTACT MY AGENT <span class="black">ROBERT ATTERMAN</span> @  </div>	<!--  !contact-copy -->
		<div id="abrams"><img src="../images/abrams.png"> </div>	<!--  !abrams -->
	
	 

			<div id="phone-email"><a href="mailto:robert.attermen@abramsartny.com">E: robert.attermen@abramsartny.com</a>  <br> <a href="#">P: 646.486.4600</a>	</div>	<!--  !phone-email -->



			</div>	<!--  !contact -->
	
	  </div>	<!--  !review-quotes -->	

  
				<div id="top-hat">&nbsp;</div>	<!-- top hat -->
	</div>	<!--  !center-wrap -->
	
		<div id="shoe">
		 
			<div id="bottom">
			<ul>
					<li> <a href="../">home</a> 	</li>  
				<li> <a href="../media/">media</a> 	</li>  
				<li> <a href="../about/">about</a> 	</li>  
				<li style="color:#000;">resume´ </li> 		</ul>
					</div>	<!--  !bottom -->
		 
			
			</div>	<!--  !shoe -->

	  </div>	

 
 
 	<!--  !body-wrap -->
</body>
</html>
