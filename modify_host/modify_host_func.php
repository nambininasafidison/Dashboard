<?php

function get_host_addr($name, $niv){
  $conf_name = "conf/pc_$niv.conf";
  $lines = explode("\n",file_get_contents($conf_name));
  $line_num = 0;
  foreach ($lines as $line) {
    if( preg_match("/host\s$niv-$name\s/", $line) ){
      $l = explode("fixed-address ",$lines[$line_num+2])[1];
      $ip = substr($l,0,-1);
      return $ip;
    }
    $line_num++;
  }
  return NULL;
}

function get_host_mac($name, $niv){
  $conf_name = "conf/pc_$niv.conf";
  $lines = explode("\n", file_get_contents($conf_name));
  $line_num = 0;
  foreach ($lines as $line) {
    if(preg_match("/host\s$niv-$name\s/", $line)){
      break; 
    }
    $line_num++;
  }
  $mac_line = $lines[$line_num+1];
  $mac = explode(" ethernet ",$mac_line)[1];
  $mac = substr($mac,0,-1);
  return $mac;
}

function modify_host($name, $niv, $new_name, $new_ip, $new_mac){
  $conf = "conf/pc_$niv.conf";
  $lines = file_get_contents($conf);

  $ip = get_host_addr($name, $niv);
  $mac = get_host_mac($name, $niv);

  $host = "host $niv-$name {";
  $new_host = "host $niv-$new_name {";

  $new_addr = "\tfixed-address $new_ip;\n";

  $lines = str_replace($host, $new_host, $lines);
  $lines = str_replace($ip, $new_ip, $lines);
  $lines = str_replace($mac, $new_mac, $lines);

  file_put_contents($conf, $lines);
}

?>

