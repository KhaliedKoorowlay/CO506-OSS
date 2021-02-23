<html>
<body>
<?php
	$hourlyrate	= 5.75;
	$hoursperweek = 40;
  $taxrate = 0.22;
	$gross = $hourlyrate * $hoursperweek;
  $netwage = (1 - $taxrate) * $gross;
	echo $netwage;
?>
</body>
</html>
