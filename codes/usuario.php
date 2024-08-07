<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="shortcut icon" href="../images/logoclarop.ico" type="image/x-icon">
    <title>Plantapp. - Cadastro</title>
    <style>
        body {
            background-color: #d2dcd7;
        }
        fieldset {            
            text-align: center;
            max-width: 250px;
            width: 90%;
            height: auto;
            background-color: #76a490;
            border-radius: 25px;
            border-style: none;          
            margin: 0 auto;
            margin-top: 3%;
            padding: 20px;
            position: relative;
            z-index: 1;
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
            max-width: 250px;
            width: 90%;
            height: 320px;
            border-radius: 25px;
            z-index: 0;
            margin: 0 auto;
            left: calc(50% - 180px);
            position: absolute;
        }
        .titulo{
            text-align: center;
        }
    </style>
</head>
<body>
    <?php 
        $conn = mysqli_connect('localhost', 'root', 'Fajota1428!', 'mydb'); 
        $sql = "SELECT * FROM mydb.usuario";
        $result = $conn->query($sql);
        include "../includes/header.php";
    ?>
    <h1 class="titulo">Cadastro</h1>
    <div class="fundo">.</div>
    <form action="registrando_usuario.php" class="usuario" method="post">
        <fieldset>
            <label><input type="text" name="nome_usuario" placeholder="Nome"></label><br>
            <label><input type="e-mail" name="email" placeholder="E-mail"></label>
            <label><input type="password" name="senha" placeholder="Senha"></label><br>
            <label><input type="password" name="confirma_senha" placeholder="Confirme sua senha"></label>
            <input type="submit">
        </fieldset>
    </form>
</body>
</html>