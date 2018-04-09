<?php
error_reporting(0);
session_start();
include('db_con.php');
$myfilename = "level.txt";
    if(file_exists($myfilename)){$datalimittxt= file_get_contents($myfilename); }


$myfilename = "loc.txt";
    if(file_exists($myfilename)){$dataloc= file_get_contents($myfilename); }



$myfilename = "moisture.txt";
    if(file_exists($myfilename)){$datamo= file_get_contents($myfilename); }


$myfilename = "rain.txt";
    if(file_exists($myfilename)){$datara= file_get_contents($myfilename); }


$myfilename = "degrees.txt";
    if(file_exists($myfilename)){$datade= file_get_contents($myfilename); }

$datade=str_replace("E:","",$datade);


$datamo=str_replace("M:","",$datamo);


$datara=str_replace("R:","",$datara);
$today=date("Y-m-d H:i:s");

$s1="INSERT INTO data(loc, mois, rain, gyro,dates) VALUES ('".$dataloc."','".$datamo."','".$datara."','".$datade."','".$today."')";
mysql_query($s1) or die (mysql_error($con));




?>