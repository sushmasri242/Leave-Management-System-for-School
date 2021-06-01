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
    background-color:#2E8B57 ;
}
	</style>

</head>
<body  style="background-image:url(im6.jpg)";>
<i>
<b>
<ul>
  <li><a href="new.html">Home</a></li>
  <li><a href="changepass.php">Change Password</a></li>
  <li><a href="applyleave.php">Apply Leave</a></li>
  <li><a href="leavebal.php">Leave Balance</a></li>
  <li><a href="leavestatus.php">Leave status</a></li>
  <li><a href="leavehistory.php">Leave History</a></li>
  <li><a href="help.php">Help</a></li>
  <li style="float:right"><a href="new.html">Logout</a></li>
   <li style="float:right"><a href="new.html"><?php session_start(); echo "welcome  ".$_SESSION['name']."";?></a></li>
 

</ul>
</b>
</i>	<center>
	<br><img src="l3.jpg" height="125" width="125" class="im"><font color="#FF00FF" size="5vm"/><h1>Apply Leave</h1>
	<div class="login-page">
	<div class="form">
	<form action="#" method="post">
		<h3><font color="white">
		<table style="color:coral">
<tr>
<td><font color="#8A2BE2" size="5vm"/><b>Type of Leave</b></td>
<td><font color="#8A2BE2" size="5vm"/>
<select name="type" placeholder="Type of Leave"required></br></br>
		<option value="Type of Leave">select</option>
		<option value="casual">casual</option>
		<option value="medical">medical</option>
		
		</select>
</td>
</tr>
<tr>
<td><font color="#8A2BE2" size="5vm"/><b>From Date</b>  </td>
<td><input type="date" name="from" placeholder="From Date"required></td>
</tr>
<tr>
<td><font color="#8A2BE2" size="5vm"/><b>To Date</b>  </td>
<td><input type="date" name="to" placeholder="To Date"required></td>
</tr>
<tr>
<td colspan=2><center><input type="submit"  class="button" name="ApplyLeave" value="APPLYLEAVE"/></center></td>
</tr>
</table>
</font></h3>
		
	</form>
	</center>

<?php

 $con = mysqli_connect('localhost','root','') or die(mysqli_error());
 mysqli_select_db($con,'anu') or die(mysqli_error());
 if(isset($_POST['ApplyLeave']))
{
	if($_SESSION['name']!=''&&$_SESSION['password']!='')
	{
	$lid=rand();
	$type1=$_POST['type'];
	$from=$_POST['from'];
	$to=$_POST['to'];
	$start=new DateTime($from);
	$end=new DateTime($to);
	$days=$start->diff($end,true)->days;
	$sundays=intval($days/7)+(($start->format('N')+$days%7)>=7); 
	$n=$days-$sundays;
	$query=mysqli_query($con,"select * from info1  where Name='".$_SESSION['name']."'");
	$re=mysqli_fetch_array($query,MYSQLI_ASSOC);
	
	

	
        $c='';
	$e='';
	$m='';
	$mt='';
	$_SESSION['type1']=$type1;
	$_SESSION['to']=$to;
	$_SESSION['from']=$from;
	$_SESSION['lid']=$lid;
	if($type1=='casual')
	{
		
		
		$c=15-$re['Days'];
		
		if($days>4)
		{
			header("location:cl.php");

			exit();
		}
		
		else if($c==0)

		{
		header("location:cl2.php");		
				exit();
		}
		else if($c<$days)
		{$_SESSION['c']=$c;
				header("location:cl3.php");
				exit();
		}
		else
		{
		$n=$days;
		$_SESSION['n']=$n;
		header("location:cl4.php");		
				exit();
		
		 		}
			
	}		
		
	if($type1=='medical')
	{
		$m=15-$re['Days'];
		
		
		if($m==0)

		{
				header("location:m1.php");		
				exit();
		}
		else if($m<$n)
		{
		$_SESSION['m']=$m;
			header("location:m2.php");		

				exit();
		}

		else
		{
		$days=$m-$n;
		$_SESSION['n']=$n;

			header("location:m3.php");		

			}
	}
	if($type1=='earned')
	{
		$e=15-$re['Days'];
		
		
		if($e==0)

		{
				header("location:e1.php");		

				exit();
		}
		else if($e<$n)

		{
			$_SESSION['e']=$e;
				header("location:e2.php");		

						exit();
		}
		else
		{
		$days=$e-$n;
		$_SESSION['n']=$n;

		header("location:e3.php");		

		}
	}
    
	if($type1=='maternity')
	{

			

		if($gen=="female"||$gen=="Female")
    		{
	
			$mt=60-$re['Days'];
		
		
			if($mt==0)

			{
			header("location:mt1.php");		
	
				
			}
			else if($mt<$n)

			{
				$_SESSION['mt']=$mt;
				header("location:mt2.php");		

				
			}
			else
			{
				$days=$mt-$n;
				$_SESSION['n']=$n;

				header("location:mt3.php");
				
			}
		}
		
		else
		{
			header("location:mt4.php");		

				
		} 

	}
     
}
}
?>
</body>
</html>
	
	
		
	