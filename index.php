<?php
include_once('header.php');
?>

    <!-- HERO -->
    <section id="hero" class="container grid-2 cima">
        <!-- HERO TITULO -->
        <div class="hero-titulo">
            <h1><span> Forsaken Dogs </span><br> uma companhia que está para <span>mudar o mundo!</span></h1>

            <!-- botao hero -->
            <div class="botao-hero">
                <!-- <div class="botao-apoio">
                        <a href="">Apoie a causa</a>
                    </div> -->
            </div>
            <!-- fim do botao -->
        </div>
        </div>

        <!-- HERO IMG -->
        <div class="hero-apoiadores">
            <div class="titulo-apoiadores">
                <h4>Conheça alguns de nossos apoiadores!</h4>
            </div>
            <div class="apoiadores-logos">
            <ul class="grid-4">
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

    <!-- CARDS HERO -->
    <section class="cards-hero container">
        <nav>
            <ul class="grid-4">
                <li>
                    <div class="card-hero"><a href="">
                            <ion-icon name="accessibility-outline"></ion-icon>
                            <h4>Apoie já</h4>
                        </a></div>
                </li>
                <!-- 2 -->
                <li>
                    <div class="card-hero"><a href="">
                            <ion-icon name="accessibility-outline"></ion-icon>
                            <h4>Apoiadores</h4>
                        </a></div>
                </li>
                <!-- 3 -->
                <li>
                    <div class="card-hero"><a href="">
                            <ion-icon name="accessibility-outline"></ion-icon>
                            <h4>Lugares</h4>
                        </a></div>
                </li>
                <!-- 4 -->
                <li>
                    <div class="card-hero"><a href="">
                            <ion-icon name="accessibility-outline"></ion-icon>
                            <h4>Contato</h4>
                        </a></div>
                </li>
            </ul>
        </nav>
    </section>

    <!-- coluna branca -->
    <div class="col-100 cor-branca grid-1">
        <!-- carotes -->






        <section id="sobre" class="container baixo cima ">
            <!-- caixa 1 -->
            <div class="sobre-caixa-1">
                <div class="sobre-titulo">
                    <h1>S<span>obre Forsaken Dogs</h1>
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









    </div>





    <section id="lugares">
        <div class="mapa container  baixo">
            <h1>Pontos de comida</h1>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1622.027902564438!2d-46.756566485552284!3d-22.190938061517638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b6259f8f0794b3%3A0xb9e63fb8d942e740!2sRestaurante%20Forasterios!5e0!3m2!1spt-BR!2sbr!4v1691365710726!5m2!1spt-BR!2sbr"
                width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>






    </section>












    <div class="col-100 cor-cinza">
        <section id="planos" class="container baixo cima">




        
 



            <div class="plano apresentou">
                <h3>Alimentador</h3>
                <div class="icon">
                    <i class="fa-solid fa-dog"></i>
                </div>

                <div class="alimentadores-pagos">
                    <h3>Lugares Para ajudar!</h3>
                </div>

                
                <?php
                @session_start();
                include 'php/conexao.php';

                $tb = 'SELECT * FROM produto';
                $resulta = $conexao->query($tb);
        
                if ($resulta->num_rows > 0) {

                    while ($row = $resulta->fetch_assoc()) {
                      
                            $valor = $row["pago"];
                            if($valor=='S'){
                                $color="pago";
                                $escrita='Pago';
                              }else{
                                $escrita='Não Pago';
                                $color="nao-pago";
                              }
                        echo "<ul class='lista-alimentadores'>";
                   
                        echo '<li class='.$color.'> <a href="alimentadores/alimentador.php?id='.$row['id'].$row['pago'].'">'.  $row['bairro']  . '&nbsp;-&nbsp;' . $escrita .'</a></li>';  
                        
                        echo "</ul>";
                    }
                    }
                
                ?>




                <div class="botao-apoio">
                    <a href="./alimentadores/index.html">AJUDE AGORA!</a>
                </div>
            </div>
    </div>  

    </section>


    </div>


    <!-- LUGARES -->
    <div class="col-100 cor-preta">
        <section class="lugares">








        </section>
    </div>


    <!-- FIM DOS LUGARES -->
    <!-- CONTATO -->
    <div class="col-100 cor-preta">
    <section id="contato" class="container cima baixo">

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
                <form action=""class="screen-body-item" method="post">

               
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
              
                            <input type="submit"class="app-form-button" value="Enviar">
                        </form>
                       
                    </div>
                </div>
            </div>
        </div>

   

    </section>
</div>
<<<<<<< HEAD:index.php

<?php
include_once('footer.php');
?>
=======

    <!-- FOOTER -->
    <div class="col-100 cor-branca">
        <footer class="grid-3 container">
            <div class="footer-1">
                <h4>Forsaken Dogs</h4>
                <ul style="display: flex;">
                    <li><a href="#inicio">inicio</a></li>
                    <li><a href="#ajude">Ajude</a></li>
                    <li><a href="./termosdeuso.html">Termos</a></li>
                    <li><a href="#sobre">Sobre</a></li>
                </ul>
                <p>Forsaken Dogs &copy; 2023</p>
                <h6><a href="https://www.linkedin.com/in/vinicius-lucio-156004241/">Site Desenvolvido por Vinicius
                        Lucio</a> </h6>
            </div>
            <div class="footer-2">
                <ul>
                    <li><i class="fa-solid fa-location-dot"></i>Av Trabalhadores</li>
                    <li><i class="fa-solid fa-phone"></i>(19)99384-3063</li>
                    <li><i class="fa-solid fa-envelope"></i>Forsakendogs@gmail.com</li>
                </ul>
            </div>
            <div class="footer-3">
                <h4>Sobre a companhia</h4>

                <p>Com o projeto Forsaken Dogs, esperamos não apenas fornecer alimentos para cães abandonados, mas
                    também criar um sistema mais humano de cuidados para esses animais. Acreditamos que todos os cães
                    merecem amor e cuidado, independentemente de sua condição, e estamos trabalhando para construir uma
                    comunidade que compartilha essa visão.</p>
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>




        </footer>
    </div>
</body>

</html>
>>>>>>> d98b08298d7efb4bbfd1d04f2771dc89094bff9b:index.html
