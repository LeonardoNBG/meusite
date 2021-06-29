<?php
 include("conectar.php");
 try
	{
		$conecta = new PDO("mysql:host=$servidor;dbname=$banco", $usuario , $senha);
		$consultaSQL = "SELECT foto, foto_tipo FROM produto WHERE id=$_GET[id]";
		$exComando = $conecta->prepare($consultaSQL); //testar o comando
		$exComando->execute(array());
        foreach($exComando as $resultado) 
		{
            $tipoP = $resultado['foto_tipo'];
            $conteudo = $resultado['foto'];
            header("Content-Type: $tipoP");
            echo $conteudo;
		}	
    }catch(PDOException $erro)
	{
		echo("Errrooooo! foi esse: " . $erro->getMessage());
	}
?>