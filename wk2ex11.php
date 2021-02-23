<?php

$mymarks["CO403"]=63;
$mymarks["CO404"]=59;
$mymarks["CO451"]=82;
$mymarks["CO453"]=62;
$mymarks["CO454"]=63;
$mymarks["CO456"]=56;

$total=0;


while(list($index,$value)=each($mymarks))
{
  $total=$total + $mymarks[$index];
  $average=$total/6;
}

echo "My average mark was $average";
?>
