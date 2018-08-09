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

$name=$_POST['name'];
$id=$_POST['userid'];
$pass=$_POST['password'];

$sql= "insert into profile(name,userid,password) values('$name','$id','$pass')";

if (!mysql_query($sql,$con)) die('Error: ' . mysql_error());
//if (!mysql_query($sql,$con)) die('Error: ' . mysql_error());

echo "<br/>1 record added";

mysql_close($con);
header('Location: index.html');
exit;
?>