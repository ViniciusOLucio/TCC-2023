<?php
include_once('header.php');
?>

<?php
session_start();

?>

<!-- IMPORTAR HEADER -->
<section id="paniel-alimentadores" class="container ">
  <ul class="grid-2">

    <?php
    // conexao

    include("php/conexao.php");

    $produto = "SELECT * FROM produto";
    $resulta = $conexao->query($produto);
    if ($resulta->num_rows > 0) {

      while ($row = $resulta->fetch_assoc()) {

        echo ' <li class="pg-alimentadores-mapa">';
        echo '  <h1>'  . $row['bairro'] . '</h1>';
        echo '' . $row['foto'];
        echo '  <div class="cartoes-doacoes">';

        echo '<div class="cartao-doacao">';
        echo ' <a href="./doacao-anonima.php" style="text-decoration: none;">
                             <h4>Anônimo</h4>
                             </a>
                         </div>
                         <div class="cartao-doacao " >
                             <a href="./torne-apoiador.php" style="text-decoration: none;">
                             <h4>Apoiador</h4>
                             </a>
                         </div>
                         <div class="cartao-doacao " >
                         <a href="alimentadores/alimentador.php?id=' . $row['id'] . '" style="text-decoration: none; ">
                         <h4>Veja Mais</h4>
                         </a>
                     </div> 
                     </div>';
        echo ' </li>';
      }
    }

    ?>
  </ul>



</section>


</div>
<?php
include_once('footer.php');
?>