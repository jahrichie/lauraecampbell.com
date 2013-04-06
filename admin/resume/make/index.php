<?php

 

// Make a MySQL Connection
include '../../local.php';
 
$table = $_POST['table'];
$tvtitle =   $_POST['tvtitle'];
$tvrole = $_POST['tvrole'];
$tvnetwork = $_POST['tvnetwork'];

// Insert a row of information into the table "example"
mysql_query("INSERT INTO `$table`  (tvtitle, tvrole,tvnetwork) VALUES( '$tvtitle', '$tvrole', '$tvnetwork' ) ") 
or die(mysql_error());  

echo ' Cheers, your resume - '.$table.'  was updated  . <a href="../">BACK </a> '  ;


?>