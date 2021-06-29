<?php 
 
 
 $servidor = 'localhost';
 $usuario = 'root';
 $senha = '';
 $banco = 'cf';

 $conexao = mysqli_connect($servidor,$usuario,$senha,$banco) or die ("Erro de conexão com o banco!");
?>
