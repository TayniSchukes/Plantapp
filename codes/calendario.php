<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="shortcut icon" href="../images/logoclarop.ico" type="image/x-icon">
    <title>Plantapp. - Calendário</title>
    <style>
        body {
            background-color: #d2dcd7;
        }
        .titulo {
            text-align: center;
        }
        .plantas fieldset {
            text-align: center;
            width: 500px;
            height: auto;
            background-color: #76a490;
            border-radius: 25px;
            border-style: none;
            margin-left: auto;
            margin-right: auto;
            position: relative;
            padding: 20px;
        }
    </style>
</head>
<body>
    <?php
        include "../includes/header.php";
    ?>
    <div class="titulo">
        <h1>Calendário de Plantio</h1>
        <h2>Preencha seu usuário e senha para acompanhar seu calendário</h2>
    </div>
    <form action="calendario_validacao.php" class="plantas" method="post">
        <fieldset>
            <label><input type="text" name="nome_usuario" placeholder="Insira seu nome de usuário"></label>
            <label><input type="password" name="senha" placeholder="Insira a sua senha"></label>
            <input type="submit">
        </fieldset>
    </form>
</body>
</html>