<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
  $ret2 = file_put_contents('level.txt','3');
   $myfilename = "saved.txt";
    if(file_exists($myfilename))

    {$myfilename1= file_get_contents($myfilename);
if ($myfilename1>1)    
{
include('savedb.php');	 }

if ($myfilename1<1)    
{
include('savedb.php');	 }
}
  $ret2 = file_put_contents('saved.txt','3');


$data1=$_GET['s1'];
$data2=$_GET['s2'];
$data3=$_GET['s3'];
$data4=$_GET['s4'];
$data5=$_GET['s5'];
$data6=$_GET['s6'];

error_reporting(0);
session_start();
include('db_con.php');
$s1="INSERT INTO data(loc, mois, rain, gyro,dates, level) VALUES ('".$data1."','".$data2."','".$data3."','".$data4."','".$data5."','".$data6."')";
mysql_query($s1) or die (mysql_error($con));
	

?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>LEAdS</title></head>


	
	<script type="text/javascript" src="js/sound.js"></script>
<script type="text/javascript" src="js/sound3.js"></script>

</head>

</body>






</html>
