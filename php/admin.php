<?php
session_start();
if ($_SESSION['nivel'] != "A")  { 
    header('Location: ../usu.php');
}

if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true ) and (!isset($_SESSION['nivel']) == 'A'))
{
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location:../login/');
    exit();
}


?>