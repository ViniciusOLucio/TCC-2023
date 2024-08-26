<?php 
$pag = 'bairros';
 ?>
<h1>  <span style="color:#1e293b;"> Bairros </span> </h1>
<section id="tabela" class="container">

<?php

echo"<a href='index.php?pagina=adicionar' class='adic-bairro'> Adicionar novo bairro <ion-icon name='add-circle-outline'></ion-icon> </a>";


?>
    <table>
        <tr class="table-header">
        <th class="header__item filter__link">ID</th>
        <th class="header__item filter__link">Bairro</th>
        <th class="header__item filter__link">Valor</th>
        <th class="header__item filter__link">Descrição</th>
        <!-- <th class="header__item filter__link">Foto</th> -->
        <th class="header__item filter__link">Tipo</th>
        <th class="header__item filter__link">Remover</th>
</tr>
        <?php
        // conexao
        

      
        $tb = 'SELECT * FROM produto';
        $resulta = $conexao->query($tb);

        if ($resulta->num_rows > 0) {

            while ($row = $resulta->fetch_assoc()) {
                echo "<tr class='table-row'>";
    
                
                echo "<td class='table-data'>" . $row['id'] . "</td>";
                echo "<td class='table-data'>" . $row['bairro'] . "</td>";
                echo " <td class='table-data'>R$ " . number_format($row['valor'], 2, ',', '.') . "</td>";
                // echo "<td class='table-data'>" . $row['foto'] . "</td>";
                echo "<td class='table-data'>" . $row['descricao'] . "</td>";
                echo "<td class='table-data'>" . $row['tipo'] . "</td>";
                echo"<td class='table-data'> <a href='excluir.php?id=" . $row['id'] . "' 
                class='adic-bairro excluir-bairro'> Remover Bairro <ion-icon name='remove-outline'></ion-icon> </a> </td>";
                echo "</tr>";
            }
        }
        ?>
    </table>

