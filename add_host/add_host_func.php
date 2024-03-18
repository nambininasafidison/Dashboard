<?php

# Find if a host is already in the network
function find_host($host){ // $host is an associative array
  $nom = $host['nom'];
  $niveau = $host['niveau'];

  $conf = "conf/pc_$niveau.conf";
  $lines = explode("\n", file_get_contents($conf)); 
  foreach($lines as $line){
    if(preg_match("/host\s$niveau-$nom\s/", $line)){
      return true;
    } 
  }
  return false;
}

# Prendre une IP disponible dans la plage du niveau
function get_new_ip($niveau){
  $first_ip = [
    "personnel" => "192.168.1.1",
    "L1" => "192.168.2.1",
    "L2" => "192.168.3.1",
    "L3"=> "192.168.4.1",
    "M1" => "192.168.5.1",
    "M2" => "192.168.9.1"
  ];
  $ip = $first_ip[$niveau];
  $conf_name = "conf/pc_$niveau.conf";

  $lines = explode("\n",file_get_contents($conf_name));
  foreach($lines as $line){
    if(preg_match("/fixed-address/", $line)){
      $ip = explode("fixed-address ",$line)[1];
      $ip = substr($ip,0,-1);
    }
  }
  $ip = long2ip(ip2long($ip)+1);
  return $ip;
}

function add_new_host($host, $ip){ // $host is an associative array
  $mac = $host['mac'];
  $nom = $host['nom'];
  $niveau = $host['niveau'];
  
  $conf_name = "conf/pc_$niveau.conf";

  $conf = fopen($conf_name, "a");  
  fwrite($conf, "\nhost $niveau-$nom {\n\thardware ethernet $mac;\n\tfixed-address $ip;\n}"); 
}

?>
