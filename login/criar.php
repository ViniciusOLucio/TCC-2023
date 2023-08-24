<!DOCTYPE html>
<html>
<head>
<title>Criar</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<script src="https://kit.fontawesome.com/48a96fe751.js" crossorigin="anonymous"></script> 
  

  <link href="../favicon.png" rel="icon">


  <link rel="preconnect" href="https://fonts.googleapis.com">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js" integrity="sha512-yDlE7vpGDP7o2eftkCiPZ+yuUyEcaBwoJoIhdXv71KZWugFqEphIS3PU60lEkFaz8RxaVsMpSvQxMBaKVwA5xg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

<!-- web font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&family=Saira:wght@400;700&display=swap"
    rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Criar</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="enviar.php" method="post">
					<input class="text" type="text" name="nome" id="nome" placeholder="Nome" required="">
					
					<input class="text email" type="email" name="email" id="email" placeholder="Email" required="">

					<input class="text" type="text" name="telefone" id="telefone" placeholder="Telefone" required=""><br>

					<input class="text" type="text" name="cpf-cnpj" id="cpf-cnpj" placeholder="CPF ou CNPJ" required="">

					
					


					<input class="text email" type="password" name="senha" id="senha" placeholder="Senha" required="">
					<input class="text email" type="password" name="conf_senha" id="conf_senha" placeholder="Confirme a Senha" required="">
	
				<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" style="background-color:blue;" required="">
							<span>Desejo apoiar anonimamente</span>
						</label>
						<div class="clear"> </div>
					</div>
					<br>
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>Eu concordo com os <a href="../termosecondicoes.html" style=" color: black;"> termos e condições</a></span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="submit" value="CRIAR">
				</form>
				<p>Ja tem uma conta? <a href="./" style="color: black;     border-bottom: 2px solid black;"> Entre agora!</a></p>
			</div>
		</div>

		<!-- //copyright -->
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
	
</body>

<?php
require_once("../php/conexao.php");








?>

</html>

