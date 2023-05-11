<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, max-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Plantapp. - Plantas</title>
    <style>
        body {
            background-color: #d2dcd7;
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
        .plantas fieldset {
            text-align: center;
            width: 500px;
            height: 270px;
            background-color: #76a490;
            border-radius: 25px;
            border-style: none;
            margin-left: auto;
            margin-right: auto;
            position: relative;
            margin-top: -19%;
        }
        select {
            background-color: #76a490;
            border: 1px solid #d2dcd7;
            width: 200px;
            height: 34px;
        }
        .fundo {
            background-color: #284b40;
            color: #284b40;
            width: 500px;
            height: 270px;
            border-radius: 25px;
            z-index: -1;
            margin-left: 29%;
            position: relative;
        }
        .titulo1 {
            text-align: center;
        }
        section {
            background-color: #284b40;
            text-align: center;
            width: 500px;
            margin-left: auto;
            margin-right: auto;
            border-radius: 25px;
            color: #fff;
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
    ?>
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
    <div class="titulo1">
        <h1>Cadastre suas plantas</h1>
    </div>
    <div class="fundo">.</div>
    <form action="registrando_planta.php" class="plantas" method="post">
        <fieldset>
            <label><input type="text" name="nome" placeholder="Espécie da planta"></label>
            <label><input type="number" name="quantidade" placeholder="Quantidade"></label>
            <label>
                <select name="tipoDeAdubo" id="adubo_idadubo">
                    <option value="" disabled selected>Selecione um adubo:</option>
                    <?php
                        while ($row = $result->fetch_assoc()) { ?>
                            <option> <?php echo $row["idadubo"] . "-" . $row["nome"] ?> </option> <?php } ?>
                </select>
            </label>
            <label><input type="number" name="frequencia_adubacao" placeholder="Frequência"></label><br>
            <label>Última aplicação: <input type="date" name="ultima_aplicacao"></label><br>
            <input type="submit">
        </fieldset>
    </form>
    <section>
        <h2>Lembre-se</h2>
        <p>1 - Os adubos já são cadastrados, você deve selecionar qual é o que usa em sua planta; <br>
        2 - Caso você não use adubos nas suas plantas, é só deixar a seleção em branco, assim como a frequência;<br>
        3 - A frequência refere-se à quantas vezes a planta é adubada por semana.</p>
    </section>
</body>
</html>