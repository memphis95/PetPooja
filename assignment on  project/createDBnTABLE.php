<?php
$hostname = "localhost";
$username = "test";
$password = "";
 
//connection to the mysql
$con = mysql_connect($hostname, $username, $password) ;
if (!$con){ die('Could not connect: '. mysql_error());}
echo "<h1>Connected to MySQL<br></h1>";

//create database
$sql = "CREATE DATABASE abcom";
mysql_query($sql, $con);
echo "<h1>database created<br></h1>";

//selecting db
$dbName="abcom";
$db = @mysql_select_db($dbName,$con) or die(mysql_error());

// Create table
$sql = "CREATE TABLE profile(name varchar(20),userid varchar(15),password varchar(20));";

// Execute SQL statement  
mysql_query($sql, $con);
echo "<h1>table created<br></h1>";
mysql_close($con);
?>