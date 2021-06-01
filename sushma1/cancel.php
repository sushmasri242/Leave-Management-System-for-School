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
<?php
session_start();
$con = mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($con,'anu') or die(mysqli_error());
 if(isset($_GET['del1']))
 { 
	$id=$_GET['del1'];
	mysqli_query($con,"update leavetable set Status='cancelled' where Leaveid='".$id."'");
	echo 'YOUR LEAVE  IS CANCELLED';

	echo "</center>";
	
}
?>
</body>
</html>