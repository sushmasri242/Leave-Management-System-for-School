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

li{
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
<ul >
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
</i>
<b><h1><font color="#800000" size="6vm"><i>A person who logged in can be able to</i></font></h1></b>
<b><h2>
*Know the leave policy from <a href="new.html">HOME</a>tab<br>
*Change password from <a href="changepass.php">CHANGEPASSWORD</a>tab<br>
*Apply the leave from <a href="applyleave.php">APPLYLEAVE</a>tab<br>
*Check the leave balance from <a href="leavebal.php">LEAVEBALANCE</a>tab<br>
*Check the status of leaves from <a href="leavestatus.php">LEAVESTATUS</a>tab<br>
</h2></b>
</body>
</html>