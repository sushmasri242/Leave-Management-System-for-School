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
	<center>

<?php

$con = mysqli_connect('localhost','root','') or die(mysqli_error());
 mysqli_select_db($con,'anu') or die(mysqli_error());
 echo '<font color="#800000" size="5vm">';
echo "<h1><i>";
 
 echo "'".$_SESSION['name']."'";
echo "<br>";
echo "Your details about leave status is</i>";
 $query="select * from leavetable1 where name='".$_SESSION['name']."'";
 $result=mysqli_query($con,$query) or die("query failed".mysqli_error());
 echo "<table border='1' cellpadding='10'>";
 echo "<tr>";
 echo "<th>Name</th><th>Typeofleave</th><th>Noofdays</th><th>FromDate</th><th>ToDate</th><th>Status</th><th>Cancellation</th><th>Reason</th>";
 echo "<tr>";
  while($res=mysqli_fetch_array($result,MYSQLI_ASSOC))
 {
	$st=$res['Status'];
	$li=$res['Leaveid'];

	if($st=='pending')
	{
 	echo "<tr>";
	echo "<td>".$res['Name']."</td><td>".$res['Typeofleave']."</td><td>".$res['Noofdays']."</td><td>".$res['Fromdate']."</td><td>".$res['Todate']."</td><td>".$st."</td><td>";
	echo "<a href='cancel1.php?del1=$li'>".$res['Cancellation']."</a>";

	echo "</td><td></td></tr>";

	echo "</tr>";
	}
	if($st=='rejected')
	{
		$rson = mysqli_query($con,"select * from reason1 where id='".$li."'");
		while($rs=mysqli_fetch_array($rson,MYSQLI_ASSOC))
		{
			$r=$rs['reason'];

		echo "<tr>";
	echo "<td>".$res['Name']."</td><td>".$res['Typeofleave']."</td><td>".$res['Noofdays']."</td><td>".$res['Fromdate']."</td><td>".$res['Todate']."</td><td>".$st."</td><td>".$res['Cancellation']."</td><td>".$r."</td>";
	echo "</tr>";	
		}
	}
	if($st=='approved')
	{
	echo "<tr>";
	echo "<td>".$res['Name']."</td><td>".$res['Typeofleave']."</td><td>".$res['Noofdays']."</td><td>".$res['Fromdate']."</td><td>".$res['Todate']."</td><td>".$st."</td><td>".$res['Cancellation']."</td><td></td>";
	echo "</tr>";
	
	
	}
 }
 echo "<table>";
?>
</body>
</html>

