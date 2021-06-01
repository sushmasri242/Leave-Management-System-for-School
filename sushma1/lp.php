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
</i>
<b><h1><font color="#2E8B57" size="7vm">Leave Policy</font></h1></b>
<h2>Total number of leaves one is allowed to take according to category are as follows:</h2>
<h3><font color="#800000" size="5vm">  *Casual leaves can range from 1-15</br>
  *Medical leaves can range from 1-15</br>
  </h3>
</body>
</html>
	