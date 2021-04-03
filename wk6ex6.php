<?php
	include("myfunctions.inc");
	html_header("My second function demo");
	echo "I pay £ " . calculatetax(20000,40,5000) . " tax";
	html_footer();
?>
