	  <?php
    $myfilename = "rain.txt";
    if(file_exists($myfilename)){
      $myfilename3= file_get_contents($myfilename);
	  echo       $myfilename3;
    }


?>