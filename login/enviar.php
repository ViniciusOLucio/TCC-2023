<?php
  session_start();
include_once("../php/conexao.php");

if (isset($_POST['nome'])) {
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $cpf_cnpj = filter_input(INPUT_POST, 'cpf_cnpj', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

    $inserir = $pdo->prepare("INSERT INTO usuario(nome_razao, email, senha, cpf_cnpj, ativo, nivel, divulgar) VALUES (:nome, :email, :senha, :cpf_cnpj, 'S', 'U', 'S')");

    $inserir->bindParam(':nome', $nome, PDO::PARAM_STR, 50);
    $inserir->bindParam(':email', $email, PDO::PARAM_STR, 50);
    $inserir->bindParam(':senha', $senha, PDO::PARAM_STR, 50);
    $inserir->bindParam(':cpf_cnpj', $cpf_cnpj, PDO::PARAM_INT, 50);
   

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