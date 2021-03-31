<?php
	// Sql statement
	$sql = "INSERT INTO test (name,email,phone_number) ";
	$sql = $sql . " values ('{$_POST['txtName']}','{$_POST['txtEmail']}','{$_POST['txtPhoneNumber']}')";

	// Connect to server and select database
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "db1_21818310";

	$con = mysqli_connect($servername, $username, $password, $database);

	// Execute sql statement
	$result = mysqli_query($con, $sql);

	// Sql statement
	$sql = "SELECT * from test";

	// Execute sql statement
	$result = mysqli_query($con, $sql);

	// Display table 
	while ($row = mysqli_fetch_assoc($result))
	{
		echo "$row[name]  $row[email]  $row[phone_number] <br/>";
	}

?>
