<?php
include_once('header.php');
session_start();
print_r($_SESSION);
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
{
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location:login/');
    exit();
}



?>

    <!-- fim -->
    <!-- tabela -->
    <div class="cima">
    <h1>  <span> DADOS DE COMPRA </span> </h1>
    </div>
<section id="tabela" class="container">
   
    <table>
        <tr class="table-header">
        <th class="header__item filter__link">Data</th>
        <th class="header__item filter__link">Bairro</th>
        <th class="header__item filter__link">Valor</th>
        <th class="header__item filter__link">Tipo</th>
</tr>
        <tr class="table-row">
        <td class="table-data">20-08-2023</td>
        <td class="table-data">Jardim das Rosas</td>
        <td class="table-data">600</td>
        <td class="table-data">Alimentador</td>
        </tr>
    <!--  -->
    <tr class="table-row">
        <td class="table-data">20-08-2023</td>
        <td class="table-data">Jardim das Rosas</td>
        <td class="table-data">600</td>
        <td class="table-data">Alimentador</td>
        </tr>
        <!--  -->
        <tr class="table-row">
        <td class="table-data">20-08-2023</td>
        <td class="table-data">Jardim das Rosas</td>
        <td class="table-data">600</td>
        <td class="table-data">Alimentador</td>
        </tr>
                <!--  -->
                <tr class="table-row">
        <td class="table-data">20-08-2023</td>
        <td class="table-data">Jardim das Rosas</td>
        <td class="table-data">600</td>
        <td class="table-data">Alimentador</td>
        </tr>
    
    </table>
    

    </section>
    <div class="cima baixo"></div>
    <?php
include_once('footer.php');
?>
