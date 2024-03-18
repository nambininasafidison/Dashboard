<?php

include("modify_host_func.php");
include("server.php");

global $conn;


if( !empty($_POST) ){
  extract($_POST);

  $ancien_nom = "tojotiana";

  # if the host is not already in the network
  if( get_host_addr($nom, $niveau) != NULL ){
    modify_host($ancien_nom, $niveau, $nom, $ip, $mac);
    set_pc_addr_in_db($ip, $id);
    echo "Machine modifiée avec succès !!<br>";
  }
  else{
    echo "Host $nom not in network !!<br>";
  }

}

mysqli_close($conn);

?>

