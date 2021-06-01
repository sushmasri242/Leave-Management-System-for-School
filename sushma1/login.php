<html>
<head>
<title>Login</title>
	<link href="styles.css" rel="stylesheet" type="text/css" />
	<style>
		table, th, td {
    border: 1px solid black;
}
</style>

</head>

<body  style="background-image:url(1.jpg);">
&nbsp;
&nbsp;
&nbsp;
<center><br><h1>WELCOME TO EASY LEAVE</h1></br>
<div class="login-page">
	<div class="form">
	<form action="#" method="post">
		<h3><font color="white">
		<table bgcolor="#FFFF00"  style="color:coral"
>
<tr>
<td><b><h2>User Name</h2></b></td>
<td><input type="text" name="userid" placeholder="username" required/></td>
</tr>
<tr>
<td><b><h2>Password</h2></b>  </td>
<td><input type="password" name="password" placeholder="password" required/></td>
</tr>
</table>
</font></h3>
		<button>submit</button>
	</form></div></div>
</center>

<?php
session_start();
if(isset($_POST['submit']))
{
 mysql_connect('localhost','root','') or die(mysql_error());
 mysql_select_db('anu') or die(mysql_error());
 $userid=$_POST['userid'];
 $password=$_POST['password'];
 if($userid!=''&&$password!='')
 {
   $query=mysql_query("select * from login where username='".$userid."' and password='".$password."'") or die(mysql_error());
   $res=mysql_fetch_row($query);
   if($res)
   {
    $_SESSION['userid']=$userid;
	$_SESSION['name']=$userid;
	$_SESSION['password']=$password;
    header('location:lp.html');
   }
   else
   {
    echo'You entered username or password is incorrect';  }
 }
 else
 {
  echo'Enter both username and password';
 }
}
?>
</body>
</html>