<?php
include_once('./php/conexao.php');
if (session_status() != PHP_SESSION_ACTIVE) session_start();

if (!isset($_SESSION['id']) && !isset($_SESSION['email']) && !isset($_SESSION['senha']) && !isset($_SESSION['nivel'])) {
    $_SESSION = [];
    session_destroy();
    header('Location:login/');
    exit();
}
$id = $_SESSION['id'];

if(@$_GET['pagina'] != ""){
	$pagina = @$_GET['pagina'];
}else{
	$pagina = 'dados-compra';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/scss/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&family=Saira:wght@400;700&display=swap"
    rel="stylesheet">
    
    <title>APOIADOR</title>
</head>
<body>
   

    <!-- HEADER -->
    <div class="col-100">
        <header class="container">
            <nav id="nav-header">
                <h6>Apoiador - Nutri-Cão<span>.</span></h6>
                <ul>
                <li><a href="usu.php?pagina=formulario">ENVIAR FORMULARIO</a></li>
                    <li><a href="usu.php?pagina=dados-compra">Dados de Compra</a></li>
                    <li> <a href="./login/logout.php">Sair</a></li>
                </ul>
            </nav>
        </header>
    </div>


    <section id="home-adm">
	<?php 
			require_once('paginas/'.$pagina.'.php');
			?>

    </section>
    
     
</body>
</html>