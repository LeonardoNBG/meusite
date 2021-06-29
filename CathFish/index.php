<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <title>Cath Fish</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link href="myCSS.css" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <h2>CathFish</h2>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="cadastrouser.php">Cadastrar-se</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="cadastroEmpre.php">Cadastrar Empresa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="loginEmpre.php">Entra como Empresa</a>
          </li>
        </ul>
      </div>
  </nav>
  <div class="container"><br />
    <div class="alert alert-dark" role="alert">
      <div class="container">
        <div class="row align-items-center">
          <div class="col">
            <div class="card card-body bg-info">
              <center>
                <h1>Login</h1>
              </center>
            </div>
            <div class="container">
                        <div class="row align-items-center">
                            <div class="col">
                                <?php
                                if (isset($_SESSION['nao_autenticado'])) :
                                ?>
                                    <div class="alert alert-danger" role="alert">
                                        <center>
                                            <h4>Usuário ou Senha invalidos!</h4>
                                        </center>
                                    </div>
                                <?php

                                endif;
                                unset($_SESSION['nao_autenticado']);
                                ?>
                            </div>
                        </div>
                    </div>
          </div>
          <div class="container">
            <div class="row align-items-center">
              <div class="col md-2">
                <div class="card card-body">
                  <form method="POST" class="row g-3" action="login.php">
                    <div class="col-md-6">
                      <label for="inputEmail4" class="form-label">Email</label>
                      <input type="email" name="email" class="form-control" id="inputEmail4">
                    </div>

                    <div class="col-md-6">
                      <label for="inputPassword4" class="form-label">Senha</label>
                      <input type="password" name="senha" class="form-control" id="inputPassword4">
                    </div>


                    <div class="col-12">
                      <button type="submit" class="btn btn-primary">Entrar</button>
                    </div>

                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>

</html>