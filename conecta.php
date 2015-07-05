<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "root";
	$banco = "dbpacess";
	
	$conexao = new mysqli($servidor, $usuario, $senha, $banco) or die("Erro na conexão com o servidor");
	/*$result = $conexao->query ("select * from reclamacao");
	$linha = $result->fetch_assoc ();
	if ($conexao){
		echo "Deu bom :D";
	}
	else{
		echo "Deu ruim :c";
	}*/
?>