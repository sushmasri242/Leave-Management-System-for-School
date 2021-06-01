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
</i>		<center>
	<br><img src="l3.jpg" height="75" width="125" class="im">
<font color="#FF00FF" size="5vm"/><h1>
Apply Leave</h1>
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
		<option value="earned">earned</option>
		<option value="maternity">maternity</option>
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
<td colspan=2><center><input type="submit"  name="ApplyLeave" class="button" value="APPLYLEAVE"/></center></td>
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
	$query=mysqli_query($con,"select * from info  where Name='".$_SESSION['name']."'");
	while($re=mysqli_fetch_array($query,MYSQLI_ASSOC))
                {
			
				$gen=$re['Gender'];
		}
		
	

	
        $c='';
	$e='';
	$m='';
	$mt='';
	
	if($type1=='casual')
	{
		
		$c=15-$re['Days'];
		
		if($days>4)
		{
			echo "<br>casual leaves cannot exceed 4<br><a href=\"applyleave1.php\">GO BACK</a>";
			exit();
		}
		
		else if($c==0)

		{
				echo "<br>Request failed:you have used all your casual leaves<a href=\"applyleave1.php\">GO BACK</a>";
				exit();
		}
		else if($c<$days)
		{
				echo "<br>Request failed:you have only all '".$c."' casual leaves<a href=\"applyleave1.php\">GO BACK</a>";
				exit();
		}
		else
		{
		$n=$days;
		mysqli_query($con,"insert into leavetable1(Name,Typeofleave,Noofdays,Fromdate,Todate,Status,Cancellation,Leaveid) values('".$_SESSION['name']."','".$type1."','".$n."','".$from."','".$to."','pending','cancel','".$lid."')") or die("failure");
	
		echo "<br>".$_SESSION['name'].",an email is sent to you<br><a href=\"lp2.php\">OK</a>";
		
		}
			
	}		
		
	if($type1=='medical')
	{
		$m=15-$re['Days'];
		
		
		if($m==0)

		{
				echo "<br>Request failed:you have used all your medical leaves<br><a href=\"applyleave1.php\">GO BACK</a>";
				exit();
		}
		else if($m<$n)
		{
				echo "<br>Request failed:you have only '".$m."' medical leaves so,categorize them in medical,earned or casual leaves accordingly<br><a href=\"applyleave1.php\">GO BACK</a>";
				exit();
		}
		else
		{
		$days=$m-$n;
		mysqli_query($con,"insert into leavetable1(Name,Typeofleave,Noofdays,Fromdate,Todate,Status,Cancellation,Leaveid) values('".$_SESSION['name']."','".$type1."','".$n."','".$from."','".$to."','pending','cancel','".$lid."')") or die("failure");
	
	
		
	echo "<br>".$_SESSION['name'].",an email is sent to you<br><a href=\"lp2.php\">OK</a>";
		}
	}
	if($type1=='earned')
	{
		$e=15-$re['Days'];
		
		
		if($e==0)

		{
				echo "<br>Request failed:you have used all your earned leaves<br><a href=\"applyleave1.php\">GO BACK</a>";
				exit();
		}
		else if($e<$n)

		{
				echo "<br>Request failed:you have only '".$e."' earned leaves<br><a href=\"applyleave1.php\">GO BACK</a>";
				exit();
		}
		else
		{
		$days=$e-$n;
		mysqli_query($con,"insert into leavetable1(Name,Typeofleave,Noofdays,Fromdate,Todate,Status,Cancellation,Leaveid) values('".$_SESSION['name']."','".$type1."','".$n."','".$from."','".$to."','pending','cancel','".$lid."')") or die("failure");
	
	
		
	echo "<br>".$_SESSION['name'].",an email is sent to you<br><a href=\"lp2.php\">OK</a>";
	
		}
	}
    
	if($type1=='maternity')
	{

			

		if($gen=="female"||$gen=="Female")
    		{
	
			$mt=60-$re['Days'];
		
		
			if($mt==0)

			{
				echo "<br>Request failed:you have used all your maternity leaves<br><a href=\"applyleave1.php\">GO BACK</a>";
				
			}
			else if($mt<$n)

			{
				echo "<br>Request failed:you have only  '".$mt."' maternity leaves<br><a href=\"applyleave1.php\">GO BACK</a>";
				
			}
			else
			{
				$days=$mt-$n;
				mysqli_query($con,"insert into leavetable1(Name,Typeofleave,Noofdays,Fromdate,Todate,Status,Cancellation,Leaveid) values('".$_SESSION['name']."','".$type1."','".$n."','".$from."','".$to."','pending','cancel','".$lid."')") or die("failure");
				echo "<br>".$_SESSION['name'].",an email is sent to you<br><a href=\"lp2.php\">OK</a>";
	
			}
		}
		
		else
		{

				echo "<h2>This leave is issued only for women employees</h2>";
		} 

	}
     
}
}
?>
</body>
</html>
	
	
		
	