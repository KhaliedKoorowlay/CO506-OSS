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

     case 'Medium':
       $total = $_SESSION["selqty"] * 16.75;
       break;

     case 'Large':
       $total = $_SESSION["selqty"] * 17.75;
       break;

     case 'Extra large':
       $total = $_SESSION["selqty"] * 18.75;
       break;

     default:
       echo "An Error has occured";
       break;
   }

   echo "<h2> Your order qty is {$_SESSION["selqty"]} </h2>";
   echo "<h2> The size of the selected widgets are {$_SESSION["selsize"]} </h2>";
   echo "<h2> and the selected colour is {$_POST["selcolour"]}.</h2><hr/>";
   echo "<h2>Total price of the order: $total</h2>";



?>
