<html>
<head>
	<title>Change Password</title>
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
  <li style="float:right"><a href="#new.php">Logout</a></li>
 

</ul>

	<center>
	<br><h1>Change Password</h1></br>
	</br>
	<div class="login-page">
	<div class="form">
	<form action="#" method="post">
		<h3><font color="white">
		<table style="color:coral">
<tr>
<td><b>Old Password</b></td>
<td><input type="password" name="opass" placeholder="old password" required></td>
</tr>
<tr>
<td><b>New Password</b>  </td>
<td><input type="password" name="npass" placeholder="new password" required></td>
</tr>
<tr>
<td><b>Re-enter Password</b>  </td>
<td><input type="password" name="repass" placeholder="Re-enter password" required></td>
</tr>
</table>
</font></h3>
<input type="submit" name="ChangePassword">
	</form>
	</center>
<?php
session_start();
$con = mysqli_connect('localhost','root','') or die(mysqli_error());
 mysqli_select_db($con,'anu') or die(mysqli_error());
if(isset($_POST['ChangePassword']))
{
 $opass=$_POST['opass'];
 $npass=$_POST['npass'];
 $repass=$_POST['repass'];
 if($_SESSION['name']!=''&&$opass!='')
 {
   $query=mysqli_query($con,"select * from login where username='".$_SESSION['name']."' and password='".$opass."'") or die("old password not correct");
   
   if($npass!=$repass)
   {
	echo 'new passwords do not match<br><a href="chanpass.php">OK</a>';
   }


   else
   {
    $query="update login set password='".$repass."' where username='".$_SESSION['name']."'";
    $_SESSION['password']=$npass;
    echo "your password is changed successfully,an email is sent to you<a href=\"new.html\">OK</a>";
  }
 }
 
  
 
}

?>
</body>
</html>
	
	
		
	