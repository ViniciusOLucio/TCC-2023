<?php
if (session_status() != PHP_SESSION_ACTIVE) session_start();

if (isset($_POST['email']) && !empty($_POST['senha'])) {
	include_once('../php/conexao.php');
	$id = "";
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$sql = "SELECT * FROM usuario WHERE email = '$email' and senha = '$senha'";

	$result = $conexao->query($sql);

	if (mysqli_num_rows($result) < 1) {
		$_SESSION = [];
		session_destroy();
		echo '<script>alert("Dados incorretos ou usuário inativo, contate o Administrador!")</script>';
		echo '<script>window.location="index.php"</script>';
		exit();
	} else {
		while ($row = $result->fetch_assoc()) {
			$id = $row["id"];
			$nivel =  $row["nivel"];
		}
		
		$_SESSION['id'] = $id;
		$_SESSION['email'] = $email;
		$_SESSION['senha'] = $senha;
		$_SESSION['nivel'] = $nivel;

		if ($nivel == "A")
			header('Location: ../admin/');
		else {
			header('Location: ../usu.php');
		}
	}
} else {
	header('Location: index.php');
}
