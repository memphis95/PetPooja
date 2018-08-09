<?php

$hostname = "localhost";
$username = "root";
$password = "";

$con=mysql_connect($hostname,$username,$password);

if (!$con){ die('Could not connect: '. mysql_error());}
//connection to the database

$dbName="petpooja";
$db = @mysql_select_db($dbName,$con) or die(mysql_error());

//$name=$_POST['email'];
$sql="select cus_name, email, address, cus_phone from customer";
$result = mysql_query($sql);

while($row = mysql_fetch_array($result))
{ 
	echo "Name: ". $row['cus_name']; 
	echo "<br />";
	echo "Email: ". $row['email'];
	echo "<br />";
	echo "Address: ". $row['address'];
	echo "<br />";
	echo "Phone: ". $row['cus_phone'];
	echo "<br />";
}

mysql_close($con);

exit;
?>
