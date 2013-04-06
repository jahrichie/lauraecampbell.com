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
<li><a href="about/">about </a></li>|
<li><a href="resume/">resume</a></li> 
 </ul>
</div><!-- admin-nav -->



 


	<div id="make"> 
		<h1>Make</h1>
<form action="make/" method="POST">
	<br><br>

	<h2>	Link to review (leave hash if blank): </h2><br><input type="text" value="#" name="reviewlink" /> 

	 <br><br>
	
<h2>Quote Copy (use bold tags...what others?):</h2><br>
<textarea rows="3" cols="85"  name="quotecopy"></textarea>


<br><br>
 
<h2>	Source Title: </h2><br><input type="text"  name="logourl" /> 
 
 <br><br>
 
<h2>	Logo Size( 1-100 ): </h2><br>	<input type="text" name="logopercent" id="amount" style="border:0; color:#f6931f; font-weight:bold;" /> 
	<div id="slider"></div>




  	<br><br><input type="submit" value="make!"  /><br><br><br> <br><br> 
</form>
</div>	<!-- !make -->
<br><br><br>
<h1>Maintain</h1><br><br> 

<?php  
 

// MySQL host name, user name, password, database, and table
$opts['hn'] = 'localhost';
$opts['un'] = 'lauraeca_user';
$opts['pw'] = 'cancerboy@69';
$opts['db'] = 'lauraeca_site';
$opts['tb'] = 'reviews';

// Name of field which is the unique key
$opts['key'] = 'id';

// Type of key field (int/real/string/date etc.)
$opts['key_type'] = 'int';

// Sorting field(s)
$opts['sort_field'] = array('id');

// Number of records to display on the screen
// Value of -1 lists all records in a table
$opts['inc'] = 15;

// Options you wish to give the users
// A - add,  C - change, P - copy, V - view, D - delete,
// F - filter, I - initial sort suppressed
$opts['options'] = 'CPDF';

// Number of lines to display on multiple selection filters
$opts['multiple'] = '4';

// Navigation style: B - buttons (default), T - text links, G - graphic links
// Buttons position: U - up, D - down (default)
$opts['navigation'] = 'DB';

// Display special page elements
$opts['display'] = array(
	'form'  => true,
	'query' => true,
	'sort'  => true,
	'time'  => true,
	'tabs'  => true
);

// Set default prefixes for variables
$opts['js']['prefix']               = 'PME_js_';
$opts['dhtml']['prefix']            = 'PME_dhtml_';
$opts['cgi']['prefix']['operation'] = 'PME_op_';
$opts['cgi']['prefix']['sys']       = 'PME_sys_';
$opts['cgi']['prefix']['data']      = 'PME_data_';

/* Get the user's default language and use it if possible or you can
   specify particular one you want to use. Refer to official documentation
   for list of available languages. */
$opts['language'] = $_SERVER['HTTP_ACCEPT_LANGUAGE'] . '-UTF8';

/* Table-level filter capability. If set, it is included in the WHERE clause
   of any generated SELECT statement in SQL query. This gives you ability to
   work only with subset of data from table.

$opts['filters'] = "column1 like '%11%' AND column2<17";
$opts['filters'] = "section_id = 9";
$opts['filters'] = "PMEtable0.sessions_count > 200";
*/

/* Field definitions
   
Fields will be displayed left to right on the screen in the order in which they
appear in generated list. Here are some most used field options documented.

['name'] is the title used for column headings, etc.;
['maxlen'] maximum length to display add/edit/search input boxes
['trimlen'] maximum length of string content to display in row listing
['width'] is an optional display width specification for the column
          e.g.  ['width'] = '100px';
['mask'] a string that is used by sprintf() to format field output
['sort'] true or false; means the users may sort the display on this column
['strip_tags'] true or false; whether to strip tags from content
['nowrap'] true or false; whether this field should get a NOWRAP
['select'] T - text, N - numeric, D - drop-down, M - multiple selection
['options'] optional parameter to control whether a field is displayed
  L - list, F - filter, A - add, C - change, P - copy, D - delete, V - view
            Another flags are:
            R - indicates that a field is read only
            W - indicates that a field is a password field
            H - indicates that a field is to be hidden and marked as hidden
['URL'] is used to make a field 'clickable' in the display
        e.g.: 'mailto:$value', 'http://$value' or '$page?stuff';
['URLtarget']  HTML target link specification (for example: _blank)
['textarea']['rows'] and/or ['textarea']['cols']
  specifies a textarea is to be used to give multi-line input
  e.g. ['textarea']['rows'] = 5; ['textarea']['cols'] = 10
['values'] restricts user input to the specified constants,
           e.g. ['values'] = array('A','B','C') or ['values'] = range(1,99)
['values']['table'] and ['values']['column'] restricts user input
  to the values found in the specified column of another table
['values']['description'] = 'desc_column'
  The optional ['values']['description'] field allows the value(s) displayed
  to the user to be different to those in the ['values']['column'] field.
  This is useful for giving more meaning to column values. Multiple
  descriptions fields are also possible. Check documentation for this.
*/

$opts['fdd']['reviewlink'] = array(
  'name'     => 'Reviewlink',
  'select'   => 'T',
  'maxlen'   => 65535,
  'textarea' => array(
    'rows' => 5,
    'cols' => 50),
  'sort'     => true
);
$opts['fdd']['quotecopy'] = array(
  'name'     => 'Quotecopy',
  'select'   => 'T',
  'maxlen'   => 65535,
  'textarea' => array(
    'rows' => 5,
    'cols' => 50),
  'sort'     => true
);
$opts['fdd']['logourl'] = array(
  'name'     => 'Logourl',
  'select'   => 'T',
  'maxlen'   => 65535,
  'textarea' => array(
    'rows' => 5,
    'cols' => 50),
  'sort'     => true
);
$opts['fdd']['logopercent'] = array(
  'name'     => 'Logopercent',
  'select'   => 'T',
  'maxlen'   => 11,
  'sort'     => true
);
$opts['fdd']['id'] = array(
  'name'     => 'ID',
  'select'   => 'T',
  'options'  => 'AVCPDR', // auto increment
  'maxlen'   => 11,
  'default'  => '0',
  'sort'     => true
);

// Now important call to phpMyEdit
require_once 'phpMyEdit.class.php';
new phpMyEdit($opts);

?>



</div>	<!-- !admin-wrap -->

</body>
</html>
