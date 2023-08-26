<?php
session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forsaken Dogs</title>
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
               
              <?php  include '../php/conexao.php';
     
                $produto = "SELECT * FROM produto WHERE id='". $_GET['id']. "'";
                $resulta = $conexao->query($produto);

                if ($resulta->num_rows > 0) {
                 
                    while ($row = $resulta->fetch_assoc()) {
                        $valor = $row["pago"];
                        if($valor=='S'){
                            $color="<div class='pago'>";
                            $escrita='Mês pago por: ';
                            // adicionar
                            $nome = 'variavel-nomeusu';
                            $imagemp = '<img src="../assets/img/icone.png"> ';
                          }else{

                            $escrita='Não Pago';
                            $color="<div class='nao-pago'>";
                            $nome = '';
                            $imagemp = '';
                          }
                          echo "<div class='pg-alimentador-apoiadoreslista'>";
                        echo $color.'<h5>'  . $row['bairro'] . "&nbsp; &nbsp;".$row['valor']. 'R$ &nbsp; &nbsp;' .$escrita. $nome."&nbsp; &nbsp;" .$imagemp. '</h5> </div>';
                      
                      
                    }
                }
               
                ?>
               
      
            </div>
        </div>

        <!-- caixa esquerda -->
        <div class="pg-alimentadores-caixa-direita">
            <div class="pg-alimentadores-titulo">
                <h1>Titulo</h1>
            </div>
            <div class="pg-alimentadores-descricao">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam mollitia voluptatibus quidem perspiciatis nulla esse eveniet amet dolorum molestias nobis commodi, numquam dignissimos, vitae corporis veniam accusantium ipsa distinctio quo.
                </p>
            </div>
            <div class="pg-alimentadores-compra-prod">
                <h2>Titulo-2</h2>



            </div>




        </div> <!-- caixa direita -->





    </section>

    <!-- IMPORTAR FOOTER -->
</body>

</html>