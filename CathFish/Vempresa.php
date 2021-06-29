
<?php
session_start();
include('conectar.php');
if (empty($_POST['email']) && empty($_POST['senha'])) {
  header('Location: loginEmpre.php');
  exit();
}
  $email = mysqli_real_escape_string($conexao, $_POST['email']);
  $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

  ECHO $query =  "SELECT id, empresa from empresas where email = '{$email}' and senha = '{$senha}' ";
    
  $result = mysqli_query($conexao, $query);
  $row = mysqli_num_rows($result);

  if ($row == 1){
    $_SESSION['email'] = $email;
    header('Location: PaginaEmpresa.php');
    exit();
  }else{
    $_SESSION['empresa_nao_autenticado'] = true;
    header('Location: loginEmpre.php');
    exit();
  }
   
?>
