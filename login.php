<?php
session_start();

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "cadastro";

$conn = new mysqli($servidor, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Verificar as credenciais no banco de dados com declaração preparada
    $stmt = $conn->prepare("SELECT id, nome, senha FROM usuarios WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($senha, $row['senha'])) {
            // Login bem-sucedido
            $_SESSION['nome_usuario'] = $row['nome'];
            header("Location: inicio.html");
            exit();
        } else {
            // Senha incorreta
            echo '<script>alert("Senha incorreta.");</script>';
            echo '<script>window.location = "login.html";</script>';
        }
    } else {
        // Usuário não encontrado
        echo '<script>alert("Usuário não encontrado. Registre-se primeiro.");</script>';
        echo '<script>window.location = "login.html";</script>';
    }
    }

$conn->close();
?>
