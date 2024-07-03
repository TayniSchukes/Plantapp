<?php
$conn = mysqli_connect('localhost', 'root', 'Fajota1428!', 'mydb');

$usuario = $_POST["nome_usuario"];
$senha = $_POST["senha"];

$sql = "SELECT * from usuario WHERE nome = '$usuario' and senha = '$senha';";
$sql2 = "SELECT planta.*, adubo.nome AS nome_adubo FROM planta INNER JOIN adubo ON planta.adubo_idadubo = adubo.idadubo WHERE planta.usuario_planta = '$usuario';";

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
                        margin-top: 50px;
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
                    h1 {
                        text-align: center;
                    }
                </style>
            </head>
            <body>
                <header>
                    <img class="logoclaro" src="../images/logoclaro.png" alt="Logo da empresa">
                    <nav>
                        <ul>
                            <li><a href="../index.php">Home</a></li>
                            <li><a href="plantas.php">Plantas</a></li>
                            <li><a href="calendario.php">Calendário</a></li>
                            <li><a href="sobre/index.php">Sobre</a></li>
                        </ul>
                    </nav>
                </header>
                <h1>Suas plantas e controle:</h1>
                <main>
                    <?php echo "<b>Usuário: $usuario </b><br><br>"; 
                    while ($planta = mysqli_fetch_assoc($result2)) { ?>
                        <form action="atualizar_adubacao.php" method="post"> <?php
                            $plantaNome = $planta['planta_nome'];
                            $plantaUsuario = $planta['usuario_planta'];
                            $ultimaAplicacao = strtotime($planta['ultima_aplicacao']);
                            $aplicacoesSemanais = $planta['frequencia_adubacao'];
                            $dias = 7 / $aplicacoesSemanais;
                            $proximaAdubacao = strtotime("+$dias days", $ultimaAplicacao);
                            $dataProximaAdubacao = date('d/m/Y', $proximaAdubacao);
                        
                            echo "Nome da planta: " . $planta['planta_nome'] . "<br>";
                            echo "Próxima adubação: $dataProximaAdubacao <br>";
                            echo "Adubo: " . $planta['nome_adubo'] . "<br>";
                            echo "<button type='submit'>Adubar</button> <br><br>";
                            echo "<input type='hidden' name='planta_nome' value='$plantaNome'>";
                            echo "<input type='hidden' name='planta_usuario' value='$plantaUsuario'>"; 
                        ?> </form>
                    <?php }?>
                </main>
            </body>
            </html>
    <?php } elseif ($numPlantas == 0) { ?>
        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" type="text/css" href="../css/style.css">
            <title>Nenhuma Planta Cadastrada</title>
            <style>
                body {
                    background-color: #d2dcd7;
                    background-image: url(../images/background.png); 
                    background-attachment: fixed;
                    background-size: cover;
                    margin: 0;
                    padding: 0;
                }
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
                <h1>Nenhuma planta cadastrada!</h1>
                <button><a href="../index.html">Voltar</a></button><br><br>
                <button><a href="plantas.php">Cadastre suas plantas</a></button>
            </main>
        </body>
        </html>
    <?php } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <title>Senha Incorreta</title>
        <style>
            body {
                background-color: #d2dcd7;
                background-image: url(../images/background.png); 
                background-attachment: fixed;
                background-size: cover;
                margin: 0;
                padding: 0;
            }
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
            <h1>Sua senha ou usuário estão incorretos!</h1>
            <button><a href="calendario.php">Voltar</a></button><br><br>
            <button><a href="usuario.php">Cadastre-se</a></button>
        </main>
    </body>
    </html>
<?php } ?>