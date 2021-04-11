<?php
$name = $_POST["txtname"];
$servername = "localhost";
$username = "root";
$password = "";
$database = "db1_21818310";

$con = mysqli_connect($servername, $username, $password, $database);


// Obtain the file sent to the server within the response.
$image = $_FILES['monsterimage']['tmp_name'];
$audio = $_FILES['monsteraudio']['tmp_name'];

  // Get the file binary data
  $imagedata = addslashes(fread(fopen($image, "r"), filesize($image)));
  $audiodata = addslashes(fread(fopen($audio, "r"), filesize($audio)));

  $sql = "INSERT INTO monster";
  $sql .= "(name, image, audio) ";
  $sql .= "VALUES ('$name', '$imagedata','$audiodata');";

  $result = mysqli_query($con, $sql);

   mysqli_close($con);
?>
