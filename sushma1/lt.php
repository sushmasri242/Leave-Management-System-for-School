
<html>
<body>
<?php
session_start();
 mysql_connect('localhost','root','') or die(mysql_error());
 mysql_select_db('anu') or die(mysql_error());
$res=mysql_query("select * from leavetab") or die(mysql_error());
echo "<table border='1'>";
 echo "<tr>";
 echo "<th>Typeofleave</th><th>Noofleaves</th>";
 echo "</tr>";

while($result=mysql_fetch_array($res))

{
		
		echo "<tr>";
	echo "<td>".$result['Typeofleave']."</td><td>".$result['Noofleaves']."</td>";
	echo "</tr>";
	if($result['Typeofleave']=='casual')
	{
		$_SESSION['cr']=$result['Noofleaves'];
		if(isset($_SESSION['cr']))
		{
		echo '".$_SESSION['cr']."';
		}
	}
	if($result['Typeofleave']=='medical')
	{
		$mr=$res['Noofleaves'];
		$_SESSION['mr']=$mr;
	}

	if($result['Typeofleave']=='earned')
	{
		$er=$res['Noofleaves'];
		$_SESSION['er']=$er;
	}
	if($result['Typeofleave']=='maternity')
	{
		$mtr=$res['Noofleaves'];
		$_SESSION['mtr']=$mtr;
	}

}
?>
</body>
</html>


