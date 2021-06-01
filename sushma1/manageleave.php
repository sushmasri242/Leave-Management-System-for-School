<html>
<head>
	<title>apply leave</title>
	<link href="styles.css" rel="stylesheet" type="text/css" />
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
    background-color: #111;
}
	</style>
</head>
<body>
<ul>
  <li><a href="new.html">Home</a></li>
  <li><a href="chanpass.php">Change Password</a></li>
  <li><a href="applyleave.php">Apply Leave</a></li>
  <li><a href="leavebal.php">Leave Balance</a></li>
  <li><a href="leavestatus.php">Leave status</a></li>
  <li><a href="leavehistory.php">Leave History</a></li>
  <li><a href="help.php">Help</a></li>
  <li style="float:right"><a href="new.php">Logout</a></li>
 

</ul>

	<center>
	<br><h1>Manage Leaves</h1></br>
	</br>
<?php
session_start();
 $con = mysqli_connect('localhost','root','') or die(mysqli_error());
 mysqli_select_db($con,'anu') or die(mysqli_error());
 
 
 $query="select * from leavetable";
 $result=mysqli_query($con,$query) or die("query failed".mysqli_error());
 echo "<table border='1'>";
 echo "<tr>";
 echo "<th>Name</th><th>Department</th><th>Typeofleave></th><th>Noofdays</th><th>FromDate</th><th>ToDate</th><th>Status</th><th>Leaveid</th>";
 echo "<tr>";
 while($res=mysqli_fetch_array($result,MYSQLI_ASSOC))
 {
	$st=$res['Status'];
	if($st=='pending')
	{        
		$q=mysqli_query($con,"select * from info1");             
		while($re=mysqli_fetch_array($q,MYSQLI_ASSOC))
                {
			if($re['Name']==$res['Name'])
				$dep=$re['Department'];
		}
		$n=$res['Name'];
		echo "<tr>";
	echo "<td><a href=\"approval.php\">".$n."</a></td><td>".$dep."</td><td>".$res['Typeofleave']."</td><td>".$res['Noofdays']."</td><td>".$res['Fromdate']."</td><td>".$res['Todate']."</td><td>".$st."</td><td>".$res['Leaveid']."</td>";
	echo "</tr>";
	}
	
 }
 echo "<table>";
?>
</body>
</html>

