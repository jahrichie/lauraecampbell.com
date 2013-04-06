<?php

 

// Make a MySQL Connection
include '../../local.php';
$aboutcopy = $_POST['aboutcopy'];
$sql = "UPDATE `about` SET `aboutcopy` = '$aboutcopy'   where ID = 1 ";
mysql_query($sql) or die ("Error: ".mysql_error());
echo'<div id="updated">';
echo "Database updated. <a href='../'>back <---</a>";
echo'</div>';



?>