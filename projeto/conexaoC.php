<?php
	$host="localhost";
	$user = "root";
	$pass = "minas";//lucca
	$banco = "empresa";

	$conexao = mysqli_connect($host, $user, $pass, $banco);
mysqli_set_charset($conexao, "utf8");

if(!$conexao)
	echo "Falha na conexão do Database!" . mysqli_connect_error();
else
?>