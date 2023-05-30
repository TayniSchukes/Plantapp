<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Plantapp. - Login</title>
    <style>
        body {
            background-color: #d2dcd7;
        }
        fieldset {
            position: absolute;
            text-align: center;
            width: 250px;
            height: 200px;
            background-color: #76a490;
            border-radius: 25px;
            border-style: none;
            top: 24%;
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
            height: 200px;
            border-radius: 25px;
            margin-left: 37%;
        }
        .titulo {
            text-align: center;
            padding: 5px;
        }
    </style>
</head>
<body>
    <?php 
        $conn = mysqli_connect('localhost', 'root', 'Fajota1428!', 'mydb'); 
        $sql = "SELECT * FROM mydb.usuario";
        $result = $conn->query($sql);
    ?>
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
    <h1 class="titulo">Faça login:</h1>
    <div class="fundo">.</div>
    <form action="confirmando_login.php" class="usuario" method="post">
        <fieldset>
            <label><input type="text" name="nome_usuario" placeholder="Nome"></label><br>
            <label><input type="password" name="senha" placeholder="Senha"></label><br>
            <input type="submit">
        </fieldset>
    </form>
</body>
</html>