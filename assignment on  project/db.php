<?php
$hostname = "localhost";
$username = "root";
$password = "";
 
//connection to the mysql
$con = mysql_connect($hostname, $username, $password) ;
if (!$con){ die('Could not connect: '. mysql_error());}
//connection to the database
$dbName="abcom";
$db = @mysql_select_db($dbName,$con) or die(mysql_error());
?>