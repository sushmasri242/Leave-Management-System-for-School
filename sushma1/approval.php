<html>
<head>
<title>login</title>
	<link href="styles.css" rel="stylesheet" type="text/css" />
	<style>
	body{background-image:url(im6.jpg);background-repeat:no-repeat;

		}
tbody td{
	font-size:20px;
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
<body>
<?php 
session_start();
$con = mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($con,'anu') or die(mysqli_error());
 if(isset($_GET['del']))
 { 
	$id=$_GET['del'];
	$qu=mysqli_query($con,"select Gender from info1 where Name='".$id."'");
while($q=mysqli_fetch_array($qu,MYSQLI_ASSOC))
                {
			
				$gen=$q['Gender'];
		}
		$_SESSION['gen']=$gen;

	$query=mysqli_query($con,"select * from leavetable where Name='".$id."'") or die("failure");
	echo "<center>";
	echo "<table border='1' cellpadding='10'>";
 echo "<tr>";

 echo "<th>Name</th><th>Typeofleave</th><th>Noofdays</th><th>FromDate</th><th>ToDate</th><th>Status</th><th>Leaveid</th><th>Approve</th><th>Reject</th>";
 echo "<tr>";
 
 while($res=mysqli_fetch_array($query,MYSQLI_ASSOC))
 {
	$st=$res['Status'];
	if($st=='pending')
	{
	echo "<tr>";
	echo "<td>".$res['Name']."</td><td>".$res['Typeofleave']."</td><td>".$res['Noofdays']."</td><td>".$res['Fromdate']."</td><td>".$res['Todate']."</td><td>".$res['Status']."</td><td>".$res['Leaveid']."</td>";
	
	
	
	echo "<td>";
	echo "<a href='approve.php?app=$res[Leaveid]'>approve</a>";
	echo "</td><td>";
	
	echo "<a href='rej.php?rej=$res[Leaveid]'>reject</a>";
	echo "</td>";
	
	echo "</tr>";
	}
	
}
echo "</center>";
		
	
		
 	

 }
?>


</body>
</html>