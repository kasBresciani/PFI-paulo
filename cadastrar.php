<?php 
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "cadastro";

$conn = new mysqli($servidor, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    // Verificar se o e-mail já existe no banco de dados
    $verificar_email = "SELECT email FROM usuarios WHERE email = ?";
    $stmt = $conn->prepare($verificar_email);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result_email = $stmt->get_result();

    if ($result_email->num_rows > 0) {
        // E-mail já está em uso
        echo '<script>alert("Este e-mail já está cadastrado. Tente outro.");</script>';
        echo '<script>window.location = "cadastro.html";</script>';
    } else {
        // Inserir dados no banco de dados
        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $nome, $email, $senha);

        if ($stmt->execute()) {
            // Registro bem-sucedido
            echo '<script>alert("Registro bem-sucedido. Agora você pode fazer login.");</script>';
            echo '<script>window.location = "login.html";</script>';
        } else {
            // Erro no registro
            echo '<script>alert("Erro no registro. Tente novamente.");</script>';
            echo '<script>window.location = "cadastro.html";</script>';
        }
    }
}

$conn->close();
?>
