<?php

$host = "localhost";
$user = "tojo";
$password = "ramaroson";
$dbname = "mit";

global $conn;
$conn = mysqli_connect($host, $user, $password);
if(mysqli_connect_error()) die("Error lors de la connection au serveur!!\n");

mysqli_select_db($conn, $dbname);

# Ajouter une addresse IP à la machine dans la base de données
function add_ip_to_db($id, $ip){
  global $conn;

  $update_ip = mysqli_prepare($conn,"UPDATE Pc SET ip=? WHERE id_etudiant=?");
  mysqli_stmt_bind_param($update_ip, 'si', $ip, $id);
  mysqli_execute($update_ip);

}

?>
