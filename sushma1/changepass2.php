<html>
<head>
	<title>Change Password</title>
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
    background-color: #FF00FF;
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
	<br><img src="c1.jpg" height="75" width="200" class="im">
<font color="#8A2BE2" size="5vm"/><h1>
<h1>Change Password</h1>
	<div class="login-page">
	<div class="form">
	<form action="#" method="post">
		<h3><font color="white">
		<table style="color:coral">
<tr>
<td><font color="#2E8B57 " size="5vm"/><b>Old Password</b></td>
<td><input type="password" name="opass" placeholder="old password" required></td>
</tr>
<tr>
<td><font color="#2E8B57 " size="5vm"/><b>New Password</b>  </td>
<td><input type="password" name="npass" placeholder="new password" required></td>
</tr>
<tr>
<td><font color="#2E8B57 " size="5vm"/><b>Re-enter Password</b>  </td>
<td><input type="password" name="repass" placeholder="Re-enter password" required></td>
</tr>
</table>
</font></h3>
<input type="submit" class="button" name="ChangePassword">
	</form>
	</center>
<?php

$con = mysqli_connect('localhost','root','') or die(mysqli_error());
 mysqli_select_db($con,'anu') or die(mysqli_error());
if(isset($_POST['ChangePassword']))
{
 $opass=$_POST['opass'];
 $npass=$_POST['npass'];
 $repass=$_POST['repass'];
 if($_SESSION['name']!=''&&$opass!='')
 {
   $query=mysqli_query($con,"select * from aplogin where username='".$_SESSION['name']."'") or die(mysqli_error());
   if($_SESSION['password']!=$opass)
   {
	header('location:ca1.php'); 
	 }
  else
 { 
   if($npass!=$repass)
   {
	header('location:ca2.php');
   }


   else
   {
    $query=mysqli_query($con,"update aplogin set password='".$npass."' where username='".$_SESSION['name']."'");
    $_SESSION['password']=$npass;
header('location:ca3.php');
    
}
 }
 }
 
  
 
}


?>
</body>
</html>
	
	
		
	