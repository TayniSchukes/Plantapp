<?php
$conn = mysqli_connect('localhost', 'root', 'Fajota1428!', 'mydb'); 
$oadubo = substr($_POST["diferente"], 0, 1);

$sql = 'INSERT INTO planta(nome, frequencia_adubacao, adubo_idadubo, ultima_aplicacao, quantidade) values("' . $_POST["nome"] . '","' . $_POST["frequencia_adubacao"] . '","' . $oadubo . '","' . $_POST["ultima_aplicacao"] . '","' . $_POST["quantidade"] . '")';
$planta = $_POST["nome"];
$sql2 = "SELECT * from planta WHERE nome = '$planta'";
$result = $conn->query($sql2);

if ($conn->query($sql) === TRUE) {  
    if ($planta && $oadubo && $quantas && $adubacao && $aplicacao) {?>
        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" type="text/css" href="../css/style.css">
            <title>Cadastro Confirmado</title>
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
            </style>
        </head>
        <body>
            <header>
                <img class="logoclaro" src="../images/logoclaro.png" alt="Logo da empresa">
                <nav>
                    <ul>
                        <li><a href="../index.html">Home</a></li>
                        <li><a href="plantas.php">Plantas</a></li>
                        <li><a href="sensor.html">Sensores</a></li>
                        <li><a href="calendario.html">Calendário</a></li>
                        <li><a href="sobre.html">Sobre</a></li>
                    </ul>
                </nav>
            </header>
            <main>
                <h1>Planta Cadastrada!</h1>
                <button><a href="../index.html">Voltar</a></button><br>
                <button><a href="planta.php">Cadastrar outra planta</a></button>
            </main>
        </body>
        </html>
    <?php
    } else { ?>
        <!DOCTYPE html>
            <html lang="pt-br">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" type="text/css" href="../css/style.css">
                <title>Cadastro Confirmado</title>
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
                </style>
            </head>
            <body>
                <header>
                    <img class="logoclaro" src="../images/logoclaro.png" alt="Logo da empresa">
                    <nav>
                        <ul>
                            <li><a href="../index.html">Home</a></li>
                            <li><a href="plantas.php">Plantas</a></li>
                            <li><a href="sensor.html">Sensores</a></li>
                            <li><a href="calendario.html">Calendário</a></li>
                            <li><a href="sobre.html">Sobre</a></li>
                        </ul>
                    </nav>
                </header>
                <main>
                    <h1>Preencha todos os campos para cadastrar a planta!</h1>
                    <button><a href="plantas.php">Voltar</a></button><br>
                </main>
            </body>
            </html>
    <?php } 
} elseif ($result->num_rows > 0){ ?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Cadastro Confirmado</title>
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
    </style>
        </head>
        <body>
            <header>
                <img class="logoclaro" src="../images/logoclaro.png" alt="Logo da empresa">
                <nav>
                    <ul>
                        <li><a href="../index.html">Home</a></li>
                        <li><a href="plantas.php">Plantas</a></li>
                        <li><a href="sensor.html">Sensores</a></li>
                        <li><a href="calendario.html">Calendário</a></li>
                        <li><a href="sobre.html">Sobre</a></li>
                    </ul>
                </nav>
            </header>
            <main>
                <h1>Planta já Cadastrada!</h1>
                <button><a href="../index.html">Voltar</a></button><br>
                <button><a href="planta.php">Cadastrar uma planta diferente</a></button>
            </main>
        </body>
        </html>
<?php } else { ?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <title>Cadastro Confirmado</title>
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
        </style>
    </head>
    <body>
        <header>
            <img class="logoclaro" src="../images/logoclaro.png" alt="Logo da empresa">
            <nav>
                <ul>
                    <li><a href="../index.html">Home</a></li>
                    <li><a href="plantas.php">Plantas</a></li>
                    <li><a href="sensor.html">Sensores</a></li>
                    <li><a href="calendario.html">Calendário</a></li>
                    <li><a href="sobre.html">Sobre</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <h1>Erro encontrado!</h1>
            <p>Tente novamente ou contate a equipe de TI com os erros:</p>
            <?php echo "Error: " . $sql . "<br>" . $conn->error; ?>
            <button><a href="planta.php">Voltar</a></button>
        </main>
    </body>
    </html>
<?php } ?>