<?php
$conn = mysqli_connect('localhost', 'root', 'Fajota1428!', 'mydb');

$plantaNome = $_POST['planta_nome'];
$plantaUsuario = $_POST['planta_usuario'];
$dataAtual = date('Y-m-d');
$sql = "UPDATE planta SET ultima_aplicacao = '$dataAtual' WHERE planta_nome = '$plantaNome' AND usuario_planta = '$plantaUsuario'";
if ($conn->query($sql) === true) { ?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <title>Atualizado adubação</title>
        <style>
            main {
                background-color: #76a490;
                width: 400px;
                height: 200px;
                text-align: center;
                margin-left: auto;
                margin-right: auto;
                border-radius: 20px;
            
            }
            button {
                background-color: #284b40;
                color: #fff;
                border-radius: 15px;
                width: 150px;
                height: 35px;
                margin-top: 8%;
                border: none;
            }
            button a{
                text-decoration: none;
                color: white;
            }
            #foto {
                width: 50px;
            }
        </style>
    </head>
    <body>
        <header>
            <img class="logoclaro" src="../images/logoclaro.png" alt="Logo da empresa">
            <nav>
                <ul>
                    <li><a href="../index.html">Home</a></li>
                    <li><a href="plantas.php">Plantas</a></li>
                    <li><a href="calendario.html">Calendário</a></li>
                    <li><a href="sobre.html">Sobre</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <h1>Planta adubada!</h1>
            <img id="foto" src="../images/logoclaro.png" alt="Logo da Plantapp"><br>
            <button><a href="calendario.html">Voltar as plantas</a></button><br>
        </main>
    </body>
    </html>
<?php } else {
    echo "Erro ao atualizar a data de última aplicação: " . $conn->error;
}
?>