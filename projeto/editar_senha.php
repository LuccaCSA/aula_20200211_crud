 <?php
	session_start();
	include 'conexao.php';

	if(empty($_SESSION["login"])) {
		echo "<script>alert('Faça o login primeiramente!')</script>";
		header("Location:login.php");
	}

	if (isset($_POST["senhaatual"]) && isset($_POST["novasenha"]) && isset($_POST["confirmasenha"])) {
		$senha_atual = $_POST["senhaatual"]; 
		$nova_senha = $_POST["novasenha"];
		$confirma_senha = $_POST["confirmasenha"];

		$login = $_SESSION["login"];

		$sql = "SELECT * FROM usuarios WHERE login = '$login'";

		$resultado = mysqli_query($conexao, $sql);

		$vetor = mysqli_fetch_array($resultado);

		$senhabd = $vetor["senha"];

		if ($confirma_senha != $nova_senha) {
			echo "<script>alert('A senha digitada está diferente da senha cadastrada, tente novamente!')</script>";
		} else if ($senha_bd == md5($nova_senha)) {
			echo "<script>alert('A senha nova está igual a senha antiga, (ja cadastrada) tente novamente!')</script>";
		} else {
			$nova_senha = md5($nova_senha);
			$sql = "UPDATE usuario SET senha='$nova_senha' WHERE login = '$login'";

			if (mysqli_query($conexao, $sql)) {
				echo "<script>alert('Senha alterada com sucesso!')</script>";
				header("Location:index.php");
			}
			else{
				echo "<script>alert('Erro na alteração da senha, tente novamente!')</script>";
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>ALTERAR SENHA DO USUÁRIO</title>
		<!-- Meta tags Obrigatórias -->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Arquivo CSS Bootstrap -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<!-- Arquivo CSS do projeto -->
		<link rel="stylesheet" href="css/estilo.css" />
		<!-- CSS interno -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="									
	sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM		"crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale= 1.0">
		<style>
		.container {
			max-width: 960px;
		}
		body {
			background-color: #823bfa;
		}
		

		</style>
  </head>

  <body>

    <div class="container">
      <div class="py-5 text-center">
        <h2  style="color: white;">Alteração de Senha</h2>
      </div>
	  
	    
      
        <div class="col-md-12 text-center">
          <form class="needs-validation" novalidate method="post" action="">                                 

			<div class="col-md-12 mb-3 text-left">
              	<label for="senha"  style="color: white;">Informe sua senha atual</label>
                <input type="password" class="form-control" name="senhaatual" id="senha" placeholder="" required>
            </div>

            <div class="col-md-12 mb-3 text-left">
              	<label for="senha"  style="color: white;">Digite sua nova senha</label>
                <input type="password" class="form-control" name="novasenha" id="novasenha" placeholder="" required>
            </div>

            <div class="col-md-12 mb-3 text-left">
              	<label for="senha"  style="color: white;">Confirme sua nova senha</label>
                <input type="password" class="form-control" name="confirmasenha" id="novasenha" placeholder="" required>
            </div>

            <div class="col-md-12 mb-3 text-left">

              
	  	  </div>
		
          
        <hr class="mb-4">
		<div id="row">
		<div class="col-md-12">
            <button class="col-md-6 btn btn-primary btn-lg btn-block m-auto" type="submit"  style="color: white;">Atualizar senha</button>
          </form>		  
        </div>	
		</div>
		
	  

	  <footer class="my-5 pt-5 text-muted text-center text-small">
        <p  class="mb-1" style="color: white;">&copy; KLG - SITE DE NOTICIAS DO MUNDO NERD & GEEK</p>
      </footer>
	  
  	</div><!-- fim class container -->	
	<!-- documentos javascript -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
  </body>
</html>