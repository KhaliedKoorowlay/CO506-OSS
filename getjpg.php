<?php

  header("Content-type: image/jpeg");
  $id = $_GET["id"];
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "db1_21818310";

  $con = mysqli_connect($servername, $username, $password, $database);


  $sql = "SELECT image FROM monster WHERE id='$id'";

  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_array($result);

  $jpg = $row["image"];

  echo $jpg;
?>
