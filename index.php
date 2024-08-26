<?php
include_once('header.php');
?>

<!-- HERO -->
<section id="hero" class="container grid-2 cima">
  <!-- HERO TITULO -->
  <div class="hero-titulo">
    <h1><span> Nutri-Cão </span><br> uma companhia que está para <span>mudar o mundo!</span></h1>



    <p>Com o projeto Nutri-Cão, esperamos não apenas fornecer alimentos para cães abandonados, mas também criar
      um sistema mais humano de cuidados para esses animais. Acreditamos que todos os cães merecem amor e cuidado,
      independentemente de sua condição, e estamos trabalhando para construir uma comunidade que compartilha essa
      visão.</p>
    <button class="hero-btn"> <a href="./torne-apoiador.php">APOIE A CAUSA</a></button>
  </div>
  <div class="hero-img"><img src="assets/img/cachorro1.png" alt=""></div>

  <!-- HERO IMG -->

</section>

<!-- CARDS HERO -->
<section class="cards-hero container">
  <nav>
    <ul class="grid-4">
      <li>
        <div class="card-hero"><a href="./doacao-anonima.php">
            <i class="fa-solid fa-handshake-angle"></i>
            <h4>Colabore Anônimamente </h4>
          </a></div>
      </li>
      <!-- 2 -->
      <li>
        <div class="card-hero"><a href="./torne-apoiador.php">
            <i class="fa-solid fa-people-group "></i>
            <h4>Torne-se um Apoiador</h4>
          </a></div>
      </li>
      <!-- 3 -->
      <li>
        <div class="card-hero"><a href="./alimentadores.php">
            <i class="fa-solid fa-location-dot"></i>
            <h4>Bairros Precisando de Alimentador</h4>
          </a></div>
      </li>
      <!-- 4 -->
      <li>
        <div class="card-hero"><a href="#contato">
            <i class="fa-solid fa-comments"></i>
            <h4>Entre em Contato Conosco</h4>
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
        <h1>Sobre Nu<span>triC</span>ão</h1>
      </div>
      <div class="sobre-subtitulo">
        <p>Nutri-Cão é um projeto que busca ajudar cães abandonados por meio de doações e
          colaboração das pessoas e empresas. A fome e a desnutrição são problemas comuns enfrentados por
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
            <p>A missão da Nutri-Cão é ajudar cães abandonados a terem uma fonte confiável de
              alimento e a melhorar sua qualidade de vida. Queremos colaborar com a comunidade local
              para enfrentar o problema da fome e desnutrição dos cães de rua, usando nossos alimentadores
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
          <p>As máquinas de ração desenvolvidas pela Nutri-Cão são feitas de canos PVC montaveis, assim facilitando a higienização e
            evitando o desperdício alem de
            garantir que todos os cães tenham acesso a uma quantidade adequada de alimento.</p>
          <br>
          <p>Os comerciantes podem participar do projeto, doando uma quantidade significativa para construção de alimentadores pelo nosso site
            e ajudando a distribuí-las pela cidade. As máquinas são fáceis de instalar e de higienizar.</p>
          <br>
        </div>

        <div class="check-list">
          <ul>
            <li>Ajude animais</li>
            <li>Economico</li>
            <li>Facil acesso</li>
          </ul>
        </div>
        <div class="botao-apoio">
          <div class="wrapper">
            <div class="link_wrapper">
              <a href="./torne-apoiador.php">Apoie a causa!</a>


            </div>
          </div>
        </div>
      </div>


    </div>
  </section>



  <section id="apoiadores-h" class="secao">
    <div class="hero-apoiadores container">
      <div class="titulo-apoiadores">
      </div>
      <div class="apoiadores-logos">
        <!--  -->
        <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <!-- <ul class="grid-3"> -->
            <?php
            @session_start();
            include 'php/conexao.php';
            $tb = "SELECT logo FROM usuario WHERE divulgar='S' AND nivel='P' AND ativo='S'";
            $resulta = $conexao->query($tb);
            if ($resulta->num_rows > 0) {
              while ($row = $resulta->fetch_assoc()) {
                $foto_logotipo = $row['logo'];
                echo "<div class='swiper-slide'><img src='./assets/img/img-usu/{$foto_logotipo}' alt=''></div>";
              }
            }
            ?>
   
        </div>

        <div class="swiper-scrollbar"></div>
        </div>
            <!-- </ul> -->

    </div>

  </section>




  <section id="lugares">
    <div class="mapa container  baixo">
      <h1>Pontos de comida</h1>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1622.027902564438!2d-46.756566485552284!3d-22.190938061517638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b6259f8f0794b3%3A0xb9e63fb8d942e740!2sRestaurante%20Forasterios!5e0!3m2!1spt-BR!2sbr!4v1691365710726!5m2!1spt-BR!2sbr" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>






  </section>











  <div class="bg-planos">
    <section id="planos" class="container  grid-2">

      <div class="caixa-planos  ">
        <!-- img plano -->
        <!-- titulo  -->
        <div class="titulo-planos">
          <h6>Bairros Precisando de Ajuda</h6>

          <div class="lugares-planos ">
            <ul class="lista-alimentadores 
            ">
              <?php
              @session_start();
              include 'php/conexao.php';

              $tb = 'SELECT * FROM produto';
              $resulta = $conexao->query($tb);

              if ($resulta->num_rows > 0) {

                while ($row = $resulta->fetch_assoc()) {


                  echo '<li> <a href="alimentadores/alimentador.php?id=' . $row['id'] . '">' . '- &nbsp;' . $row['bairro'] . '</a></li>';
                }
              }

              ?>
            </ul>
          </div>





        </div>
      </div>





      <div class="planos-img ">
        <img src="assets/img/002.png" alt="">
      </div>

    </section>

  </div>




  <!-- perguntas -->
  <div class="bg-perguntas cima">
    <section id="perguntas-f" class="container grid-2">
      <div class="perguntas-titulo">
        <h4>Perguntas <br> <span>Frequentes</span></h4>
        <p>Aqui estão algumas possíveis perguntas frequentes que o projeto 'Nutri-Cão' pode receber:</p>
      </div>
      <div class="caixas-perguntas">
        <div class="caixa-pergunta">
          <details>
            <summary class="summary">Como funciona o processo de doação para manter os alimentadores em operação?
            </summary>
            <div class="accordion-answer">
              <p>Nosso projeto depende da generosidade da comunidade para se sustentar. As doações financeiras podem ser feitas através do nosso site, onde garantimos total transparência na gestão dos recursos. Além disso, estabelecemos parcerias com empresas locais que apoiam a iniciativa, garantindo uma fonte contínua de fundos. Todo valor arrecadado é destinado à manutenção dos alimentadores, compra de alimentos de qualidade e implementação de melhorias nos equipamentos.

              </p>
            </div>
          </details>
        </div>

        <div class="caixa-pergunta">
          <details>
            <summary class="summary"> Qual é o impacto real desses alimentadores na comunidade de cães de rua?
            </summary>
            <div class="accordion-answer">
              <p>Os resultados do nosso projeto têm sido incrivelmente positivos. Observamos uma redução significativa nos casos de desnutrição entre os cães de rua atendidos pelos alimentadores. Além disso, a melhoria da saúde geral desses animais é evidente, com relatos de veterinários locais destacando a diferença notável. Histórias de resgates bem-sucedidos e adoções de cães que passaram pelo nosso programa também destacam o impacto duradouro que estamos tendo na vida desses animais.
              </p>
            </div>
          </details>
        </div>

        <div class="caixa-pergunta">
          <details>
            <summary class="summary">Como posso contribuir ou participar ativamente do projeto?

            </summary>
            <div class="accordion-answer">
              <p>
                Existem várias maneiras de se envolver conosco. Para contribuições financeiras, visite nosso site e escolha a opção de doação. Se preferir fazer doações físicas, como comida para cães, entre em contato conosco para obter informações sobre pontos de coleta locais. Além disso, estamos sempre à procura de voluntários dedicados para auxiliar na manutenção dos alimentadores, na distribuição de alimentos e até mesmo na sensibilização da comunidade sobre a causa. Compartilhar nossa missão nas redes sociais também é uma maneira valiosa de aumentar a conscientização. Juntos, podemos fazer a diferença na vida desses animais necessitados.
              </p>
              </p>
            </div>
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