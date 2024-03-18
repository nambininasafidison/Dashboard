<?php

$host = "localhost";
$user = "tojo";
$password = "ramaroson";
$dbname = "mit";


$conn = mysqli_connect($host, $user, $password);
mysqli_select_db($conn, $dbname);

global $conn;

function set_pc_addr_in_db($ip, $id){
  global $conn;
  $update = mysqli_prepare($conn, "UPDATE Pc Set ip=? WHERE id_etudiant=?");
  mysqli_stmt_bind_param($update, "si", $ip, $id);
  mysqli_stmt_execute($update);
}

?>
