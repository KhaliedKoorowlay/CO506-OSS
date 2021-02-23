<?php
// Cookie Function
//setcookie ("selqty" ,$_POST ["selqty"]);
//session function
session_start();
$_SESSION["selqty"] = $_POST["selqty"];
?>

<html>
<head><title>Select colour page</title></head>
<body>
<form action="confirmation.php"  method="post">
Select the colour for the <?php echo $_POST["selqty"] ?> widgets you are ordering
<select name="selcolour">
<option>white</option>
<option>red</option>
<option>yellow</option>
<option>green</option>
<option>blue</option>
</select>
<br/><br/>
<!--
<input type="hidden" name="selqty" value="<?php //echo $_POST["selqty"]?>"/>
-->
<input type="submit" value="Buy"/>
</form>
</body>
</html>
