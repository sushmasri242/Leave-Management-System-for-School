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
<form action="#" method="post">
<td><font color="#8A2BE2" size="5vm"/><b>Enter Reason:</b></td>
<td><input type="text" name="reason" placeholder="Enter Reason"required/></td><br/>
<input type="submit"  class="button" name="submit"><br><br>
</form>
<?php
session_start();
if(isset($_POST['submit']))
{
 $con = mysqli_connect('localhost','root','') or die(mysqli_error());
 mysqli_select_db($con ,'anu') or die(mysqli_error());
 $reason=$_POST['reason'];
	$id=$_GET['rej'];
	$query=mysqli_query($con,"SELECT * from leavetable1 where LeaveId='".$id."'");
	while($res=mysqli_fetch_array($query,MYSQLI_ASSOC))
 {

	$name=$res['Name']; 
        mysqli_query($con,"INSERT into reason1  values('".$id."','".$reason."')");
	mysqli_query($con,"update leavetable1 set Status='rejected' where LeaveId='".$id."'");
        header('location:reject1.php');
}
}
?>
</body>
</html>