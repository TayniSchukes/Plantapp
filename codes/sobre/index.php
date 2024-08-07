<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <title>Plantapp. - Sobre</title>
    <style>
        body {
            background-color: #d2dcd7;
            background-image: url(../../images/background.png); 
            background-attachment: fixed;
            background-size: cover;
            padding: 0;
        }
        footer {
            display: inline-block;
            width: 100%;
            text-align: center;
            background-color: #76a490;            
            bottom: 0;
            font-size: 10px;
            position: absolute;
        }
        .titulo1 {
            text-align: center; 
        }
        .foto {
            width: 20%;
            height: 20%;
        }
        .principal {
            background-color: #76a490;
            text-align: center;
            font-size: 19px;
            border-radius: 25px;
            width: 50%;
            height: auto;
            margin-left: auto;
            margin-right: auto;
            padding: 10px;
        }
    </style>
</head>
<body>
    <?php
        include "../../includes/header.php";
    ?>
    <h1 class="titulo1">Como funciona?</h1>
    <div class="principal">
        <p>O Plantapp é responsável por gerenciar suas plantas e deixar que o seu cuidado seja mais automatizado. Nosso objetivo é que os dados para o seu cultivo estejam reunidos em um só lugar. </p>
        <img class="foto" src="../../images/logoescuro.png" alt="Foto do sensor da empresa">
        <p>Montamos um calendário de cultivo especialmente com as suas plantas e adubos, para que o seu momento com as plantas seja apenas relaxamento!</p>
    </div>
    <footer>
        <p>
        Este site foi desenvolvido por Kelly Cristiane Petry, Estephany Kiana Brito da Silva e Tayni Cristina Schukes. 
        Mais informações em: <address>plantapp@gmail.com</address></p>
    </footer>
</html>