<?php
$con=mysql_connect("localhost","root","12345");
mysql_select_db("leads",$con) or die(mysql_error($con));
error_reporting(E_ALL ^ E_NOTICE);
?>