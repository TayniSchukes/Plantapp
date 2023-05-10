<?php
$conn = mysqli_connect('localhost', 'root', 'Fajota1428!', 'mydb'); 

$sql = 'INSERT INTO planta(nome, frequencia_adubacao, ultima_aplicacao, quantidade) values("' . $_POST["nome"] . '","' . $_POST["frequencia_adubacao"] . '","' . $_POST["ultima_aplicacao"] . '","' . $_POST["quantidade"] . '")';

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>