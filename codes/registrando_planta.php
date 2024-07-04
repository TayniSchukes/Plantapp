<?php
$conn = mysqli_connect('localhost', 'root', 'Fajota1428!', 'mydb'); 
$oadubo = substr($_POST["diferente"], 0, 1);

$sql = 'INSERT INTO planta(planta_nome, frequencia_adubacao, adubo_idadubo, ultima_aplicacao, quantidade, usuario_planta) values("' . $_POST["nome"] . '","' . $_POST["frequencia_adubacao"] . '","' . $oadubo . '","' . $_POST["ultima_aplicacao"] . '","' . $_POST["quantidade"] . '","' . $_POST["nome_usuario"] . '")';
$planta = $_POST["nome"];
$quantas = $_POST["quantidade"];
$aplicacao = $_POST["ultima_aplicacao"];
$ousuario = $_POST["nome_usuario"];
$frequencia = $_POST["frequencia_adubacao"];
$asenha = $_POST["senha"];
$sql2 = "SELECT * from planta WHERE planta_nome = '$planta';";  
$sql3 = "SELECT nome from usuario WHERE nome = '$ousuario';";
$sql4 = "SELECT nome from usuario WHERE nome = '$ousuario' and senha = '$asenha';";
$sql5 = "SELECT * from planta WHERE usuario_planta = '$ousuario';";
//SELECT * from usuario WHERE nome = '$ousuario' and senha = '$asenha'; Isso apagando a linha acima
$result2 = $conn->query($sql2);
$result3 = $conn->query($sql3);
$result4 = $conn->query($sql4);
$result5 = $conn->query($sql5);

if ($result4->num_rows > 0) {
    if ($planta && $quantas && $aplicacao && $frequencia) {  
        if ($conn->query($sql) === TRUE) { ?>
            <!DOCTYPE html>
            <html lang="pt-br">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" type="text/css" href="../css/style.css">
                <link rel="shortcut icon" href="../images/logoclarop.ico" type="image/x-icon">
                <title>Planta Cadastrada</title>
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
                <?php 
                    $conn = mysqli_connect('localhost', 'root', 'Fajota1428!', 'mydb'); 
                    $sql = "SELECT * FROM mydb.adubo";
                    $result = $conn->query($sql);
                    include "../includes/header.php";
                ?>
                <main>
                    <h1>Planta Cadastrada!</h1>
                    <button><a href="../index.php">Voltar</a></button><br>
                    <button><a href="plantas.php">Cadastrar outra planta</a></button>
                </main>
            </body>
            </html>
        <?php } elseif ($result2->num_rows > 0 && $result5->num_rows > 0){ ?>
            <!DOCTYPE html>
            <html lang="pt-br">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" type="text/css" href="../css/style.css">
                <link rel="shortcut icon" href="../images/logoclarop.ico" type="image/x-icon">
                <title>Planta Já Cadastrada</title>
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
                        height: 320px;
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
                <?php 
                        $conn = mysqli_connect('localhost', 'root', 'Fajota1428!', 'mydb'); 
                        $sql = "SELECT * FROM mydb.adubo";
                        $result = $conn->query($sql);
                        include "../includes/header.php";
                ?>                
                <main>
                    <h1>Esta planta já está registrada em seu calendário!</h1><br>
                    <button><a href="../index.php">Voltar</a></button><br><br>
                    <button><a href="plantas.php">Cadastrar uma planta diferente</a></button>
                </main>
            </body>
            </html>
        <?php } else {
             echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else { ?>
        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" type="text/css" href="../css/style.css">
            <link rel="shortcut icon" href="../images/logoclarop.ico" type="image/x-icon">
            <title>Preenha os campos</title>
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
            <?php 
                $conn = mysqli_connect('localhost', 'root', 'Fajota1428!', 'mydb'); 
                $sql = "SELECT * FROM mydb.adubo";
                $result = $conn->query($sql);
                include "../includes/header.php";
            ?>
            <main>
                <h1>Preencha todos os campos para cadastrar a planta!</h1>
                <button><a href="plantas.php">Voltar</a></button><br>
            </main>
            </body>
        </html>
    <?php }
} else { ?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="shortcut icon" href="../images/logoclarop.ico" type="image/x-icon">
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
        <?php 
            $conn = mysqli_connect('localhost', 'root', 'Fajota1428!', 'mydb'); 
            $sql = "SELECT * FROM mydb.adubo";
            $result = $conn->query($sql);
            include "../includes/header.php";
        ?>
        <main>
            <h1>Sua senha ou usuário estão incorretos!</h1>
            <button><a href="plantas.php">Voltar</a></button><br><br>
            <button><a href="usuario.php">Cadastre-se</a></button>
        </main>
    </body>
    </html>
<?php } ?> 