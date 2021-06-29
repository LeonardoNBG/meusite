<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<link href="myCSS.css" rel="stylesheet">

<body>
  <?php

  include('verifica_loginEmpre.php');
  include('conectar.php');
  $email = $_SESSION['email'];
  $sql = "SELECT id, empresa FROM empresas WHERE email = '$email'";
  $result = $conexao->query($sql);


  foreach ($result as $resultado) {
    echo
    "
                 
                <nav class='navbar navbar-expand-lg navbar-light bg-light'>
  <div class='container-fluid'>
  <a class='navbar-brand' href='PaginaEmpresa.php'>
      <img src='logoCF.png' alt='' width='55' height='49'>
    </a>
    <a class='navbar-brand' href='PaginaEmpresa.php'>Cath Fish</a>
    <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarScroll' aria-controls='navbarScroll' aria-expanded='false' aria-label='Toggle navigation'>
      <span class='navbar-toggler-icon'></span>
    </button>
    <div class='collapse navbar-collapse' id='navbarScroll'>
      <ul class='navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll' style='--bs-scroll-height: 100px;'>
        <li class='nav-item'>
          <a class='nav-link active' aria-current='page' href='#'>Loja</a>
        </li>
        <li class='nav-item'>
          <a class='nav-link' href='cadProd.php'>Cadastrar Produtos</a>
        </li>
        <li class='nav-item dropdown'>
          <a class='nav-link dropdown-toggle' href='#' id='navbarScrollingDropdown' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
            Produtos
          </a>
          <ul class='dropdown-menu' aria-labelledby='navbarScrollingDropdown'>
            <li><a class='dropdown-item' href='ProdCad.php'>Cadastrados</a></li>
            <li><a class='dropdown-item' href='#'>Vendidos</a></li>
            <li><hr class='dropdown-divider'></li>
            <li><a class='dropdown-item' href='#'>Relação de Venda</a></li>
          </ul>
        </li>
        
      </ul>
      
      <div class='dropstart'>
      <img src='abrir_arquivoEmpre.php?id=$resultado[id]' width='50' heigth='44' class='dropdown-toggle' type='button' id='dropdownMenu2' data-bs-toggle='dropdown' aria-expanded='false'>
  </img>
  <ul class='dropdown-menu' aria-labelledby='dropdownMenu2'>
  <li><a class='dropdown-item' href='perfilEmpre.php'>Perfil</a></li>
  <li><a class='dropdown-item' href='#'>Favoritos</a></li>
  <li><a class='dropdown-item' href='logout.php'>Sair</a></li>
  </ul>
</div>

    </div>
  </div>
</nav>
<br/>
 <div class='container'>               
<form class='d-flex' method='POST' action='pesquisa.php'>
<input class='form-control me-2' name='pesquisa' type='text' placeholder='Search' aria-label='Search'>
<button class='btn btn-outline-success' type='submit'>Search</button>
</form> 
<br/>
";
  }
  ?>
  <div class="row row-cols-1 row-cols-md-3 g-4 ">
  
  <?php
  include('conectar.php');

  $sql = "SELECT * FROM produto";
  $result = $conexao->query($sql);
  foreach ($result as $resposta) {

    echo "


      
    <div class='col'>
          <div class='card' style='max-width: 325px;'>
            <img src='abrir_arquivoProd.php?id=$resposta[id]'   class='card-img-top' alt='...'>
            <div class='card-body'>
              <h5 class='card-title'>$resposta[nome]</h5>
              <p class='card-text'>$resposta[descricao]</p>
              <p class='card-text'><font color='red' face='algerian'><h3 ><b>$resposta[preco]</b></h3></font></p>
            </div>  
            <div class='card-footer'>
              <form class='d-flex' method='POST' action='produto.php'>
                <button class='btn btn-outline-success' type='submit'>Comprar</button>
              </form>
            </div>
          </div>
          </div>
          
          
       
      
  
    
  ";
  }







  ?>
  </div>
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</body>