<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title>Cadastro</title>
    </head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link href="myCSS.css" rel="stylesheet">

<body>
        <?php
        include "conectar.php";
            $arquivo = $_FILES["foto"]["tmp_name"];
            $tipo = $_FILES ["foto"]["type"];
            $tamanho = $_FILES["foto"]["size"];
            $nome = $_POST ['nome'];
            $email = $_POST['email'];
            $telefone = $_POST['tel'];
            $senha = $_POST['senha'];

            if($arquivo == "none" or $tipo == "" or $nome =="" or $email == "" or $telefone == "" or $senha == "")
            {
                echo "Campos Obrigatórios em branco, preencha corretamente ...<br/>";
                echo "<p><a href='cadastrouser.php'> Cadastro de Usuários</a></p>";
            } else
            {
                $fp = fopen($arquivo, "rb");
                $conteudo = fread($fp, $tamanho);
                $conteudo = addslashes($conteudo);
                fclose($fp);

              //Connecting, selecting database
              $mysqli = new mysqli('localhost','root','','cf');
              $sql = "INSERT INTO usuario VALUES(0,'$conteudo','$tipo','$nome','$email','$telefone','$senha')";
              //Printing results
              $result = $mysqli -> query ($sql);
              $_SESSION['user_cadastrado'] = true;
    header('Location: cadastrouser.php');
    exit();
              
              /*echo "<div class'container-fluid'>";
              echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>";
              echo "<strong>Success!</strong> Usúario cadastrado com sucesso!";
              echo "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>";
              echo "</div>";
              echo "<a class='btn btn-success' href='index.php' role='button'>Login</a>";
              echo "</div>";
              */
            }
        ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</body>
</html>
