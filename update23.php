	  <?php
    $myfilename = "rainholder.txt";
    if(file_exists($myfilename)){
      $myfilename2= file_get_contents($myfilename);
	  echo       $myfilename2;
    }


?>