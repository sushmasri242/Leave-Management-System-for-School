<html>
<head>
	<title>login</title>
	<link href="sty.css" rel="stylesheet" type="text/css" />
	<style>
	body{background-image:url(im6.jpg);background-repeat:no-repeat;

		}
	</style>

</head>
<body>

&nbsp;
&nbsp;
&nbsp;

<center>	<div class="heading line_bottom" style="font-size:5vw;color:#8A2BE2"><i>Student Login</i></div></center>
&nbsp;
<center><img src="lo5.png" height="125" width="125" /></center>

	<form action="#" method="post">
<div align="center" >
<font color="#DC143C" size="5vm"/>
Username:<input type="text" size="20" name="userid" placeholder="username"><br><br>
<font color="#DC143C" size="5vm"/>
Password:<input type="password" size="20" name="password"  placeholder="password"><br><br>
<input type="submit"  class="button" name="submit"><br><br>
<font color=#2aa3e8> 
</form>
<?php
session_start();
if(isset($_POST['submit']))
{
 $con = mysqli_connect('localhost','root','') or die(mysqli_error());
 mysqli_select_db($con ,'anu') or die(mysqli_error());
 $userid=$_POST['userid'];
 $password=$_POST['password'];
 if($userid!=''&&$password!='')
 {
   $query=mysqli_query($con,"select * from login where username='".$userid."' and password='".$password."'") or die(mysqli_error());
   $res=mysqli_fetch_row($query);
   if($res)
   {
    $_SESSION['userid']=$userid;
	$_SESSION['name']=$userid;
	$_SESSION['password']=$password;
    header('location:lp.php');
   }
   else
   {
	header('location:inc.php');
  
      }
 }
 else
 {
  header('location:inc1.php');
  }
}
?>
</body>
</html>
