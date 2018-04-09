	  <?php
    $myfilename = "loc.txt";
    if(file_exists($myfilename)){$myfilename0= file_get_contents($myfilename);
	  echo       $myfilename0; }


?>