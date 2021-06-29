<?php
 include("conectar.php");
 try
	{
		$conecta = new PDO("mysql:host=$servidor;dbname=$banco", $usuario , $senha);
		$consultaSQL = "SELECT foto, tipo_foto FROM usuario WHERE id=$_GET[id]";
		$exComando = $conecta->prepare($consultaSQL); //testar o comando
		$exComando->execute(array());
        foreach($exComando as $resultado) 
		{
            $tipo = $resultado['tipo_foto'];
            $conteudo = $resultado['foto'];
            header("Content-Type: $tipo");
            echo $conteudo;
		}	
    }catch(PDOException $erro)
	{
		echo("Errrooooo! foi esse: " . $erro->getMessage());
	}
?>