<html>
<head>
<title>login</title>
	<link href="styles.css" rel="stylesheet" type="text/css" />
	<style>
	body{background-image:url(im6.jpg);background-repeat:no-repeat;

		}
	</style>

</head>
<body>
<center>
<font color="#800000" size="6vm">

<img src="l8.jpg" height="150" width="150" class="im"><br>

<?php 
session_start();
$con = mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($con,'anu') or die(mysqli_error());
 if(isset($_GET['app']))
 { 
	$id=$_GET['app'];
	
	$query=mysqli_query($con,"update leavetable1 set Status='approved' where LeaveId='".$id."'");
 	if($query)
	{
		echo 'LEAVE IS APPROVED AND AN EMAIL IS SENT TO YOU';
		echo "</center>";
	}
	else
	{
		echo "<center>";
		echo 'failure';
		echo "</center>";
	}
 }
?>
<center><a href="manage1.php">Go Back</a></center>
</body>
</html>