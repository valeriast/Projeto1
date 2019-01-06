<?php

  $email = $_POST["email"] ;

  echo $email;
  $xml = '<email>' . $email . '</email>';

  $fp = fopen('email.xml', 'a+');
  fwrite ($fp, $xml);
  fclose ($fp);
?>
