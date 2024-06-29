<?php
  $num_port = $_POST['port'];
  $type_stockage = $_POST['contact'];
  $format_log = $_POST['log'];
  $hostname = $_POST['hote'];
  $taille_directory = $_POST['stck'];
  $taille_cache = $_POST['taille'];
  $min_time = $_POST['min_time'];
  $max_time = $_POST['max_time'];
  $url_never_cache = $_POST['url_never'];
  $url_download = $_POST['url_download'];

  if($type_stockage == 1){
    $swap = $_POST['rep'];
    $sous_rep = $_POST['srep'];
    $file_number = $_POST['file'];
  }



  exec("sudo cat /etc/squid/squid.conf|grep -v ^# | grep [a-zA-Z0-9] >> /etc/squid/squid.conf" , arrray() , $return );

  echo "<p>$return</p>";

  // exec(makeCmd("http_port" , $num_port) , array() , $return);

  function makeCmd($parametre , $valeur){
      $cmd = "sed -i 's/$parametre [0-9,\.]*/$parametre $valeur /g' /etc/squid/squid.conf";
      return $cmd; 
  }

?>