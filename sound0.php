<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
  $ret2 = file_put_contents('level.txt','0');

	
    $myfilename = "saved.txt";
    if(file_exists($myfilename))

    {$myfilename1= file_get_contents($myfilename);
if ($myfilename1>0)    
{
include('savedb.php');	 }


}

  $ret2 = file_put_contents('saved.txt','0');



?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>LEAdS</title></head>


</head>

</body>






</html>
