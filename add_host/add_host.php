<?php

include("add_host_func.php");
include("server.php");

global $conn;

if(!empty($_POST)){
  $host = [
    'nom' => $_POST['nom'],
    'mac' => $_POST['mac'],
    'niveau' => $_POST['niveau'],
    'num' => $_POST['num'],
    'id' => $_POST['id']
  ];

  foreach ($host as $key => $value) {
    echo "$key -> $value<br>";
  }
  
  if(find_host($host)){
    $nom = $host['nom'];
    die("$nom est déjà dans le réseau!!");
  }
  else{
    $ip = get_new_ip($host['niveau']);
    echo "Nouvelle addresse IP -> $ip<br>";
    add_new_host($host, $ip);
    $id_etudiant = $host['id'];
    add_ip_to_db($id_etudiant, $ip);
    echo "Addresse IP ajoutée à la base de données<br>";
  }
}

?>
