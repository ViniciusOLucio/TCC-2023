<?php
include_once('header.php');
?>


    <section class="apoiador-pagina container" >
        <?php
        @session_start();
        include 'php/conexao.php';
        $tb = "SELECT * FROM usuario WHERE nivel='P' AND ativo='S' AND id='".$_GET['id']."'";
        $resulta = $conexao->query($tb);
        if ($resulta->num_rows > 0) {
          while ($row = $resulta->fetch_assoc()) {
            $nome = $row['nome_fantasia'];
            $foto = $row['logo'];
            $endereco = $row['endereco'];
            $endereco_2 = $row['cidade'];
            $descricao = $row['descricao'];
            $contato = $row['telefone'];
            $contato_2 = $row['email'];

            echo "<img src='./assets/img/img-usu/{$foto}' alt='' class='img-apoiador'>"; 
            echo '</scetion>'; 
            // 
            echo '<div class=" ">';
            // 
         
            // 
            echo '<p class="paragrafo-descricao">';
            echo $descricao;   
            echo '</p>'; 
            // 
            echo '<p class="paragrafo-apoiador">';
            echo 'Endereço: '.$endereco. "&nbsp// &nbsp". $endereco_2;   
            echo '</p>';
            echo '<p class="paragrafo-apoiador">';
            echo 'Contato: '.$contato. "&nbsp// &nbsp". $contato_2;   
            echo '</p>'; 
            echo '</div>';             
          }
        }
        ?>

    </section>
    <?php
include_once('footer.php');
?>
