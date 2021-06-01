<html>
<head>
	<title>apply leave</title>
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
    background-color: #2E8B57;
}
	</style>

</head>
<body  style="background-image:url(im6.jpg)";>
<i>
<b>
<ul>
  <li><a href="new.html">Home</a></li>
  <li><a href="changepass1.php">Change Password</a></li>
  <li><a href="manage1.php">Manage Leave</a></li>
  <li><a href="regusers.php">Register Users</a></li>
  <li><a href="leavehistory3.php">Employee Leave History</a></li>
  <li><a href="help3.php">Help</a></li>
  <li style="float:right"><a href="new.html">Logout</a></li>
  <li style="float:right"><a href="new.html"><?php session_start(); echo "welcome  ".$_SESSION['name']."";?></a></li>
 

</ul>
</b>
</i>

	<center>
	<br><h1><img src="lo3.png" height="125" width="125" class="im"><font color="#800000" size="7vm"/>Register Users</h1>
	<div class="users">

	<form action="#" method="post">
		<h3><font color="white">
		<table style="color:coral">
<tr>
<td><font color="#8A2BE2" size="5vm"/><b>User Emailid</b></td>
<td><input type="text" name="empname" placeholder="User Emailid"required></br></br></td>
</tr>
<tr>
<td><font color="#8A2BE2" size="5vm"/><b>Gender</b></td>
<td><font color="#8A2BE2" size="5vm"/><select name="g[]" placeholder="Gender"required></br></br>
<option value="Gender">Gender</option>
		<option value="Female">Female</option>
		<option value="Male">Male</option>
		</td>
</tr>


<tr>
<td><font color="#8A2BE2" size="5vm"/><b>Job</b></td>
<td><font color="#8A2BE2" size="5vm"/><select name="j[]" placeholder="Job"required></br></br>
	<option value="Approver">Teacher</option>
	<option value="Requestor">Student</option>
	</select>
</td>
</tr>
<tr>
<td><font color="#8A2BE2" size="5vm"/><b>Joining Date</b></td>
<td><input type="date" name="date" placeholder="Joining Date"required/></td>
</tr>
<tr>
<td><font color="#8A2BE2" size="5vm"/><b>User name</b></td>
<td><input type="text" name="uname" placeholder="User name"required/></td>
</tr>
<tr>
<td><font color="#8A2BE2" size="5vm"/><b>Password</b></td>

<td><input type="password" name="pass" placeholder="password"required/></td>
</tr>
<tr>
<td colspan=2><center><input type="submit" class="button" name="Register" value="register"/></center></td>
</tr>
</table>
</font></h3>
		
	</form>
	</center>
<?php


if(isset($_POST['Register']))
{
 
 $con = mysqli_connect('localhost','root','') or die(mysqli_error());
 mysqli_select_db($con,'anu') or die(mysqli_error());
 $empname=$_POST['empname'];

 foreach($_POST["g"] as $gender)
	$_SESSION['gender']=$gender;
 
 foreach($_POST["j"] as $job)
	$_SESSION['job']=$job;

 $date=$_POST['date'];
 $uname=$_POST['uname'];
 $pass=$_POST['pass'];
 
 if($uname!=''&&$pass!='')
 {
	if($_SESSION['job']=='Requestor')
	{
	$query=mysqli_query($con,"select * from login where username='".$uname."' and password='".$pass."'") or die(mysqli_error());
	$res=mysqli_fetch_array($query,MYSQLI_ASSOC);
	if($res)
		echo 'already registered';
	else
	{
		$res=mysqli_query($con,"INSERT into login  values('".$uname."','".$pass."')");
		$id=rand();
		mysqli_query($con,"insert into info1(Name,Department,Gender,Jdate,Emailid) values('".$uname."','School','".$gender."','".$date."','".$empname."')");
	
		$_SESSION['gender']=$gender;
		$_SESSION['department']='School';
		$_SESSION['date']=$date;
		$_SESSION['id']=$id;
		
			echo "<center><h2>successfully registered</h2></center>";
		
		
		
	}	
	}
	if($_SESSION['job']=='Approver')
	{
	$query=mysqli_query($con,"select * from aplogin where username='".$uname."' and password='".$pass."'") or die(mysql_error());
	$res=mysqli_fetch_array($query,MYSQLI_ASSOC);
	if($res)
		echo '<center><h2>already registered</h2></center>';
	else
	{
		$res=mysqli_query($con,"INSERT into aplogin  values('".$uname."','".$pass."')");
		
		mysqli_query($con,"insert into info(Name,Department,Gender,Jdate,Emailid) values('".$uname."','School','".$gender."','".$date."','".$empname."')");
	
		$_SESSION['gender']=$gender;
		$_SESSION['department']='School';
		$_SESSION['date']=$date;
	
		
			echo "<center><h2>successfully registered</h2></center>";
		
		
		
	}	
	}
	

 }
 else
	echo 'enter details';
}

?>
</body>
</html>
	
	
		
	