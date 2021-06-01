<html>
<head>
	<title>login</title>
	<link href="sty.css" rel="stylesheet" type="text/css" />
	<style>
	body{background-image:url(im6.jpg);background-repeat:no-repeat;

		}
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
    background-color: #FFFF00;
}


		</style>

</head>
<body>
&nbsp;
&nbsp;
&nbsp;

<center><div class="heading line_bottom" style="font-size:3vw;color:#2E8B57">Admin Login</div></center>
&nbsp;
&nbsp;
&nbsp;
<center><img src="lo1.png" height="150" width="150" /></center></br>
	<form action="#" method="post">
<div align="center" >

<font color="#DC143C" size="5vm"/>
<i>Username:</i><input type="text" size="20" name="userid" placeholder="username"><br><br>
&nbsp;

<font color="#DC143C" size="5vm"/>
<i>Password:</i><input type="password" size="20" name="password"  placeholder="password"><br><br>
<input  type="submit"  name="submit" class="button" value="SUBMIT">
<br><br>
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
   $query=mysqli_query($con,"select * from adminlog where username='".$userid."' and password='".$password."'") or die(mysqli_error());
   $res=mysqli_fetch_row($query);
   if($res)
   {
    $_SESSION['userid']=$userid;
	$_SESSION['name']=$userid;
	$_SESSION['password']=$password;
        header("location:lp1.php");
   }
     else
   {
	header('location:inca.php');
  
      }
 }
 else
 {
  header('location:inca1.php');
  }


}
?>
</body>
</html>
