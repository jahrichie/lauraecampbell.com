<?php

include '../admin/local.php';
 
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
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Laura Campbell ABOUT</title>
	
	<meta name="generator" content="TextMate http://macromates.com/">
	<meta name="author" content="richard oreilly chyeaa.com">
				<link rel="stylesheet" type="text/css" href="../reset.css" />
			<link rel="stylesheet" type="text/css" href="../aboutsteez.css" />
 
 	<!--open source scripts start-->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<script type="text/javascript" src="../stepcarousel.js"></script>
 	<script type="text/javascript" src="../sexyness.js"></script>
 


</head>
<body>  
	<div id="body-wrap">	<div id="top-hat">&nbsp;</div><!--  !top-hat -->
	<div id="name"> <img src="../images/name-veritcal.png">	</div>	<!--  !name -->
	<div id="center-wrap"> 
		
		
		<div id="header"> 	 	
	 			  
 <div id="navish"> 	 
	
		<li ><a href="../">home </a></li>  
		<li> <a href="../media/">media</a> 	</li>  
		<li style="color:#000;"> about  	</li>  
		<li> <a href="../resume/">resume´</a>	</li> 		</ul>
	
	
	</div>	<!--  !navish -->
			
			
			</div>	<!--  !header -->



			<div id="about-area" >

			 <div id="about-pic" ><img src="about-pic.png"> </div><!-- !about-pic -->




			 <div  id="about-statement" >
   <?php echo $aboutcopy;?>
<br><br>
<center> <p>You can always email me personally @ <a href="mailto:laura@lauraecampbell.com">laura@lauraecampbell.com </p></a> </center>
			   
			 </div><!-- !about-statement -->


			</div><!-- !about-area -->

  			<div id="contact"> 

		 <div id="contact-copy">CONTACT MY AGENT <span class="black">ROBERT ATTERMAN</span> @  </div>	<!--  !contact-copy -->
		<div id="abrams"><img src="../images/abrams.png"> </div>	<!--  !abrams -->
	
	 

			<div id="phone-email"><a href="mailto:robert.attermen@abramsartny.com">E: robert.attermen@abramsartny.com</a>  <br> <a href="#">P: 646.486.4600</a>	</div>	<!--  !phone-email -->



			</div>	<!--  !contact -->

				</div>	<!--  !review-quotes -->	

  	 	<div id="top-hat2">&nbsp;</div>	<!-- top hat -->
	
	</div>	<!--  !center-wrap -->

		<div id="shoe">
		 
			<div id="bottom">
			 
				<ul>
					<li ><a href="../">home </a></li>  
					<li> <a href="../media/">media</a> 	</li>  
					<li style="color:#000;"> about </li>  
					<li> <a href="../resume/">resume´</a>	</li> 		</ul>
					
					</div>	<!--  !bottom -->
		 
			
			</div>	<!--  !shoe -->
	</div>	<!--  !body-wrap -->
	
	<!--  !tracking -->
 	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-24015591-1']);
	  _gaq.push(['_setDomainName', '.lauraecampbell.com']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
	
	
</body>
</html>
