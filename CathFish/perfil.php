<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<link href="myCSS.css" rel="stylesheet">

<body>
    <?php
    include('verifica_login.php');
    include('conectar.php');

    $email = $_SESSION['email'];
    $sql = "SELECT * FROM usuario WHERE email = '$email'";
    $result = $conexao->query($sql);


    foreach ($result as $resultado) {
        echo
        "
                 
                <nav class='navbar navbar-expand-lg navbar-light bg-light'>
  <div class='container-fluid'>
  <a class='navbar-brand' href='#'>
      <img src='logoCF.png' alt='' width='55' height='49'>
    </a>
    <a class='navbar-brand' href='#'>Cath Fish</a>
    <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarScroll' aria-controls='navbarScroll' aria-expanded='false' aria-label='Toggle navigation'>
      <span class='navbar-toggler-icon'></span>
    </button>
    <div class='collapse navbar-collapse' id='navbarScroll'>
      <ul class='navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll' style='--bs-scroll-height: 100px;'>
        <li class='nav-item'>
          <a class='nav-link active' aria-current='page' href='principal.php'>Loja</a>
        </li>
        <li class='nav-item dropdown'>
          <a class='nav-link dropdown-toggle' href='#' id='navbarScrollingDropdown' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
            Varas
          </a>
          <ul class='dropdown-menu' aria-labelledby='navbarScrollingDropdown'>
            <li><a class='dropdown-item' href='#'>Albatroz</a></li>
            <li><a class='dropdown-item' href='#'>Shimano</a></li>
            <li><a class='dropdown-item' href='#'>Daiwa</a></li>
            <li><hr class='dropdown-divider'></li>
            <li><a class='dropdown-item' href='#'>Telescópicas</a></li>
            <li><hr class='dropdown-divider'></li>
            <li><a class='dropdown-item' href='#'>Todas</a></li>
          </ul>
        </li>
        <li class='nav-item dropdown'>
          <a class='nav-link dropdown-toggle' href='#' id='navbarScrollingDropdown' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
            Carretilhas/Molinetes
          </a>
          <ul class='dropdown-menu' aria-labelledby='navbarScrollingDropdown'>
            <li><a class='dropdown-item' href='#'>Albatroz</a></li>
            <li><a class='dropdown-item' href='#'>Shimano</a></li>
            <li><a class='dropdown-item' href='#'>Maruri</a></li>
            <li><hr class='dropdown-divider'></li>
            <li><a class='dropdown-item' href='#'>Todas</a></li>
          </ul>
        </li>
        <li class='nav-item dropdown'>
          <a class='nav-link dropdown-toggle' href='#' id='navbarScrollingDropdown' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
            Iscas
          </a>
          <ul class='dropdown-menu' aria-labelledby='navbarScrollingDropdown'>
            <li><a class='dropdown-item' href='#'>Artificiais</a></li>
            <li><a class='dropdown-item' href='#'>Naturais</a></li>
            <li><hr class='dropdown-divider'></li>
            <li><a class='dropdown-item' href='#'>Todas</a></li>
          </ul>
        </li>
        
      </ul>
      
      <div class='dropstart'>
      <img src='abrir_arquivo.php?id=$resultado[id]' width='50' heigth='44' class='dropdown-toggle' type='button' id='dropdownMenu2' data-bs-toggle='dropdown' aria-expanded='false'>
  </img>
  <ul class='dropdown-menu' aria-labelledby='dropdownMenu2'>
  <li><a class='dropdown-item' href='perfil.php'>Perfil</a></li>
  <li><a class='dropdown-item' href='#'>Favoritos</a></li>
  <li><a class='dropdown-item' href='logout.php'>Sair</a></li>
  </ul>
</div>

    </div>
  </div>
</nav>
<br/>

<div class='container'>
<table class='table table-striped table-bordered border-dark'>
<thead class='thead-dark'>

<tr>
   
    <th>Foto</th>
    <th>Nome</th>
    <th>E-mail</th>
    <th>telefone</th>
    <th>Senha</th>

    </tr>
</thead>

<tr>
                
                <td><img src='abrir_arquivo.php?id=$resultado[id]' width='60px'/></td>
                <td>$resultado[nome]</td>
                <td>$resultado[email]</td>
                <td>$resultado[tel]</td>
                <td>$resultado[senha]</td>
                
            </tr>
            <tr>
            <th>
                <form class='d-flex' method='POST' action='alterPerfil.php'>
                  <button class='btn btn-outline-success' type='submit'>Alterar</button>
                  </form>
                </th>
            </tr>
       </table>
       <br/>
       
       </div>         
                
                
                
            ";
    }

    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</body>