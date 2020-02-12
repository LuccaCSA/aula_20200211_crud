<?php include 'conexao.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sistema de comentário</title>
	<link rel="stylesheet" href="estilo.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body >
	<style type="text/css">
  body{
  background-color: #5500FF;
  }

  </style>

 <div class="container">
 	<form method="POST" action="inserirC.php">
 	Nome:<input  class="form-control w-50" type="text" name="nome"><br>
 	E-mail:<input  class="form-control w-50" type="text" name="email"><br>
 	Comentário<textarea name="comentario" class="form-control" rows="5" style="resize: none;"></textarea>
 	<br>
 	<input type="submit" name="enviar" value="Enviar" class="col-md-6 btn btn-primary btn-lg btn-block m-auto">
 </form>
 <?php
 	$sql = "SELECT * FROM comentario ORDER BY idCom ASC";
 	$resultado = mysqli_query($conexao, $sql);
 	if (mysqli_num_rows($resultado) > 0) {
 		while ($linha = mysqli_fetch_array($resultado)) {
 			$nome = $linha['nome'];
 			$email = $linha['email'];
 			$comentario = $linha['comentario'];
 			echo "<h4>$nome</h4>";
 			echo "$email";
 			echo "<br>Comentário:<h5>$comentario</h5>";
 			echo "<hr>";
 		}
 	}
 	else{
 		echo "Sem comentarios por aqui...";
 	}
 ?>

 </div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>