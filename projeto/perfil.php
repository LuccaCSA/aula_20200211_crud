<?php
  session_start();
  include 'conexao.php';

  if(empty($_SESSION["login"])) {
    echo "<script>alert('Realizar primeiro o seu login!')</script>";
    header("Location:login.php");

  }


$login = $_SESSION["login"];

$query = mysqli_query($conexao, "SELECT * FROM usuarios WHERE login = '$login'");
$dados = mysqli_fetch_array($query);
?>





<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" type="text/css" href="css/stylesheets.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="                 
  sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM   "crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale= 1.0">

  <title>PERFIL</title>

</head>

<body style="background-color: #823bfa;">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="login.php"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"style="color: white;">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="KLG.php" style="color: white;">Página Inicial</a>
            <br>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php"style="color: white;">Sair</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="masthead" style="background-color: #00B51D">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-10 mx-auto">
          <div class="site-heading">
            <div class="col-lg-6 col-md-10 mx-auto">

<h2 style="color: white;"><?php
echo $dados['nome'];
?></h2>


          </div>
        </div>
      </div>
    </div>
  </header>


      </div>
    </div>
  </div>
  <div class="col-lg-6 col-md-10 mx-auto">
    <br>
    <br>
    <form action="editar_senha.php"> <button class="btn btn-lg btn-primary btn-block" type="submit">Alterar Senha</button>
</div><br>




  <hr>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">

          <p class="mb-1" style="color: white;">&copy; KLG - SITE DE NOTICIAS DO MUNDO NERD & GEEK</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>
</body>

</html>