<!DOCTYPE HTML>
<html>
<head>
<script type="text/javascript">
function add1()
{       
    var n=document.getElementById("b1");
	var s=n.innerHTML;
	document.getElementById("b1").innerHTML=++s;
}
function sub1()
{       
    var n=document.getElementById("b1");
	var s=n.innerHTML;
	if(s>0)
	--s;
	document.getElementById("b1").innerHTML=s;
}
function add2()
{   
    var n=document.getElementById("b2");
	var s=n.innerHTML;
	document.getElementById("b2").innerHTML=++s;
}
function sub2()
{       
    var n=document.getElementById("b2");
	var s=n.innerHTML;
	if(s>0)
	--s;
	document.getElementById("b2").innerHTML=s;
}
function add3()
{   
    var n=document.getElementById("b3");
	var s=n.innerHTML;
	document.getElementById("b3").innerHTML=++s;
}
function sub3()
{       
    var n=document.getElementById("b3");
	var s=n.innerHTML;
	if(s>0)
	--s;
	document.getElementById("b3").innerHTML=s;
}
function add4()
{   
    var n=document.getElementById("b4");
	var s=n.innerHTML;
	document.getElementById("b4").innerHTML=++s;
}
function sub4()
{       
    var n=document.getElementById("b4");
	var s=n.innerHTML;
	if(s>0)
	--s;
	document.getElementById("b4").innerHTML=s;
}
function add5()
{   
    var n=document.getElementById("b5");
	var s=n.innerHTML;
	document.getElementById("b5").innerHTML=++s;
}
function sub5()
{       
    var n=document.getElementById("b5");
	var s=n.innerHTML;
	if(s>0)
	--s;
	document.getElementById("b5").innerHTML=s;
}
function add6()
{   
    var n=document.getElementById("b6");
	var s=n.innerHTML;
	document.getElementById("b6").innerHTML=++s;
}
function sub6()
{       
    var n=document.getElementById("b6");
	var s=n.innerHTML;
	if(s>0)
	--s;
	document.getElementById("b6").innerHTML=s;
}
function add7()
{   
    var n=document.getElementById("b7");
	var s=n.innerHTML;
	document.getElementById("b7").innerHTML=++s;
}
function sub7()
{       
    var n=document.getElementById("b7");
	var s=n.innerHTML;
	if(s>0)
	--s;
	document.getElementById("b7").innerHTML=s;
}
function add8()
{   
    var n=document.getElementById("b8");
	var s=n.innerHTML;
	document.getElementById("b8").innerHTML=++s;
}
function sub8()
{       
    var n=document.getElementById("b8");
	var s=n.innerHTML;
	if(s>0)
	--s;
	document.getElementById("b8").innerHTML=s;
}
function add9()
{   
    var n=document.getElementById("b9");
	var s=n.innerHTML;
	document.getElementById("b9").innerHTML=++s;
}
function sub9()
{       
    var n=document.getElementById("b9");
	var s=n.innerHTML;
	if(s>0)
	--s;
	document.getElementById("b9").innerHTML=s;
}	
	
</script>
<title>PetPooja-Menu </title>
<link rel="shortcut icon" type="image/jpg" href="chef.jpg" />
<link rel="stylesheet" type="text/css" href="style1.css" media="all"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <script src="jquery-1.11.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
 </head>

<body>
		<div id="headwrap">
		<div id="header">
			<div id="img">
				<img src="logo.png" id="logo" alt="" onclick="document.location.href = 'profile.html'"/>
                <div class="btn-group">
                <button type="button" class="btn btn-danger" onclick="document.location.href = 'profile.html'">My Profile</button>
                <button type="button" class="btn btn-danger" onclick="document.location.href = 'r1.html'">Know us </button>
                <button type="button" class="btn btn-danger" onclick="document.location.href = 'rview1.html'">Restaurants</button>
                <button type="button" class="btn btn-danger" onclick="document.location.href = 'contactus1.html'">Contact us</button>
                <button type="button" class="btn btn-danger" onclick="document.location.href = 'my.html'">Logout</button>
               
            </div>
		</div>
                
  </div>
