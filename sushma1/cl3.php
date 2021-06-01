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
<?php
session_start();
echo "<center><font color="#800000" size="7vm"><i>
<br>Request failed:you have only all '".$_SESSION['c']."' casual leaves<a href=\"applyleave.php\">GO BACK</a></center>";

</body>
</html>
