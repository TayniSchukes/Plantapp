<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Plantapp. - Usuário</title>
    <style>
        body {
            background-color: #d2dcd7;
        }
        fieldset {
            position: absolute;
            text-align: center;
            width: 250px;
            height: 320px;
            background-color: #76a490;
            border-radius: 25px;
            border-style: none;
            top: 22%;
            bottom: 150px;
            margin-left: 38%;
        }
        fieldset input {
            background-color: #76a490;
            border: 1px solid #d2dcd7;
            width: 200px;
            height: 30px;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        fieldset ::-webkit-input-placeholder {
            color: #423f32;
            text-align: center;
        }
        fieldset legend {
            bottom: 10px;
        }
        .fundo {
            background-color: #284b40;
            color: #284b40;
            width: 250px;
            height: 320px;
            border-radius: 25px;
            margin-left: 37%;
        }
        .titulo {
            margin-left: 44%; 
        }
    </style>
</head>
<body>
    <header>
        <img class="logoclaro" src="../images/logoclaro.png" alt="Logo da empresa">
        <nav>
            <ul>
                <li><a href="../index.html">Home</a></li>
                <li><a href="plantas.html">Plantas</a></li>
                <li><a href="sensor.html">Sensores</a></li>
                <li><a href="calendario.html">Calendário</a></li>
                <li><a href="sobre.html">Sobre</a></li>
            </ul>
        </nav>
    </header>
    <div class="titulo">
        <h1>Cadastro</h1>
    </div>
    <div class="fundo">.</div>
    <form action="">
        <fieldset>
            <label><input type="text" placeholder="Nome"></label><br>
            <label><input type="text" placeholder="ID (ex:01234)"></label><br>
            <label><input type="password" placeholder="Senha"></label><br>
            <label><input type="password" placeholder="Confirme sua senha"></label>
        </fieldset>
    </form>
    <div class="botoes" style="margin-left: 43%;bottom: 30%; position: absolute;">
        <li><a href="confirmado.html">Confirmar</a></li>
    </div>
</body>
</html>