</div>

	<div id="contentwrap">
		<div id="content">
			<div id="rleft" >	
				<img src="s5.gif" id="s" alt="" width="100%" height="400px" />
				<div id="rhead">
					<h1 style="color:#FF6666; font-family:Impact">Dakshinayan <small>Connaught Place </small><ul class="pager"><li class="next"><a href="#">4.2</a></li></ul></h1>
				</div>
				<h3></h3>
				<ul style="list-style-type:none">
					<li><font size="4" color="#FF6666">Contact no: </font><font size="4"> 011 87654321</font></li>
					<li><font size="4" color="#FF6666">Location: </font><font size="4"> A-26, Inner Circle, Connaught Place, New Delhi.</font></li>
				</ul>
				<h3></h3>
				<ul style="list-style-type:none">
					<li><font size="4" color="#FF6666">Open hours: </font><font size="4"> 10 am to 10 pm</font></li>
					<li><font size="4" color="#FF6666">Minimum Order: </font><font size="4"> Rs 500</font></li>
					<h3></h3>
					<li><font size="5" color="#FF6666">Mode of Payment: </font>
					<form role="form">
						<input type="radio" name="pay" value="cod"><font size="4"> Cash on Delivery</font><br>
						<input type="radio" name="pay" value="c/d"><font size="4"> Credit/Debit Card</font><br>
					</form>
				</ul>	
				<ul class="pager">
					<li><a href=""><font size="5" face='"impact", cursive, sans-serif'>Checkout!</font></a></li>
				</ul>
			</div>
			
			<div id="rright">
				<h1 style="color:white; font-family:Impact; text-align:center;">Menu</h1>
				<table class="table table-hover" style="background-color:#FFFFCC" width="80%">
					<thead>
					<tr style="background-color:#FF9999; color:white; font-size:15">
						<th>ITEM</th>
						<th>PRICE (INR)</th>
						<th></th>
					</tr>
					</thead>
					<tbody>
<?php
    $severname = "localhost:8080";
	$hostname = "localhost:8080";
	$username = "root";
	$password = "";
	echo "hello";

	$con= mysql_connect($hostname,$username,$password);

	//if (!$con){ die('Could not connect: '. mysql_error());}
	//connection to the database

	$dbName="petpooja";
	$db = @mysql_select_db($dbName,$con) or die(mysql_error());

	$sql="select item_name, item_price from menu_item where res_id='301'";
	$result = mysql_query($sql, $con);
	$i=1;
	while($row = mysql_fetch_array($result)){
					$id="b".(string)$i;
					echo '<tr> <td>'.$row["item_name"].'<span class="badge" id='.$id.'>0</span></td><td align="center">'.$row["item_price"].'</td><td><div class="btn-group"><button type="button" class="btn btn-danger btn-xs" onclick="sub1()">-</button><button type="button" class="btn btn-success btn-xs" onclick="add1()">+</button></div></td></tr>';
					$i++;
	}
	
	$dom = new DomDocument;
	$sql2="update menu_item set quantity=$a where item_id=$row['item_id']";
	$x=1;
	$result2 = mysql_query($sql, $con);
	while($row2 = mysql_fetch_array($result2))
	{
		$id2="b".(string)$x;
		$a = $dom->getElementById($id2);
		if($a>0)
		{
			$mysql_query($sql2, $con);
		}
	}
	$sql3="select sum(quantity*item_price) from menu_item where res_id='301' and quantity is NOT NULL";
	$result3=$mysql_query($sql3, $con);	
?>						
				</tbody>
				</table>
<?PHP echo '<font size="4" color="white">Total Bill Amount = '.$result3.'</font>';	?>	
				
			</div>
		</div>
	</div>
	<div id="footerwrap">
		<div id="footer">
        <br><br>
<font size="3" color="white"><center>   &copy Copyright 2015 PetPooja.All Rights Reserved.<a href="https://www.facebook.com/PetPoojaPage"> <span class="social social-facebook"><img src="icon.png" width="40px" height="40px" align="center-right"/></span></a>
<a href="https://twitter.com/petpooja_rest"> <span class="social social-twitter"><img src="icon_t.png" width="40px"  height="40px" align="center-right"/></span></a>
<a href="https://plus.google.com/106127621676106204749/about"> <span class="social social-googleplus"><img src="gp1.png" width="40px"  height="40px" align="center-right"/></span></a></center></font>
       		</div>
	</div>	
</body>
</html>
			