<?php
  /*
   echo "<h2> Your order qty is {$_POST["selqty"]} </h2></br>";
   echo "<h2> and the selected colour is {$_POST["selcolour"]}.</h2>";
   echo "<h2> Your order qty is {$_COOKIE["selqty"]} </h2></br>";
   echo "<h2> and the selected colour is {$_POST["selcolour"]}.</h2>";
   */
   session_start();

   //$total = $_SESSION["selqty"] * $_SESSION["txtprice"];
   switch ($_SESSION["selsize"]) {
     case 'Small':
       $total = $_SESSION["selqty"] * 15.75;
       break;

     default:
       
       break;
   }

   echo "<h2> Your order qty is {$_SESSION["selqty"]} </h2>";
   echo "<h2> and the selected colour is {$_POST["selcolour"]}.</h2><hr/>";
   echo "<h2>Total price of the order: $total</h2>";



?>
