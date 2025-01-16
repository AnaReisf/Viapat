<?php
require_once 'usuarios.php';
$u = new Usuario;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login da Conta</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <div class="scroll-area" id="scroll-area">
    <div class="container " style="box-sizing: border-box; width: 100%; overflow-y: overlay;">
      <div class="row">
        <div class="col-md-11 content mx-auto">
          <div id="tagbarra">
            <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="light">
              <div class="container-fluid">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link " href="home.php">Home</a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" href="login.php">Login</a>
                    </li>

                  </ul>

                </div>
              </div>
            </nav>
          </div>



          <div style="text-align: center; padding-top: 20px;">
            <h2 class="fw-semibold">Acesse sua Conta </h2>
          </div><br>

          <div id="restaurante">
            <img src="logoviapat.png" style="display: block; margin: 0 auto;" width="260px" alt="Logo">
          </div>

          <div class="d-flex justify-content-center align-items-center" style="height: 75vh;">
            <div class="row offset-md-4 w-75">
              <div id="corpo-form">
                <form method="POST">

                  <div class="col-md-6 mb-3">
                    <input type="email" class="form-control" placeholder="Usuário" name="email">
                  </div>

                  <div class="col-md-6 mb-3">
                    <input type="password" class="form-control" placeholder="Senha" name="senha">
                  </div>

                  <div class="col-md-6 mb-3">
                    <input type="submit" class="btn btn-outline-success" value="Acessar">
                  </div>

                </form>
              </div>

              <?php
              if (isset($_POST['email'])) {
                $email = addslashes($_POST['email']);
                $senha = addslashes($_POST['senha']);

                if (!empty($email) &&  !empty($senha)) {
                  $u->conectar("viapat", "localhost", "root", "");
                  $msgErro = '';
                  if ($msgErro == "") {
                    if ($u->logar($email, $senha)) {
                      header("location: inicio.php");
                    } else {

                      echo "Email e/ou senha estão incorretos!";
                    }
                  } else {
                    echo "Erro:" . $u->msgErro;
                  }
                } else {
                  echo "Preencha todos os campos!";
                }
              }

              ?>
            </div>
          </div>
        </div>
      </div>
      <script>
        document.addEventListener("DOMContentLoaded", function() {
          let scrollArea = document.getElementById('scroll-area');
          scrollArea.style.height = '4500px';
          scrollArea.style.overflowY = 'auto';
          scrollArea.scrollTop = 500;
        });
      </script>


</body>

</html>