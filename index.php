<?php
include_once('header.php');
?>

<!-- HERO -->
<section id="hero" class="container grid-2 cima">
  <!-- HERO TITULO -->
  <div class="hero-titulo">
    <h1><span> Forsaken Dogs </span><br> uma companhia que está para <span>mudar o mundo!</span></h1>



    <p>Com o projeto Forsaken Dogs, esperamos não apenas fornecer alimentos para cães abandonados, mas também criar
      um sistema mais humano de cuidados para esses animais. Acreditamos que todos os cães merecem amor e cuidado,
      independentemente de sua condição, e estamos trabalhando para construir uma comunidade que compartilha essa
      visão.</p>
    <button class="hero-btn"> <a href="">APOIE A CAUSA</a></button>
  </div>
  <div class="hero-img"><img src="assets/img/cachorro1.png" alt=""></div>

  <!-- HERO IMG -->

</section>

<!-- CARDS HERO -->
<section class="cards-hero container">
  <nav>
    <ul class="grid-4">
      <li>
        <div class="card-hero"><a href="">
            <i class="fa-solid fa-handshake-angle"></i>
            <h4>Apoie já</h4>
          </a></div>
      </li>
      <!-- 2 -->
      <li>
        <div class="card-hero"><a href="">
            <i class="fa-solid fa-people-group "></i>
            <h4>Apoiadores</h4>
          </a></div>
      </li>
      <!-- 3 -->
      <li>
        <div class="card-hero"><a href="">
            <i class="fa-solid fa-location-dot"></i>
            <h4>Lugares</h4>
          </a></div>
      </li>
      <!-- 4 -->
      <li>
        <div class="card-hero"><a href="">
            <i class="fa-solid fa-comments"></i>
            <h4>Contato</h4>
          </a></div>
      </li>
    </ul>
  </nav>
</section>

<!-- coluna branca -->
<div class="col-100 cor-branca ">
  <!-- carotes -->






  <section id="sobre" class="container baixo cima ">
    <!-- caixa 1 -->
    <div class="sobre-caixa-1">
      <div class="sobre-titulo">
        <h1>Sobre For<span>sak</span>en Dogs</h1>
      </div>
      <div class="sobre-subtitulo">
        <p>Forsaken Dogs é um projeto que busca ajudar cães abandonados por meio da tecnologia e da
          colaboração de comerciantes locais. A fome e a desnutrição são problemas comuns enfrentados por
          cães de rua, e é para resolver essa situação que o projeto foi criado.</p>
      </div>
    </div>

    <!-- caixa 2 -->
    <div class="grid-2">
      <div class="sobre-caixa-2 cima">
        <div class="sobre-imagem">
          <img src="assets/img/cachorros.jpeg" alt="" srcset="">
        </div>
        <div class="sobre-missao">
          <div class="sobre-titulo">
            <h1>Nossa missão</h1>
          </div>
          <div class="sobre-subtitulo">
            <p>A missão da Forsaken Dogs é ajudar cães abandonados a terem uma fonte confiável de
              alimento e a melhorar sua qualidade de vida. Queremos colaborar com a comunidade local
              para enfrentar o problema da fome e desnutrição dos cães de rua, usando a tecnologia
              para tornar a solução mais eficiente e econômica.</p>
          </div>
        </div>
      </div>
      <!-- caixa 3 -->
      <div class="sobre-caixa-3">
        <div class="sobre-titulo">
          <h1>Como funciona:</h1>
        </div>
        <div class="sobre-subtitulo">
          <p>As máquinas de ração automáticas desenvolvidas pela Forsaken Dogs são feitas de canos PVC e
            são automatizadas com o uso do Esp32 e sensores de movimento e longitude. Esses sensores
            garantem que a ração seja liberada de forma gradual e controlada, evitando o desperdício e
            garantindo que todos os cães tenham acesso a uma quantidade adequada de alimento.</p>
          <br>
          <p>Os comerciantes podem participar do projeto, obtendo as máquinas de ração automáticas através
            do nosso site e ajudando a distribuí-las pela cidade. As máquinas são fáceis de instalar e
            manter, e quando a ração está acabando, um alerta é enviado para o proprietário do comércio,
            para que possa ser reabastecida a tempo.</p>
          <br>
        </div>

        <div class="check-list">
          <ul>
            <li>Ajuda muitos animais com alguns cliques</li>
            <li>Economico e sem disperdicios !</li>
            <li>Facil acesso</li>
          </ul>
        </div>
        <div class="botao-apoio">
          <div class="wrapper">
            <div class="link_wrapper">
              <a href="#">Apoie a causa!</a>


            </div>
          </div>
        </div>
      </div>


    </div>
  </section>




