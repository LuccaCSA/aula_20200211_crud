<?php
	session_start();
	include 'conexao.php';

	if ($_POST) {
			$login=$_POST["login"];
			$senha=md5($_POST["senha"]);

			$sql="SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
			$resultado = mysqli_query($conexao,$sql);

			if (mysqli_num_rows($resultado) == 1) {
				$_SESSION["login"] = $login;
				header("Location:KLG.php");
			}
			else{
				echo "<script>alert('Login e/ou Senha incorretos!')</script>";
			}
	}
?>
<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<link href="stylesheets.css" rel="stylesheet">
		<title>LOGIN DO USUÁRIO</title>
		<!-- Meta tags Obrigatórias -->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="									
	sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM		"crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale= 1.0">
		<style>
			body {
			  display: -ms-flexbox;

			  display: flex;
			  -ms-flex-align: center;
			  align-items: center;
			  padding-top: 40px;
			  padding-bottom: 40px;
			  background-color: #823bfa;
			}
		</style>	
	</head>
	<body >
	<div class="container" id="Corpo" >
	<br>
		<form class="form-signin" action="" method="post">
			<img src="img/logoT.png" width="20%" height="20%" style="text-align: center;">
			<br>
			<br>
      	  <h1 class="h3 font-weight-normal mb-5" style="color: white;">Login do Usuário</h1>
		  <input type="text" name="login" id="inputLogin" class="form-control mb-4 w-50" placeholder="Seu login" required autofocus>
		  <input type="password" name="senha" id="inputPassword" class="form-control mb-4 w-50" placeholder="Senha" required>
		  <button class="btn btn-primary btn-lg" type="submit" style="color: white;">Acessar</button>
		  <div class="semcadastro">
		  	<hr class="mb-4">
			<p style="color: white;">Não tem acesso?<a href="cadastro.php"style="color: red;"> Faça seu cadastro!</a></p>
		  </div>
		</form>
		
		
		
      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1" style="color: white;" >&copy; KLG - SITE DE NOTICIAS DO MUNDO NERD & GEEK</p>
      </footer>
	</div><!-- fim class container -->	
	<!-- documentos javascript -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>

