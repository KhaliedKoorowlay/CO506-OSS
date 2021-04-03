<?php
  // Connect to server and select database
  $username = "root";
  $servername = "localhost";
  $database = "db1_21818310";
  $password = "";

  $con = mysqli_connect($servername, $username, $password, $database);

  if ($_POST["btnsubmit"] == "save") {
    $sql = "UPDATE test set phone_number = '{$_POST["txttelno"]}', email = '{$_POST["txtemail"]}' where ID = '{$_COOKIE["id"]}'";
  }

  if ($_POST["btnsubmit"] == "delete") {
    $sql = "DELETE from test where ID = '{$_COOKIE["id"]}'";
  }

  $result = mysqli_query($con, $sql);

  if ($result)
  {
    echo "<script>window.location = 'http://localhost/OSS/wk6ex2.php'</script>";
  }

?>
