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

<img src="l9.jpg" height="150" width="150" class="im"><br>

<?php 
session_start();
$con = mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($con,'anu') or die(mysqli_error());
 
		echo 'LEAVE IS REJECTED AND AN EMAIL IS SENT TO YOU';
	
	echo "</center>";
 
?>
<center><a href='manage.php'>Go Back</a></center>
</body>
</html>