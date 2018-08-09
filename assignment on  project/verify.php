<?php
include 'db.php';
$sql="SELECT * from profile";
$result= mysql_query($sql);

$name=$_POST['name'];
$id=$_POST['userid'];
$pass=$_POST['password'];
$c=0;
while($row = mysql_fetch_array($result))
{
	  if($row['name']==$name &&$row['userid']==$id && $row['password']==$pass)
	  {  //mysql_close($con);
         $c=1;
		 echo "Succesful login<br>";
		 break;
	    
	  }
}
if($c==0)
echo "<h3>invalid details have been entered</h3>";
else
	header('Location: profile.html');
mysql_close($con);

exit;
?>
   
