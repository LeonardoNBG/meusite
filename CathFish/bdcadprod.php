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

        $arquivoP = $_FILES["foto"]["tmp_name"];
        $tipoP = $_FILES["foto"]["type"];
        $tamanhoP = $_FILES["foto"]["size"];

        $nomeProd = $_POST['nome'];
        $desCurta = $_POST['descricao_curta'];
        $desc = $_POST['descricao'];
        $preco = $_POST['preco'];
        $qtde = $_POST['qtde'];

        
        


        if (
            $arquivoP == "none" or $tipoP == "" or $nomeProd == "" or $desCurta == "" or $desc == "" or $preco == "" or $qtde == ""
        ) {
            echo "Campos Obrigatórios em branco, preencha corretamente ...<br/>";
            echo "<p><a href='cadProd.php'> Cadastro Produtos</a></p>";
        } else {
            $fp = fopen($arquivoP, "rb");
            $conteudo = fread($fp, $tamanhoP);
            $conteudo = addslashes($conteudo);
            fclose($fp);

            //Connecting, selecting database
            $mysqli = new mysqli('localhost', 'root', '', 'cf');
            $sqlP = "INSERT INTO produto VALUES(0,'$conteudo','$tipo','$nomeProd','$desCurta','$desc','$preco','$qtde', $resultado[id])";
            //Printing results
            $result = $mysqli->query($sqlP);

            $_SESSION['Prodcadastrado'] = true;
            header('Location: cadProd.php');
            exit();

            /* echo "<div class'container-fluid'>";
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>";
        echo "<strong>Success!</strong> Empresa cadastrada com sucesso!";
        echo "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>";
        echo "</div>";
        echo "<a class='btn btn-success' href='index.php' role='button'>Login</a>";
        echo "</div>";*/
        }
    }



    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</body>