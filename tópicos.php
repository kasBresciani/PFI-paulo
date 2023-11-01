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
    <link rel="stylesheet" href="tópicos.css">
    <link rel="stylesheet" href="top.php">
    <title>Tópicos</title>
    <link rel="icon" href="img/nova.png" />
</head>

<body>
    <nav>
        <div class="logo">
            <br>
            <a href="inicio.html"><img src="img/nova.png" height="80px" width="80px"></a>
        </div>
        <ul>
            <li> <a href="inicio.html"> Início  </a> </li>
            <li> <a href="login.html"> Login  </a> </li>
            <li> <a href="ENEM.php"> ENEM </a> </li>
            <li> <a href="tópicos.php"> Tópicos </a> </li>
            <li> <a href="sair.php"> Sair </a> </li>
            
        </ul>
    </nav>
    <div class="nav2">
        <ul>
            <li> <a href="algebra.html"> Álgebra </a> </li>
            <li> <a href="geometria.html"> Geometria </a> </li>
            <li> <a href="trigonometria.html"> Trigonometria </a> </li>
            <li> <a href="aritmetica.html"> Aritmética </a> </li>
            <li> <a href="estatistica.html"> Estatística </a> </li>



        </ul>
    </div>
    <main>
        <section id="algebra">
            <h2>INTRODUÇÃO</h2>

            <p> &nbsp; &nbsp; &nbsp; A matemática é uma disciplina que se desdobra em várias áreas distintas, cada uma com sua própria
                aplicação e importância. Entre essas áreas, destacam-se a álgebra, a trigonometria, a aritmética, a
                estatística e a geometria. Cada uma delas desempenha um papel fundamental na resolução de problemas e na
                compreensão das relações matemáticas que permeiam nossa vida cotidiana e o mundo ao nosso redor.

                A álgebra nos permite representar situações complexas por meio de equações e fórmulas, abrindo caminho
                para a resolução de problemas diversos em campos como física, engenharia e economia. A trigonometria,
                por sua vez, nos ajuda a compreender ângulos e relações trigonométricas, sendo essencial para a
                descrição de fenômenos periódicos e a navegação.

                A aritmética é a base sólida da matemática, sendo a arte de contar e realizar operações básicas, sendo
                vital em nosso cotidiano para tarefas como calcular despesas, medir ingredientes em receitas e muito
                mais. A estatística entra em cena para organizar, analisar e interpretar dados, sendo crucial em
                pesquisas, planejamento e tomada de decisões informadas.

                Por fim, a geometria lida com formas, tamanhos e propriedades espaciais, ajudando a entender as relações
                entre objetos no espaço tridimensional e fornecendo a base para a arquitetura, design e diversas
                aplicações científicas. Cada um desses campos desempenha um papel vital na nossa compreensão do mundo e
                no avanço da ciência e da tecnologia.</p>
    </main>
</body>

</html>