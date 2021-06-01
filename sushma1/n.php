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
    echo'You entered username or password is incorrect';  }
 }
 else
 {
  echo'Enter both username and password';
 }
}
?>