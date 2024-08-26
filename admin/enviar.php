
<?php
include('../php/conexao.php');
if (isset($_POST['bairro'])) {
    $bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
    $valor = filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_STRING);
    $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
    $tipo = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_STRING);
    $foto = filter_input(INPUT_POST, 'foto', FILTER_SANITIZE_STRING);

    $inserir = $pdo->prepare("INSERT INTO produto(bairro, valor, descricao, tipo, foto) VALUES (:bairro, :valor, :descricao, :tipo, :foto)");

    $inserir->bindParam(':bairro', $bairro, PDO::PARAM_STR, 50);
    $inserir->bindParam(':valor', $valor, PDO::PARAM_STR, 50);
    $inserir->bindParam(':descricao', $descricao, PDO::PARAM_STR, 50);
    $inserir->bindParam(':tipo', $tipo, PDO::PARAM_STR, 50);
    $inserir->bindParam(':foto', $foto, PDO::PARAM_STR, 250);
   

    if($inserir->execute()){
      header("Location: ./");
    }else{
        echo"Falha";
    }   
}else{
    //Dados Não enviado para o banco de dados
    $_SESSION ['NãoCadastrado'] = "Cadastro não realizado";
    header("Location: ./");
}
?>