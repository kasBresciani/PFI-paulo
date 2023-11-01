<?php
session_start();
if (!isset($_SESSION['nome_usuario'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ENEM.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" type='text/css'>
    <title>ENEM</title>
    <link rel="icon" href="img/nova.png" />
</head>

<body>
    <nav>
        <div class="logo"><br>
            <a href="inicio.html"><img src="img/nova.png" height="80px" width="80px"></a>
        </div>
        <ul>
            <li><a href="inicio.html">Início</a></li>
            <li><a href="login.html">Login</a></li>
            <li><a href="ENEM.php">ENEM</a></li>
            <li><a href="tópicos.php">Tópicos</a></li>
            <li> <a href="sair.php"> Sair </a> </li>
        </ul>
    </nav>

    <body>
        <h1>Provas Passadas</h1><br>
        <div class="nav2">
            <ul>
                <li><a href="ENEM2019.html">ENEM 2019</a></li>
                <li><a href="ENEM2020.html">ENEM 2020</a></li>
                <li><a href="ENEM2021.html">ENEM 2021</a></li>
                <li><a href="ENEM2022.html">ENEM 2022</a></li>
            </ul>
        </div>
        <br><br> <br>
        <div class="texto">

            <h2 style="text-align: center; color: white;"> Aqui te ajudaremos
                a ter acesso à questões de ENEM anteriores mais recentes,<BR> onde aparecerá
                a resolução passo a passo
                após responder a cada pergunta </h2>

        </div>
        <br> <br> <br>

    </body>

</html>