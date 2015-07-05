<html>
<body>
<?php
	include "conecta.php";
	
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$lugar = $_POST["lugar"];
	$msg = $_POST["msg"];
	
	$consql = $conexao->query("insert into reclamacao(nome,email,lugar,msg) values('$nome','$email','$lugar','$msg')");
	
	/*$linhas = mysql_affected_rows();
	
	echo "<p>A consulta retornou $linhas registros. </p>";
	
	if($consql){
		echo "Reclamacao registrada com sucesso.";
		exit;
	}
	else{
		echo "Erro ao registrar reclamação.". mysql_error();
		exit;
	}*/
	
	$conexao->close();
	//mysql_close($conexao);
	header ("Location: index.html");
	
?>
</body>
</html>