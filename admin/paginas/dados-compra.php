

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../assets/css/scss/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&family=Saira:wght@400;700&display=swap"
    rel="stylesheet">
    <title>Dados Gerais</title>
</head>
<body>
    

<h1>  <span style="color:#1e293b;"> Dados de Compra </span> </h1>

<section id="tabela" class="container">
   
    <table>
        <tr class="table-header">
        <th class="header__item filter__link">ID</th>
        <th class="header__item filter__link">Empresa</th>
        <th class="header__item filter__link">Usuario</th>
        <th class="header__item filter__link">Data</th>
        <th class="header__item filter__link">Bairro</th>
        <th class="header__item filter__link">Valor</th>
        <th class="header__item filter__link">Tipo</th>
</tr>
        <?php
        // conexao
        include '../../php/conexao.php';

        $produto = "SELECT venda.id, venda.`data`, detalhe_venda.valor, produto.bairro, produto.tipo FROM venda 
                            LEFT OUTER JOIN detalhe_venda ON (venda.id=detalhe_venda.fk_venda_id)
                            LEFT OUTER JOIN produto ON (detalhe_venda.fk_produto_id=produto.id)
                            WHERE venda.fk_usuario_id
                            ORDER BY venda.`data` DESC";
        
        $resulta = $conexao->query($produto);        
        // date_default_timezone_set('America/Sao_Paulo'); // ajusta de hora UTC para Brasil

        if ($resulta->num_rows > 0) {
            while($row = $resulta->fetch_assoc()) {
                echo "<tr class='table-row'>";
                $data = date_create($row['data']);
                $data = $data->format('d/m/Y');
                
                echo "<td class='table-data'>" . $row['id'] . "</td>";
                echo "<td class='table-data'>" . $data . "</td>";
                echo "<td class='table-data'>" . $row['bairro'] . "</td>";
                echo " <td class='table-data'>R$ " . number_format($row['valor'], 2, ',', '.') . "</td>";
                echo "<td class='table-data'>" . $row['tipo'] . "</td>";
                echo "</tr>";
            }
        }
        ?>
    </table>

    </table>
    

    </section>



</body>
</html>
