<?php

  $email = $_POST["email"] ;

  echo $email;
  $xml = '<email>' . $email . '</email>';

  $fp = fopen('email.xml', 'a+');
  fwrite ($fp, $xml);

  $xml = '<?xml version="1.0" encoding="ISO-8859-1"?>';
  $xml .='<emails>';


  $fp2 = fopen('lista.xml', 'w+');

  $link = "lista.xml";
  $xml = Simplexml_load_file($link) -> channel;
  foreach ($xml -> email as $item) {
        fwrite ($fp2,  $item -> email);
  }
  fclose ($fp2);

  $fp2 = fopen('lista.xml', 'a+');
  $xml ='</emails>';
  fwrite ($fp2,  $xml);

  fclose ($fp2);
  fclose ($fp);
?>
