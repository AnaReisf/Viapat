
<?php
 require_once "conexao.php"; 
 session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = md5($_POST['password']); // Gera o hash MD5 da senha inserida pelo usuário

    // Atualizando o SQL para buscar na tabela correta e validar as credenciais
    $sql = "SELECT * FROM login WHERE usuario = :usuario AND senha = :senha";
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(":usuario", $username);
    $stmt->bindValue(":senha", $password);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        // Login bem-sucedido
        $_SESSION['admin'] = $username;
        header("Location: index.php");
        exit;
    } else {
        // Credenciais inválidas
        $error = "Usuário ou senha inválidos.";
    }
}
include "conexao.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = md5($_POST['password']); // Gera o hash MD5 da senha inserida pelo usuário

    // Atualizando o SQL para buscar na tabela correta e validar as credenciais
    $sql = "SELECT * FROM login WHERE usuario = :usuario AND senha = :senha";
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(":usuario", $username);
    $stmt->bindValue(":senha", $password);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        // Login bem-sucedido
        $_SESSION['admin'] = $username;
        header("Location: index.php");
        exit;
    } else {
        // Credenciais inválidas
        $error = "Usuário ou senha inválidos.";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">

    <div class="card shadow-lg" style="width: 33rem;">
        <div class="card-body">
            <img src="logo.jpg" alt="" style="width: 30rem; height: 10rem" >
            <h3 class="card-title text-center mb-4">Inicio</h3>

            <form action="inicio.php" method="POST">
            <div class="formspace inputtextlogin">
                            <label for="username">Nome de usuário:</label><br>
                            <input type="text" id="username" name="username" required>
                        </div>
                        <div class="formspace inputtextlogin">
                            <label for="password">Senha:</label><br>
                            <input type="password" id="password" name="password" required>
                        </div>
                        <div class="bottomform">
                            <span class="esquecisenha">
                                <a href="none">esqueci minha senha</a>
                            </span>
                            <br>
                            <span class="formspace enviarbotao">
                                <input type="submit" value="Entrar">
                            </span>
                        </div>
              </form>

        </div>
    </div>

    <!-- Scripts do Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </body>
</html>
