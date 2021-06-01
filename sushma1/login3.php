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

<center>	<div class="heading line_bottom" style="font-size:3vw;color:#8A2BE2">TEACHER LOGIN</div></center>
&nbsp;
&nbsp;

<center><img src="lo7.png" height="150" width="150" </center></br>
	<form action="#" method="post">
<div align="center" >

<font color="#DC143C" size="5vm"/>
<i>Username:</i><input type="text" size="20" name="userid" placeholder="username"><br><br>

<font color="#DC143C" size="5vm"/>
<i>Password:</i><input type="password" size="20" name="password"  placeholder="password"><br><br>
<input type="submit"  name="submit" class="button"><br><br>
<font color=#2aa3e8> 
</form>
<?php
session_start();
if(isset($_POST['submit']))
{
$con = mysqli_connect('localhost','root','') or die(mysqli_error());
 mysqli_select_db($con,'anu') or die(mysqli_error());
 $userid=$_POST['userid'];
 $password=$_POST['password'];
 if($userid!=''&&$password!='')
 {
   $query=mysqli_query($con,"select * from aplogin where username='".$userid."' and password='".$password."'") or die(mysqli_error());
   $res=mysqli_fetch_row($query);
   if($res)
   {
    $_SESSION['userid']=$userid;
	$_SESSION['name']=$userid;
	$_SESSION['password']=$password;
    header('location:lp2.php');
   }
    else
   {
	header('location:inci.php');
  
      }
 }
 else
 {
  header('location:inci1.php');
  }

}
?>
</body>
</html>
