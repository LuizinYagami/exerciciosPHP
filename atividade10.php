<?php
$servername = "localhost";
$database = "databasename";
$username = "username";
$password = "password";
// Conexão
$conn = mysqli_connect($servername, $username,
$password,database);
// Checar a conexão
if (!$conn) {
die("Conexão deu ruim falhou : " . mysqli_connect_error());
}
echo "Conectado com sucesso!!";
mysqli_close($conn);
?>