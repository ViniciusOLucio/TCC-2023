<?php
include_once('../php/conexao.php');
include_once('../php/admin.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/css/scss/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&family=Saira:wght@400;700&display=swap"
    rel="stylesheet">
    <title>Administração</title>
</head>
<body>
   

    <!-- HEADER -->
    <div class="col-100">
        <header class="container">
            <nav id="nav-header">
                <ul>
                    <li><a href="paginas/dados-compra.php">Dados de Compra</a></li>
                    <li><a href="">Bairros</a></li>
                    <li><a href="paginas/usuarios.php">Usuarios</a></li>
                    <li><a href="">Configurações</a></li>
                    <li> <a href="../login/logout.php">Sair</a></li>
                </ul>
            </nav>
        </header>
    </div>

    
     
</body>
</html>