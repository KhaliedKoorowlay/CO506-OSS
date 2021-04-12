<?php
session_start();
$_SESSION['selqty'] = $_POST['selqty'];
//$_SESSION["txtprice"] = $_POST["txtprice"];
?>

<html>
<head><title>Select colour page</title></head>
<body>
<!--<form action="confirmation.php"  method="post">-->
<form action="selectcolour.php"  method="post">
Select the size for the <?php echo $_POST["selqty"] ?> widgets you are ordering
<select name="selsize">
<option value="Small">Small(£15.75)</option>
<option value="Medium">Medium(£16.75)</option>
<option value="Large">Large(£17.75)</option>
<option value="Extra Large">Extra large(£18.75)</option>
</select>
<br/><br/>
<!--
<input type="hidden" name="selqty" value="<?php //echo $_POST["selqty"]?>"/>
-->
<input type="submit" value="Buy"/>
</form>
</body>
</html>
