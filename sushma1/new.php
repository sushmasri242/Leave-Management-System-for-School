<html>
<head>
<title>Login</title>
	<link href="styles.css" rel="stylesheet" type="text/css" />

</head>

<body  style="background-image:url(anusha.jpg)";>
&nbsp;
&nbsp;
&nbsp;
<h1 style="color:green"><marquee>Online Leave Management</marquee></h1>


<div>
<div class="header">

</div> 


 <div id="menu">
     	 <ul>
            <li><a href="home.html" style="float:left ;font-size:1.5vw" >Admin</a></li>
            <li><a href="blank.html" style="float:left;font-size:1.5vw">Employee</a></li>
        </ul>    	
    </div> 
<center style="font-size:10vw ;font-style: italic";>Easy Leave</center>

<?php
session_start();
if(isset($_POST['submit']))
{
 mysql_connect('localhost','root','') or die(mysql_error());
 mysql_select_db('project') or die(mysql_error());
 $userid=$_POST['userid'];
 $password=$_POST['password'];
 if($userid!=''&&$password!='')
 {
   $query=mysql_query("select * from register where userid='".$userid."' and password='".$password."'") or die(mysql_error());
   $res=mysql_fetch_row($query);
   if($res)
   {
    $_SESSION['userid']=$userid;
	$_SESSION['name']=$userid;
    header('location:pg2.php');
   }
   else
   {
    echo'You entered username or password is incorrect';
   }
 }
 else
 {
  echo'Enter both username and password';
 }
}
?>
</body>
</html>