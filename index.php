<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="shortcut icon" href="images/logoclarop.ico" type="image/x-icon">
    <title>Plantapp. - Home</title>
    <style>
        body {
            background-image: url(images/background.png); 
            background-attachment: fixed;
            background-size: cover;
            background-color: #d2dcd7;
             
        }
        .logoescuro {
            width: 70px;
            height: 70px;
        }
        .corpo{ 
            color: #284b40;
            font-size: 45px;
            display: flex;
            justify-content: center;
            flex-direction: row;
            align-items: center;
        }
    </style>
</head>
<body>
    <?php 
        include "includes/header.php";
    ?>
    <div class="corpo">
        <h1>Plantapp.</h1>
        <img class="logoescuro" src="images/logoescuro.png" alt="Logo da empresa">
    </div>
    <main class="texto">
        <p>Plantapp é um site dedicado à estruturação de calendários de plantio e monitoramento de plantas de acordo com as suas necessidades.</p> 
    </main>
    <li class="botoes"><a href="codes/usuario.php">Cadastre-se</a></li>
    <li class="botoes"><a href="codes/plantas.php">Cadastre suas plantas</a></li>
</body>
</html>