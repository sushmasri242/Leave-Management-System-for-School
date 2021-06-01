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
echo '<font color="#800000" size="7vm">';
echo "<center><i>Request failed:you have only all '".$_SESSION['mt']."' maternity leaves<br><a href=\"applyleave.php\">GO BACK</a></center></i>";
?>
</body>
</html>
