<?php
$server = "localhost";
$user = "root";
$pass = "";
$bd = "test";

if ($conn = mysqli_connect($server, $user, $pass, $bd)) {
  echo "Conectado";

} else {
  echo "Erro";
}
?>