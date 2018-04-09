	  <?php
    $myfilename = "level.txt";
    if(file_exists($myfilename)){
      $myfilename4= file_get_contents($myfilename);
	  echo       $myfilename4;
    }


?>