<?php 
$pag = 'usuarios';
 ?>


    

<h1>  <span style="color:#1e293b;"> Usuarios </span> </h1>

<section id="tabela" class="container-01">
   
    <table>
        <tr class="table-header">
        <th class="header__item filter__link">ID</th>
        <th class="header__item filter__link">Empresa</th>
        <th class="header__item filter__link">Usuario</th>
        <th class="header__item filter__link">Nivel</th>
        <th class="header__item filter__link">Email</th>
        <th class="header__item filter__link">Telefone</th>
        <th class="header__item filter__link">Cpf/Cnpj</th>
        <!-- <th class="header__item filter__link">Endereco</th> -->
        <th class="header__item filter__link">Cidade</th>
        <th class="header__item filter__link">Divulgar</th>
        <th class="header__item filter__link">Ativo</th>
        <th class="header__item filter__link">Data</th>
</tr>

<?php
               


                $tb = 'SELECT * FROM usuario';
                $resulta = $conexao->query($tb);
        
                if ($resulta->num_rows > 0) {

                    while ($row = $resulta->fetch_assoc()) {
                $data = date_create($row['data']);
                $data = $data->format('d/m/Y');
                
                       echo '<tr class="table-row">';
                        echo '<td class="table-data">'.  $row['id'].'</td>';
                        echo '<td class="table-data">'.  $row['nome_fantasia'].'</td>';  
                        echo '<td class="table-data">'.  $row['nome_razao'].'</td>';  
                        echo '<td class="table-data">'.  $row['nivel'].'</td>';  
                        echo '<td class="table-data">'.  $row['email'].'</td>';  
                        echo '<td class="table-data">'.  $row['telefone'].'</td>';  
                        echo '<td class="table-data">'.  $row['cpf_cnpj'].'</td>';  
                        // echo '<td class="table-data">'.  $row['endereco'].'</td>';  
                        echo '<td class="table-data">'.  $row['cidade'].'</td>';  
                        echo '<td class="table-data">'.  $row['divulgar'].'</td>';  
                        echo '<td class="table-data">'.  $row['ativo'].'</td>';  
                        echo "<td class='table-data'>" . $data . "</td>";
                        // echo '<td class="table-data">'.  $row['descricao'].'</td>';  
                        
                       echo'</tr>';    
                    }
                    }
                
                ?>

        
    <!--  -->

    </table>
    
        <!-- <tr class="table-row">
        <td class="table-data">1</td>
        <td class="table-data">Fratello</td>
        <td class="table-data">Felipe Almeida</td>
        <td class="table-data">20-08-2023</td>
        <td class="table-data">Jardim das Rosas</td>
        <td class="table-data">600</td>
        <td class="table-data">Alimentador</td> -->
    </section>


