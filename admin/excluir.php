<?php

session_start();
include_once("../php/conexao.php");


    $inserir = $pdo->prepare("DELETE FROM produto WHERE id='".$_GET['id']."'");

   

    if($inserir->execute()){
        header('Location:./');
    }else{
        echo"Falha";
    }   

?>