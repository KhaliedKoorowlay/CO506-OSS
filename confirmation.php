<?php
  
   session_start();

   $total = $_SESSION["selqty"] * $_SESSION["txtprice"];

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
       //echo "An Error has occured";
       break;
   }

   echo "<h2> Your order Qty is {$_SESSION["selqty"]} </h2>";
  // echo "<h2> The Size of the selected widgets are {$_SESSION["selsize"]} </h2>";
   echo "<h2> and the selected Colour is {$_POST["selcolour"]}.</h2><hr/>";
   echo "<h2> The Total price of the Order is: £$total </h2>";


?>
