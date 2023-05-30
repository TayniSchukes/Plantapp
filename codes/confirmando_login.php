<?php
    $conn = mysqli_connect('localhost', 'root', 'Fajota1428!', 'mydb');
    $nome = $_POST["nome_usuario"];
    $senha = $_POST["senha"];

    $sql="SELECT * from usuario WHERE nome = '$nome' AND senha = '$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) { ?>
        <!DOCTYPE html>
            <html lang="pt-br">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" type="text/css" href="../css/style.css">
                <title>Login Confirmado</title>
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
                            <li><a href="calendario.html">Calendário</a></li>
                            <li><a href="sobre.html">Sobre</a></li>
                        </ul>
                    </nav>
                </header>
                <main>
                    <h1>Login Confirmado!</h1>
                    <button><a href="plantas.php">Cadastrar planta</a></button><br>
                    <button><a href="../index.html">Voltar</a></button>
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
                <title>Login Não Confirmado</title>
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
                            <li><a href="calendario.html">Calendário</a></li>
                            <li><a href="sobre.html">Sobre</a></li>
                        </ul>
                    </nav>
                </header>
                <main>
                    <h1>Cadastre-se!</h1>
                    <button><a href="usuario.php">Cadastro</a></button><br>
                </main>
            </body>
        </html>
    <?php } ?>