<?php
$conn = mysqli_connect('localhost', 'root', 'Fajota1428!', 'mydb');

$usuario = $_POST["nome_usuario"];
$senha = $_POST["senha"];

$sql = "SELECT * from usuario WHERE nome = '$usuario' and senha = '$senha';";
$sql2 = "SELECT * from planta WHERE usuario_planta = '$usuario';";

$result = $conn->query($sql);
$result2 = $conn->query($sql2);

if ($result->num_rows > 0) {
    $numPlantas = $result2->num_rows;
    if ($numPlantas > 0){ ?>
        <!DOCTYPE html>
            <html lang="pt-br">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" type="text/css" href="../css/style.css">
                <title>Calendário</title>
                <style>
                    main {
                        background-color: #76a490;
                        width: 400px;
                        text-align: center;
                        margin-left: auto;
                        margin-right: auto;
                        margin-top: 100px;
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
                    <h1>Suas plantas e controle:</h1>
                    <?php echo "Usuário: $usuario <br><br>"; 
                    while ($planta = mysqli_fetch_assoc($result2)) {
                        $ultimaAplicacao = strtotime($planta['ultima_aplicacao']);
                        $aplicacoesSemanais = $planta['frequencia_adubacao'];
                        $proximaAdubacao = strtotime("+1 week", $ultimaAplicacao);
                        $dataProximaAdubacao = date('Y-m-d', $proximaAdubacao);
            
                        echo "Nome da planta: " . $planta['planta_nome'] . "<br>";
                        echo "Próxima adubação: $dataProximaAdubacao . com o adubo . <br><br>";
                    }?>
                </main>
            </body>
            </html>
    <?php } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} ?>