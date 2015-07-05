<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <title>PACESS - Portal da Acessibilidade</title>
	<link rel="shortcut icon" href="_img/icon.png" type="image/x-icon">

    <meta name="viewport" content="width=device-width,initial-scale=1">  
    <link rel="stylesheet" href="_css/style.css">
	<link rel="stylesheet" href="_css/mobile.css">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700,300,800,400' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="_js/main.js"></script>


<body>
	
	<!-- Start HeaderSection -->
    <header class="bg2">
      		
            <div id="main-header"> <!-- logo e caixa de pesquisa -->
                <div class="col-logo">
                    <h2>
						<a href="index.html" class="logo">
							<img src="_img/logo.png" alt="logo">
						</a>
					</h2>
                </div> <!-- col-logo -->

                <div class="search">
                    <form method="get" name="search">
                        <input type="text" name="search" placeholder="Pesquisar reclamação, local...">
						<button type="submit" value="Search" class="btn-search-header">
							<i class="fa fa-search fa-2x fa-blue"></i>
						</button>
                    </form>
                </div>
            </div> <!-- main-header -->
		
			<div class="col-nav">
                <nav>
                    <ul>
                      <li><a href="index.html"><img class="logo-sml" src="_img/logo-sml.png" alt="logo"></a></li>
                      <li><a href="index.html#how-work">Como Funciona</a></li>
                      <li><a href="index.html#about">Sobre</a></li>
                      <li><a href="#main-header">Reclamações</a></li>
                      <li><a href="index.html#complain">Faça sua Reclamação</a></li>
                      <li><a href="index.html#contact">Contato</a></li>
                    </ul>
                </nav>
            </div> <!-- col-nav -->
			
		
            

    </header>
	<!-- End HeaderSection -->
	
	<!-- Start About Section -->
	<section id="about">
		
		<div class="row-title">
			<h1>Reclamações</h1>
			
			<hr>
		</div><!-- row-title -->
		
		<p>
		<?php
			include "conecta.php";
			
			$select = "select nome, email, lugar, msg from reclamacao;";
			$busca = $conexao->query($select);

			/* 						INGRID's CODE

			while ($linha = $busca->fetch_assoc()){
				echo "Nome: ";
				echo ($linha["nome"]);
				echo "<br>";
				echo "Email: ";
				echo ($linha["email"]);
				echo "<br>";
				echo "Local: ";
				echo ($linha["lugar"]);
				echo "<br>";
				echo "Mensagem: ";
				echo ($linha["msg"]);
				echo "<br>";echo "<br>";
			}*/

			echo "<table cellspacing='0'>";
			echo "<tr><th>"."Nome"."</th><th>"."Lugar"."</th><th>"."Mensagem"."</th></tr>";
			while ($linha = $busca->fetch_assoc()){
				$nome = $linha['nome'];
				$email = $linha['email'];
				$lugar = $linha['lugar'];
				$msg = $linha['msg'];	
				echo "<tr><td>".$nome."</td><td>".$lugar."</td><td>".$msg."</td></tr>";
			}
			echo "</table>";
		?>
		</p>
	</section>
	<!-- End About Section -->
	

	
	<!-- Footer Section -->
	<footer>
	
		<h1>
			<a href="#main-header">
				<span class="fa-stack fa-2x">
				<i class="fa fa-circle fa-stack-2x fa-blue"></i>
				<i class="fa fa-chevron-up fa-1x"></i>
			</span>
			</a>
		</h1>
		
		<div class="row-title">	
			<p>&copy; 2015 <a href="index.html">PORTAL DA ACESSIBILIDADE</a>. Todos os direitos reservados.</p>
		</div><!-- row-title -->
		
	</footer>
	<!-- End Footer Section -->
	
</body>
</html>
