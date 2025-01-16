<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" href="icon.jpg">
    <title>Tela De Inicio</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/blog/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">


    
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
  </head>
  <body>


    
<svg xmlns="http://www.w3.org/2000/svg" class="d-none">
  <symbol id="aperture" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
    <circle cx="12" cy="12" r="10"/>
    <path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/>
  </symbol>
  <symbol id="cart" viewBox="0 0 16 16">
    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
  <symbol id="chevron-right" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
  </symbol>
</svg>

<header class="border-bottom lh-1 py-3" style="background-color: GOLD; width: 100%;">
  <div class="row flex-nowrap justify-content-between align-items-center mx-0">
    <div class="col-4 text-center">
      <a class="blog-header-logo text-body-emphasis text-decoration-none" href="inicio.php"> VIA PAT</a>
    </div>
    <div class="col-4 d-flex justify-content-end align-items-center">
    </div>
    <div class="col-4 text-center">
      <a class="btn btn-sm btn-outline-secondary" href="index.php">Sign up</a>
    </div>
  </div>
</header>



  <div class="nav-scroller py-2 mb-3 border-bottom px-3" style="background-color: GOLD;" >
    <nav class="nav nav-underline justify-content-between">
  
    <a class="nav-item nav-link link-body-emphasis" href="inicio.php">Inicio</a>
    <a class="nav-item nav-link link-body-emphasis" href="ajuda.php">Ajuda</a>
    <a class="nav-item nav-link link-body-emphasis" href="fornecedores.php">Contatar fornecedores</a>
    <a class="nav-item nav-link link-body-emphasis" href="desenvolvedores.php">Contatar desenvolvedores</a>
    <div class="btn-group">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Menu de Opções
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="consulta.php">Consulta de Ingredientes no estoque</a></li>
    <li><a class="dropdown-item" href="cadastro.php">Cadastrar novo ingrediente</a></li>
    <li><a class="dropdown-item" href="excluir.php">Excluir ingrediente</a></li>
    <li><a class="dropdown-item" href="alterar.php">Alterar ingrediente</a></li>

  </ul>
</div>
  </nav>
  </div>
</div>
    

    <div class="container">
        <h1 class="">Consulta de Produtos</h1>
        <div class="row">

            <div class="col-sm-10 mx-auto">
    <style>
        /* Estilo para o cabeçalho da tabela */
        .table thead th {
            background-color: yellow;
            color: black;
        }

        /* Estilo para o botão de voltar */
        .btn-voltar {
            background-color: yellow;
            color: black;
            border: 1px solid black;
        }
        .btn-voltar:hover {
            background-color: gold;
            color: black;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        
        <table class="table">
            <thead>
                <tr>
                    <th>Codigo Produto</th>
                    <th>Descrição</th>
                    <th>Peso</th>
                    <th>Unidade de Medida</th>
                    <th>Total de pacotes</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "conexao.php";
                $sql = "SELECT * FROM produto";

                $result = $conexao->prepare($sql);
                $result->execute();

                while ($linha = $result->fetch(PDO::FETCH_ASSOC)) {
                ?>
                <tr>
                    <td><?= $linha["codigo"] ?></td>
                    <td><?= $linha["descricao"] ?></td>
                    <td><?= $linha["peso"] ?></td>
                    <td><?= $linha["unidade"] ?></td>
                    <td><?= $linha["total"] ?></td>
                    
                </tr>
                <?php
                }
                ?>    
              </table>
              <p>
              <a href="inicio.php" class="btn btn-voltar mb-3">Voltar</a>
              </p>
            </div>
        </div>
    </div>
    
    <footer class="py-5 text-center text-body-secondary bg-body-tertiary">
  <p>Desenvolvedores: Adryani Ribeiro, Ana Flávia Reis, Caio Lopes, Renan Teodoro e Wesley Lima</p>
  <p class="mb-0">
    <a href="#">Back to top</a>
  </p>
</footer>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>