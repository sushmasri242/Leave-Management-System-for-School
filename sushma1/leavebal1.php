<html>
<head>
	<title>apply leave</title>
	<link href="sty.css" rel="stylesheet" type="text/css" />
	<style>
	ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change the link color to #111 (black) on hover */
li a:hover {
    background-color: #2E8B57;
}
tbody td{
	font-size:25px;
}
tbody th{
	background-color:#1e90ff;
}
tbody tr:nth-child(odd) td{
	background-color:#b3d9ff;
}
tbody tr:nth-child(even) td{
	background-color:#ffb6c1;
}
tbody tr:hover td{
	background-color:#d6f5d6;
}




	</style>

</head>
<body  style="background-image:url(im6.jpg)";>
<i>

<b>
<ul>
  <li><a href="new1.html">Home</a></li>
  <li><a href="changepass2.php">Change Password</a></li>
  <li><a href="applyleave1.php">Apply Leave</a></li>
  <li><a href="manage.php">Manage Leave</a></li>
  <li><a href="leavebal1.php">Leave Balance</a></li>
  <li><a href="leavestatus1.php">Leave status</a></li>
  <li><a href="leavehistory1.php">Student Leave History</a></li>
  <li><a href="help1.php">Help</a></li>
  <li style="float:right"><a href="new1.html">Logout</a></li>
   <li style="float:right"><a href="new.html"><?php session_start(); echo "welcome  ".$_SESSION['name']."";?></a></li>
 
</ul>
</b>
</i>
<?php

 $con = mysqli_connect('localhost','root','') or die(mysqli_error());
 mysqli_select_db($con,'anu') or die(mysqli_error());
 $userid=$_SESSION['name'];
 $query="select Typeofleave,Noofdays,Status from leavetable1 where Name='".$_SESSION['name']."'";
 $res=mysqli_query($con,$query) or die("query failed".mysqli_error());
$c='';
$m='';
$e='';
$mt='';
$qu=mysqli_query($con,"select Gender from info where Name='".$_SESSION['name']."'");
while($q=mysqli_fetch_array($qu,MYSQLI_ASSOC))
                {
			
				$gen=$q['Gender'];
		}
	
while($result=mysqli_fetch_array($res,MYSQLI_ASSOC))
 {
	if($result['Status']=='approved')
	{
	if($result['Typeofleave']=='casual')
		$c=(int)$c+$result['Noofdays'];
	if($result['Typeofleave']=='medical')
		$m=(int)$m+$result['Noofdays'];
	if($result['Typeofleave']=='earned')
		$e=(int)$e+$result['Noofdays'];
	if($gen=='Female'||$gen=='female')
	{
		if($result['Typeofleave']=='maternity')
			$mt=(int)$mt+$result['Noofdays'];
	}
	}
	
	
	
}
$re=mysqli_query($con,"select * from leavetab");
while($r=mysqli_fetch_array($re,MYSQLI_ASSOC))
{
	if($r['Typeofleave']=='casual')
		$cv=$r['Noofleaves']-(int)$c;
	if($r['Typeofleave']=='medical')
		$mv=$r['Noofleaves']-(int)$m;
	if($r['Typeofleave']=='earned')
		$ev=$r['Noofleaves']-(int)$e;
	if($gen=='Female'||$gen=='female')
	{
	
		if($r['Typeofleave']=='maternity')
			$mpv=$r['Noofleaves']-(int)$mt;
	}
}
echo "<center>";
echo '<font color="#800000" size="6vm">';
echo "<i>";
echo "$userid";

 echo ",YOUR LEAVE BALANCE IS</h2></center></i>";
echo "<br>";
 echo "<center><table border='1' cellpadding='10'>";
echo "<tbody>";
 echo "<tr>";
 echo "<th>TYPE</th><th>REMAIN</th>";
 echo "<tr>";
if($gen=='Female'||$gen=='female')
{	
	echo "<tr>";
	echo "<td>casual</td>";
	echo "<td>".$cv."</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>medical</td>";
	echo "<td>".$mv."</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>earned</td>";
	echo "<td>".$ev."</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>maternity</td>";
	echo "<td>".$mpv."</td>";
	echo "</tr>";
}
else
{
	echo "<tr>";
	echo "<td>casual</td>";
	echo "<td>".$cv."</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>medical</td>";
	echo "<td>".$mv."</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>earned</td>";
	echo "<td>".$ev."</td>";
	echo "</tr>";
	

}	
 echo "</center>";
 echo "<table>";
?>
</body>
</html>