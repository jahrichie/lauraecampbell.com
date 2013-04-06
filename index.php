<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Laura Campbell HOME</title>
	
	<meta name="generator" content="TextMate http://macromates.com/">
	<meta name="author" content="richard oreilly chyeaa.com">
				<link rel="stylesheet" type="text/css" href="reset.css" />
			<link rel="stylesheet" type="text/css" href="heart.css" />
 
 	<!--open source scripts start-->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<script type="text/javascript" src="stepcarousel.js"></script>
 	<script type="text/javascript" src="sexyness.js"></script>
 


	<!-- Sexy Scroll from  http://blog.medianotions.de/en/articles/2009/smoothscroll-for-jquery--> 
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script> 


<script type="text/javascript" >
// jQuery SmoothScroll | Version 11-03-14
$(document).ready(function() {

$('a[href*=#]').click(function() {

  // duration in ms
  var duration=1500;

  // easing values: swing | linear
  var easing='swing';

  // get / set parameters
  var newHash=this.hash;
  var target=$(this.hash+', a[name='+this.hash.slice(1)+']').offset().top;
  var oldLocation=window.location.href.replace(window.location.hash, '');
  var newLocation=this;

  // make sure it's the same location      
  if(oldLocation+newHash==newLocation)
  {
     // set selector
     if($.browser.safari) var animationSelector='body:not(:animated)';
     else var animationSelector='html:not(:animated)';

     // animate to target and set the hash to the window.location after the animation
     $(animationSelector).animate({ scrollTop: target }, duration, easing, function() {

        // add new hash to the browser location
        window.location.href=newLocation;
     });

     // cancel default click action
     return false;
  }
});

});
</script>

</head>
<body>  
	
	<div id="body-wrap">
	<div id="top-hat">&nbsp;</div>	<!-- top hat -->
	<div id="name"> <img src="images/name-veritcal.png">	</div>	<!--  !name -->
	<div id="center-wrap"> 
		
		
		<div id="header"> 	 	
	 		  	
 <div id="navish"> 
		 	
	<ul>
		<li style="color:#000;">home </li>  
		<li> <a href="media/">media</a> 	</li>  
		<li> <a href="about/">about</a> 	</li>  
		<li> <a href="resume/">resume´</a>	</li> 		</ul>
	
	
	</div>	<!--  !navish -->
			
			
			</div>	<!--  !header -->
			
 
			
<a href="#review-area"><div id="review-button"> </div></a>	
<div id="blue-bloods"><a href="http://lauraecampbell.com/media/#!lec[bluebloods]/0/"><img src="images/blue-bloods-attention-portly.png"></a>	</div>
<div id="head-shot"><img src="images/headshot-blue-bloods.png">	</div>
		
		
		
			<br>	
		<div id="review-quotes"   >
				
		<div id="mygallery" class="stepcarousel">
		<div id="review-area" class="belt">
				<?php

			// Make a MySQL Connection
			include 'admin/local.php';

			// Get all the data from the "example" table
			$result = mysql_query("SELECT * FROM reviews ORDER BY id ASC") 
			or die(mysql_error());  

			// keeps getting the next row until there are no more to get
			while($row = mysql_fetch_array( $result )) {
				// Print out the contents of each row into a table



				echo '<div class="panel"> <div id="quote-logo" class="left">';
				echo ' <a href="'.$row['reviewlink'].'" target="blank">';
				echo $row['logourl'];
		
				
				
				echo ' <img src="images/next-page.gif">';
				echo '</a>';
			 	echo '</div>';
		
				echo '<div id="quote-copy" class="right">';
				echo  '<blockquote>'.$row['quotecopy'].'</blockquote>';
				echo '</div>';
			
				echo '</div>';
		

			} 


			?>
			</a>
			
			<img src="images/last-border.png">
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
	
		</div>
		</div>
		

  			<div id="contact"> 

		 <div id="contact-copy">CONTACT MY AGENT <span class="black">ROBERT ATTERMAN</span> @  </div>	<!--  !contact-copy -->
		<div id="abrams"><img src="images/abrams.png"> </div>	<!--  !abrams -->
	
	 

			<div id="phone-email"><a href="mailto:robert.attermen@abramsartny.com">E: robert.attermen@abramsartny.com</a>  <br> <a href="#">P: 646.486.4600</a>	</div>	<!--  !phone-email -->



			</div>	<!--  !contact -->

				</div>	<!--  !review-quotes -->	

  
	
	</div>	<!--  !center-wrap -->
		<div id="top-hat">&nbsp;</div>	<!-- top hat -->
		<div id="shoe">
		 
			<div id="bottom">
			<ul >
				<li style="color:#000;">home </li>  
				<li> <a href="media/">media</a> 	</li>  
				<li> <a href="about/">about</a> 	</li>  
				<li> <a href="resume/">resume´</a>	</li> 		</ul>
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
