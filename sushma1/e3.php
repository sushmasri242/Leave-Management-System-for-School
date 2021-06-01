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
<center>
<font color="#800000" size="6vm">
Earned leave is applied succesfully<br>
<img src="le3.jpg" height="150" width="150" class="im"><br>
</center>
<?php
session_start();
mysql_connect('localhost','root','') or die(mysql_error());
 mysql_select_db('anu') or die(mysql_error());
 
echo '<font color="#800000" size="6vm">';
	mysql_query("insert into leavetable(Name,Typeofleave,Noofdays,Fromdate,Todate,Status,Cancellation,Leaveid) values('".$_SESSION['name']."','".$_SESSION['type1']."','".$_SESSION['n']."','".$_SESSION['from']."','".$_SESSION['to']."','pending','cancel','".$_SESSION['lid']."')") or die("failure");
	
		echo "<br><center>".$_SESSION['name'].",an email is sent to you<br><a href=\"lp.php\">OK</a></center>";

		
		
	
?>
</body>
</html>
