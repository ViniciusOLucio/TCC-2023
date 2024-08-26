<?php
session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nutri-Cão</title>
    <link rel="stylesheet" href="../assets/css/scss/main.css">
</head>
<!-- font awersome -->
<script src="https://kit.fontawesome.com/48a96fe751.js" crossorigin="anonymous"></script>

<!-- google fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&family=Saira:wght@400;700&display=swap" rel="stylesheet">

<!-- LIB ICONS -->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<body>
    <!-- IMPORTAR HEADER -->
    <section id="paniel-alimentadores" class="container grid-2">
        <div class="pg-alimentadores-caixa-esquerda">

            <div class="pg-alimentadores-mapa">
                <?php
                // conexao

                include("../php/conexao.php");

                $produto = "SELECT foto FROM produto WHERE id='".$_GET['id']."'";
                $resulta = $conexao->query($produto);
                if ($resulta->num_rows > 0) {

                    while ($row = $resulta->fetch_assoc()) {


                         echo "". $row['foto'];
                    
                    }
                }

                ?>
            </div>
               
            <img src="../assets/img/comedouro.jpg" class="comedouro">
      
        </div>

        <!-- caixa esquerda -->
        <div class="pg-alimentadores-caixa-direita">
            <div class="pg-alimentadores-titulo">
            <?php  include '../php/conexao.php';
     
     $produto = "SELECT * FROM produto WHERE id='". $_GET['id']. "'";
     $resulta = $conexao->query($produto);

     if ($resulta->num_rows > 0) {
      
         while ($row = $resulta->fetch_assoc()) {
          
              
             echo'  <h1>'  . $row['bairro'] . '</h1>';
           
           
         }
     }
    
     ?>
            </div>
            <div class="pg-alimentadores-descricao">
                <p>
                    Sua doação será contribuida para:
                    Manutenção, Compra de ração, Higienização alem da construção de novos alimentadores para este bairro, contamos com sua ajuda, qualquer quantia vale !

                </p>
            </div>
            <div class="pg-alimentadores-compra-prod">
                <h2>Doe como:</h2>
                <div class="cartoes-doacoes" style="display: flex; justify-content: space-around">

                    <div class="cartao-doacao">
                        <a href="" style="text-decoration: none;">
                        <h4>Pix Anônimo</h4>
                        </a>
                    </div>
                    <div class="cartao-doacao " >
                        <a href="" style="text-decoration: none;">
                        <h4>Apoiador</h4>
                        </a>
                    </div>
                </div>
   
             </div>




        </div> <!-- caixa direita -->





    </section>

    <!-- IMPORTAR FOOTER -->
</body>

</html>