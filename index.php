<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home - Pagina Principal</title>
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
                      <a class="nav-link " href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="login.php">Login</a>
                    </li>

                  </ul>

                </div>
              </div>
            </nav>
          </div>

          <img src="capa.jpg" class="d-block w-100" alt="...">



        </div>
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