<?php
$conn = mysqli_connect('localhost', 'root', 'Fajota1428!', 'mydb');

$usuario = $_POST["nome_usuario"];
$senha = $_POST["senha"];

$sql = "SELECT * from usuario WHERE nome = '$usuario' and senha = '$senha'";
$sql = "SELECT * from plantas WHERE nome = $usuario";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
}