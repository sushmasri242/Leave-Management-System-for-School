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
<b><h1><font color="#800000" size="6vm"><i>A person who logged in can be able to</i></font></h1></b>
<b><h2>
*Know the leave policy from <a href="new.html">HOME</a>tab<br>
*Change password from <a href="changepass1.php">CHANGEPASSWORD</a>tab<br>
*Manage  the leaves from the approver <a href="manage1.php">MANAGELEAVE</a>tab<br>
*Register users from <a href="regusers.php">REGISTER USERS</a>tab<br>
*Check the history of leaves of employees from <a href="leavehistory3.php">EMPLOYEE LEAVE HISTORY</a>tab<br>
</h2></b>
</body>
</html>