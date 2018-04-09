	  <?php
    $myfilenamec = "level.txt";
    if(file_exists($myfilenamec)){
      $myfilename1c= file_get_contents($myfilenamec);
	  echo       $myfilename1c;
    }


?>