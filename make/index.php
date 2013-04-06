<?php

 

// Make a MySQL Connection
include '../local.php';
 
$reviewlink = $_POST['reviewlink'];
$quotecopy =   $_POST['quotecopy'];
$logourl = $_POST['logourl'];
$logopercent = $_POST['logopercent'];

// Insert a row of information into the table "example"
mysql_query("INSERT INTO reviews 
(reviewlink, quotecopy, logourl, logopercent) VALUES( '$reviewlink', '$quotecopy', '$logourl', $logopercent ) ") 
or die(mysql_error());  

echo ' Cheers, your quote was  added to your carousel. <a href="../">BACK </a> '  ;


?>