<?php
	include "conexao.php";

 	$nome = $_POST["nome"];
 	$email = $_POST["email"];
 	$comentario = $_POST["comentario"];
 
 	$sql = "INSERT INTO comentario VALUES (NULL, '$nome', '$email', '$comentario')";
 	$query = mysqli_query($conexao, $sql);
 	if ($query) {
 	echo "<script>alert('Cadastro realizado com sucesso!')</script>";
    }
    else {
	echo "<script>alert('ERRO!')</script>";
   }

   echo "<script>window.location.href='KLG.php';</script>";
  ?>