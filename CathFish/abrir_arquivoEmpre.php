<?php
 include("conectar.php");
 try
	{
		$conecta = new PDO("mysql:host=$servidor;dbname=$banco", $usuario , $senha);
		$consultaSQL = "SELECT foto, foto_tipo FROM empresas WHERE id=$_GET[id]";
		$exComando = $conecta->prepare($consultaSQL); //testar o comando
		$exComando->execute(array());
        foreach($exComando as $resultado) 
		{
            $tipo = $resultado['foto_tipo'];
            $conteudo = $resultado['foto'];
            header("Content-Type: $tipo");
            echo $conteudo;
		}	
    }catch(PDOException $erro)
	{
		echo("Errrooooo! foi esse: " . $erro->getMessage());
	}
?>