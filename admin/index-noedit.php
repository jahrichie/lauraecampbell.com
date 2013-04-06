<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
		 
			<link rel="stylesheet" type="text/css" href="admin.css" />
			
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>admin | home </title>
	<meta name="generator" content="TextMate http://macromates.com/">
	<meta name="author" content="superman">
	<!-- Date: 2011-06-16 -->


	<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
	  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
	  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
	   


	<script>
		$(function() {
			$( "#slider" ).slider({
				range: "min",
				value: 100,
				min: 1,
				max: 100,
				slide: function( event, ui ) {
					$( "#amount" ).val( "" + ui.value );
				}
			});
			$( "#amount" ).val( "" + $( "#slider-range-min" ).slider( "value" ) );
		});
		</script>


</head>
<body>
	
	
		<div id="admin-wrap">
	
	<div id="admin-nav">
	<ul>	
<li style="color:orange;"> quotes  </li>|
<li><a href="#">media</a> </li>|
<li><a href="#">about</a></li>|
<li><a href="#">resume</a></li> 
 </ul>
</div><!-- admin-nav -->


<div id="sub-admin-nav">
	<ul>			
<li style="color:orange;">  make  </li> 
<li><a href="#">edit</a> </li> 
<li><a href="#">maintain</a></li> 
 </ul>
</div>	<!-- !sub-admin-nav -->
 


	<div id="make"> 
<form action="make/" method="POST">
	<br><br>

	<h1>	Link to review (leave hash if blank): </h1><br><input type="text" value="#" name="reviewlink" /> 

	 <br><br>
	
<h1>Quote Copy (use bold tags...what others?):</h1><br>
<textarea rows="3" cols="85"  name="quotecopy"></textarea>


<br><br>
 
<h1>	Logo Url: </h1><br><input type="text"  name="logourl" /> 
 
 <br><br>
 
<h1>	Logo Size( 1-100 ): </h1><br>	<input type="text" name="logopercent" id="amount" style="border:0; color:#f6931f; font-weight:bold;" /> 
	<div id="slider"></div>




  	<br><br><input type="submit" value="make!"  /><br>
</form>
</div>	<!-- !make -->




</div>	<!-- !admin-wrap -->

</body>
</html>
