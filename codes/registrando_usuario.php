<?php
    $conn = mysqli_connect('localhost', 'root', 'Fajota1428!', 'mydb');

    $sql = 'INSERT INTO usuario(nome, senha, email) values("' . $_POST["nome_usuario"] . '","' . $_POST["senha"] . '","' . $_POST["email"] . '")';
    $nome = $_POST["nome_usuario"];
    $senha = $_POST["senha"];
    $email = $_POST["email"];
    $confirma = $_POST["confirma_senha"];
    $sql2 = "SELECT * from usuario WHERE nome = '$nome'";
    $result = $conn->query($sql2);

    if ($nome && $senha && $email && $confirma) {
        if ($senha == $confirma) {
            if ($conn->query($sql) === TRUE) {?>
            <!DOCTYPE html>
            <html lang="pt-br">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" type="text/css" href="../css/style.css">
                <link rel="shortcut icon" href="../images/logoclarop.ico" type="image/x-icon">
                <title>Cadastro Confirmado</title>
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
                    <h1>Usuário Cadastrado!</h1>
                    <button><a href="../index.php">Voltar</a></button><br>
                </main>
            </body>
            </html>
            <?php } elseif ($result->num_rows > 0) { ?>
            <!DOCTYPE html>
            <html lang="pt-br">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" type="text/css" href="../css/style.css">
                <link rel="shortcut icon" href="../images/logoclarop.ico" type="image/x-icon">
                <title>Usuário Já Existe</title>
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
                    <h1>Este usuário já foi cadastrado!</h1>
                    <button><a href="usuario.php">Voltar</a></button><br>
                </main>
            </body>
            </html>
            <?php } elseif ($conn->query($sql) === FALSE) { ?>
            <!DOCTYPE html>
            <html lang="pt-br">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" type="text/css" href="../css/style.css">
                <link rel="shortcut icon" href="../images/logoclarop.ico" type="image/x-icon">
                <title>Erro</title>
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
                    <h1>Erro encontrado!</h1>
                    <p>Tente novamente ou contate a equipe de TI com os erros:</p>
                    <?php echo "Error: " . $sql . "<br>" . $conn->error; ?>
                    <button><a href="usuario.php">Voltar</a></button>
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
                <title>Cadastro Confirmado</title>
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
                    <h1>O campo senha e confirma senha não coincidem</h1>
                    <button><a href="usuario.php">Voltar</a></button><br>
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
                <title>Cadastro Confirmado</title>
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
                    <h1>Preencha todos os campos!</h1>
                    <button><a href="usuario.php">Voltar</a></button><br>
                </main>
            </body>
            </html>
    <?php } ?>