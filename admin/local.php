<?php
//replace usernaem,password, and yourdb with the information for your database
mysql_connect("localhost","lauraeca_user","cancerboy@69") or die("Error: ".mysqlerror());
mysql_select_db("lauraeca_site");
//replace TestTable with the name of your table
//also in a real app you would get the id dynamically


?>