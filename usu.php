<?php
include_once 'header.php';
if (session_status() != PHP_SESSION_ACTIVE) session_start();

if (!isset($_SESSION['id']) && !isset($_SESSION['email']) && !isset($_SESSION['senha']) && !isset($_SESSION['nivel'])) {
    $_SESSION = [];
    session_destroy();
    header('Location:login/');
    exit();
}
$id = $_SESSION['id'];
?>

<!-- fim -->
<!-- tabela -->
<div class="baixo">
    <h1> <span style="color:#27272a"> DADOS DE COMPRA </span> </h1>
</div>
<section id="tabela" class="container">
    <table>
        <tr class="table-header">
            <th class="header__item filter__link">Data</th>
            <th class="header__item filter__link">Bairro</th>
            <th class="header__item filter__link">Valor</th>
            <th class="header__item filter__link">Tipo</th>
        </tr>
        <?php
        // conexao
        include 'php/conexao.php';

        $produto = "SELECT venda.`data`, detalhe_venda.valor, produto.bairro, produto.tipo FROM venda 
                            LEFT OUTER JOIN detalhe_venda ON (venda.id=detalhe_venda.fk_venda_id)
                            LEFT OUTER JOIN produto ON (detalhe_venda.fk_produto_id=produto.id)
                            WHERE venda.fk_usuario_id={$id}
                            ORDER BY venda.`data` DESC";
        
        $resulta = $conexao->query($produto);        
        // date_default_timezone_set('America/Sao_Paulo'); // ajusta de hora UTC para Brasil

        if ($resulta->num_rows > 0) {
            while($row = $resulta->fetch_assoc()) {
                echo "<tr class='table-row'>";
                $data = date_create($row['data']);
                $data = $data->format('d/m/Y');
                echo "<td class='table-data'>" . $data . "</td>";
                echo "<td class='table-data'>" . $row['bairro'] . "</td>";
                echo " <td class='table-data'>R$ " . number_format($row['valor'], 2, ',', '.') . "</td>";
                echo "<td class='table-data'>" . $row['tipo'] . "</td>";
                echo "</tr>";
            }
        }
        ?>
    </table>
    <a href="login/logout.php">sair</a>
</section>
<div class="cima baixo"></div>
<?php
include_once('footer.php');
?>