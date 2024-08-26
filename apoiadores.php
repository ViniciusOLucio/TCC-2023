
<?php
include_once('header.php');
?>
<section id="hero" class="container grid-2 ">
  <!-- HERO TITULO -->
  <div class="hero-titulo">
    <h1><span>Parceiros de Mudança</span></h1>



    <p>Explore as empresas que compartilham nossa paixão por tornar o mundo um lugar mais justo e solidário. Juntos, estamos construindo um mundo melhor!</p>
    <button class="hero-btn"> <a href="./torne-apoiador.php">APOIE A CAUSA</a></button>
  </div>
  <div class="hero-img"><img src="assets/img/00001-removebg-preview.png" alt=""></div>

  <!-- HERO IMG -->
</section>
<section class="apoiadores-inf container">
<ul class="grid-3">
  
<?php
        @session_start();
        include 'php/conexao.php';
        $tb = "SELECT * FROM usuario WHERE nivel='P' AND ativo='S'";
        $resulta = $conexao->query($tb);
        if ($resulta->num_rows > 0) {
          while ($row = $resulta->fetch_assoc()) {
            $foto_logotipo = $row['logo'];
            echo '<li class="apoiadores-li"> <a href="apoiador.php?id=' . $row['id'] . '">' . "<img src='./assets/img/img-usu/{$foto_logotipo}' alt=''>" . '</a> </li>';
       
          }
        }
        ?>
        </ul>

</section>
<?php
include_once('footer.php');
?>
</body>
