<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<link href="myCSS.css" rel="stylesheet">

<body>
    <?php
    include('verifica_loginEmpre.php');
    include('conectar.php');

    $email = $_SESSION['email'];
    $sql = "SELECT id,foto,empresa,cnpj,inscEst,rua,bairro,cidade,estado,cep,telefone,email,senha FROM empresas WHERE email = '$email'";
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
          <a class='nav-link active' aria-current='page' href='PaginaEmpresa.php'>Loja</a>
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
<form>
<img src='printer.svg' type='button' value='Print this page' onClick='window.print()'/>
</form>
</div>
";
    }
?>
<?php
include('conectar.php');


$sql = "SELECT * FROM produto WHERE id_empresa = $resultado[id]";
$result = $conexao->query($sql);
echo"
<div class='container'>
<center>
<h1> Produtos Cadastrados</h1>
</center>
<br/>
</div>";

foreach ($result as $resolve) {
echo "
<div class='container'>
<table class='table table-striped table-bordered border-dark'>
<thead class='thead-dark'>

<tr>
   
    <th>ID</th>
    <th>Foto</th>
    <th>Nome</th>
    <th>Descrição Curta</th>
    <th>Descrição</th>
    
    <th>Preço</th>
    <th>Quantidade</th>
    <th>Empresa</th>
    

    </tr>
</thead>

<tr>
                
                <td>$resolve[id]</td>
                <td><img src='abrir_arquivoProd.php?id=$resolve[id]' width='60px'/></td>
                <td>$resolve[nome]</td>

                <td>$resolve[descricao_curta]</td>
                <td>$resolve[descricao]</td>
                <td>$resolve[preco]</td>

                <td>$resolve[qtde]</td>
                <td>$resultado[empresa]</td>
                
            </tr>
            <tr>
            <th>
                <form class='d-flex' method='POST' action='alterProd.php'>
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