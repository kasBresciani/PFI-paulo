<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "cadastro";

$conn = new mysqli($servidor, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

$ano = 2019; // Ano da prova
$descricao = "Prova ENEM 2019"; // Descrição da prova
$pergunta = " A bula de um antibiótico infantil, fabricado na
forma de xarope, recomenda que sejam ministrados,
diariamente, no máximo 500 mg desse medicamento
para cada quilograma de massa do paciente. Um pediatra
prescreveu a dosagem máxima desse antibiótico para
ser ministrada diariamente a uma criança de 20 kg pelo
período de 5 dias. Esse medicamento pode ser comprado
em frascos de 10 mL, 50 mL, 100 mL, 250 mL e 500 mL.
Os pais dessa criança decidiram comprar a quantidade
exata de medicamento que precisará ser ministrada no
tratamento, evitando a sobra de medicamento. Considere
que 1 g desse medicamento ocupe um volume de 1 cm³.<br>
A capacidade do frasco, em mililitro, que esses pais
deverão comprar é"; // Pergunta da questão
$alternativas = json_encode(["A", "B", "C", "D", "E"]); // Alternativas em formato JSON
$resposta_correta = "B"; // Resposta correta

// Inserir a questão na tabela
$sql = "INSERT INTO questoes_enem (ano, descricao, pergunta, alternativas, resposta_correta) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("issss", $ano, $descricao, $pergunta, $alternativas, $resposta_correta);

if ($stmt->execute()) {
    echo "Questão inserida com sucesso!";
} else {
    echo "Erro ao inserir questão: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