<section id="apoiadores-h" class="baixo">
  <div class="hero-apoiadores container">
    <div class="titulo-apoiadores">
      <h4>Conheça alguns de nossos apoiadores!</h4>
    </div>
    <div class="apoiadores-logos">
      <ul class="grid-8">
        <?php
        @session_start();
        include 'php/conexao.php';
        $tb = "SELECT logo FROM usuario WHERE divulgar='S' AND nivel='P' AND ativo='S'";
        $resulta = $conexao->query($tb);
        if ($resulta->num_rows > 0) {
          while ($row = $resulta->fetch_assoc()) {
            $foto_logotipo = $row['logo'];
            echo "<li><img src='./assets/img/img-usu/{$foto_logotipo}' alt=''></li>";
          }
        }
        ?>
      </ul>
    </div>
    <div class="hero-apoiadores-botao">
      <div class="botao-apoio">
        <a href="">Veja mais</a>
      </div>
    </div>
  </div>
</section>




<section id="lugares">
  <div class="mapa container  baixo">
    <h1>Pontos de comida</h1>
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1622.027902564438!2d-46.756566485552284!3d-22.190938061517638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b6259f8f0794b3%3A0xb9e63fb8d942e740!2sRestaurante%20Forasterios!5e0!3m2!1spt-BR!2sbr!4v1691365710726!5m2!1spt-BR!2sbr"
      width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>






</section>











<div class="bg-planos">
  <section id="planos" class="container grid-1 ">

<div class="caixa-planos ">
  <!-- img plano -->
<div class="planos-img">
  <img src="assets/img/002.png" alt="">
</div>
<!-- titulo  -->
<div class="titulo-planos">
  <h6>Bairros para Apoiar</h6>
  <div class="lugares-planos">
<?php
      @session_start();
      include 'php/conexao.php';

      $tb = 'SELECT * FROM produto';
      $resulta = $conexao->query($tb);

      if ($resulta->num_rows > 0) {

        while ($row = $resulta->fetch_assoc()) {

          echo "<ul class='lista-alimentadores'>";

          echo '<li> <a href="alimentadores/alimentador.php?id=' . $row['id'] . $row['pago'] . '">' .'- &nbsp;'. $row['bairro'] . '</a></li>';

          echo "</ul>";
        }
      }

      ?>

</div>





</div>
</div>






</section>
</div>




<!-- perguntas -->
<div class="bg-perguntas cima">
<section id="perguntas-f" class="container grid-2">
  <div class="perguntas-titulo">
    <h4>Perguntas <br> <span>Frequentes</span></h4>
    <p>Aqui estão algumas possíveis perguntas frequentes que o projeto 'Forsaken Dogs' pode receber:</p>
  </div>
  <div class="caixas-perguntas">
    <div class="caixa-pergunta">
    <details>
      <summary class="summary">1. Como o projeto 'Forsaken Dogs' garante que as doações em dinheiro serão utilizadas de forma
        responsável? </summary>
      <div class="accordion-answer"><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio excepturi
        sapiente officiis magni numquam veniam beatae dolores amet, illum explicabo velit tempora error impedit
        necessitatibus! Totam aspernatur animi ratione error?</p> </div>
    </details>
    </div>
    
    <div class="caixa-pergunta">
    <details>
      <summary class="summary"> 1. Como o projeto 'Forsaken Dogs' garante que as doações em dinheiro serão utilizadas de forma
        responsável? </summary>
      <div class="accordion-answer"><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio excepturi
        sapiente officiis magni numquam veniam beatae dolores amet, illum explicabo velit tempora error impedit
        necessitatibus! Totam aspernatur animi ratione error?</p></div>
    </details>
    </div>
    
    <div class="caixa-pergunta">
    <details>
      <summary class="summary"> 1. Como o projeto 'Forsaken Dogs' garante que as doações em dinheiro serão utilizadas de forma
        responsável? </summary>
      <div class="accordion-answer"><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio excepturi
        sapiente officiis magni numquam veniam beatae dolores amet, illum explicabo velit tempora error impedit
        necessitatibus! Totam aspernatur animi ratione error? </p></div>
    </details>
    </div>
    
   
  </div>

</section>



<!-- FIM DOS LUGARES -->
<!-- CONTATO -->

  <section id="contato" class="container  baixo">

    <div class="screen">
      <div class="screen-header">
        <div class="screen-header-left">
          <div class="screen-header-button close"></div>
          <div class="screen-header-button maximize"></div>
          <div class="screen-header-button minimize"></div>
        </div>
        <div class="screen-header-right">
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
        </div>
      </div>
      <div class="screen-body">
        <div class="screen-body-item ">
          <div class="app-title">
            <span>Entre em contato </span>

          </div>
          <div class="app-contact">Contato: (19)9 99384-3063</div>
        </div>
        <form action="" class="screen-body-item" method="post">


          <div class="app-form">
            <div class="app-form-group">
              <input class="app-form-control" placeholder="Nome" name="nome">
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="Email" name="email">
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="Assunto" name="assunto">
            </div>
            <div class="app-form-group message">
              <input class="app-form-control" placeholder="Mensagem" name="mensagem">
            </div>
            <div class="app-form-group buttons">

              <input type="submit" class="app-form-button" value="Enviar">
        </form>

      </div>
    </div>
</div>
</div>
</div>


</section>

</div>
<?php
include_once('footer.php');
?>
