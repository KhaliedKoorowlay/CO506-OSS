<?php
	$id = $_GET["id"];
	setcookie("id", $id);
	// Connect to server and select database
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "db1_21818310";

	$con = mysqli_connect($servername, $username, $password, $database);


	//SQL statement
	$sql = "SELECT * from test where ID = $id ";

	// Execute query
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_assoc($result);
?>
<html>
<body>
<form action = "wk6ex3.php" method = "post">

	Name :
	<input type = text name = txtname value ="<?php echo $row['name'] ?>" readonly />
	</br>
	Phone number :
	<input type = text name = txttelno value ="<?php echo $row['phone_number'] ?>" />
	</br>
	Email :
	<input type = text name = txtemail value ="<?php echo $row['email'] ?>" />
	</br>
	<input type = submit name = btnsubmit value ="save"/>
	<input type = submit name = btnsubmit value ="delete"/>
  </form>
  </body>
</html>
