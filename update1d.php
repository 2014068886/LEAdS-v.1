	  <?php
    $myfilename = "rl1.txt";
    if(file_exists($myfilename)){$myfilename1= file_get_contents($myfilename);
	  echo       $myfilename1; }


?>