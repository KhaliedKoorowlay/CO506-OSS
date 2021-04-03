<?php

	// Connect to server and select database
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "db1_21818310";

  $con = mysqli_connect($servername, $username, $password, $database);

	// SQL statement
  $sql = "SELECT * from test";

	// Execute sql statement
  $result = mysqli_query($con, $sql);
?>
<html>
<body>

<?php
while ($row = mysqli_fetch_assoc($result))
{
      echo "<a href=\"wk6ex2action.php?id=$row[ID]\">$row[name]</a></br>";
}
?>
</body>
</html>
