	  <?php
    $myfilename = "bat.txt";
    if(file_exists($myfilename)){$myfilename1= file_get_contents($myfilename);
	  echo       $myfilename1; }


?>