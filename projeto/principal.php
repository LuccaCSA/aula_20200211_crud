<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="									
	sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM		"crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale= 1.0">
	<title>KLG</title>
</head>
<body>
	 <div id="BarraAcesso">
	 	  <div class="row">
	 	  	<div class="col-xs-12 col-md-12 col-lg-12">
	 	  		<nav class="navbar navbar-light bg-light navbar-expand-lg">
	 	  			<a class="navbar-brand" href="#">
	 	  				<img src="img/logo do site.png" width="100" height="100"  class="d-inline-block align-center" alt="KLG">
              KLG
            </a>
	 	  			<button class="navbar-toggler"
	 	  			type="button"
	 	  			data-toggle="collapse"
	 	  			data-target="#navbarNav" aria-controls="navbarNav"
	 	  			aria-expanded="false" aria-label="Navegação Toggle">
	 	  				<span class="navbar-toggler-icon"></span>
	 	  			</button>

	 	  			<div class="collapse navbar-collapse justify-content-between" id="navbarNav">
   					 <ul class="navbar-nav">
     				 <li class="nav-item">
     				   <a class="nav-link" href="#">PS4</a>
     				 </li>
      				<li class="nav-item">
      				  <a class="nav-link" href="#">XBOX</a>
     				 </li>
     				 <li class="nav-item">
      				  <a class="nav-link" href="#">Switch</a>
     				 </li>
     				 <li class="nav-item">
      				  <a class="nav-link" href="#">PC</a>
     				 </li>
     				 <li class="nav-item dropdown">
     				 	<a class="nav-link dropdown-toggle" href="#" id="linkDrop"
     				 	data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
     				 		DESTAQUES
     				 	</a>
     				 	<div class="dropdown-menu" aria-labelleby="linkDrop">
     				 		<a href="#" class="dropdown-item">Novidades</a>
     				 		<a href="#" class="dropdown-item">Jogos</a>
     				 	</div>

     				 </li>
    					</ul>

    					<form class="form-inline">
    						<input class="form-control mr-sm-2 "type="text" placeholder="Pesquisar..." aria-label="Pesquisar"></input>
    						<button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
    					</form>
  				</div>
	 	  		</nav>
	 	  	</div>
	 	  </div>
	 	</div>
	 	<div class="container" id="Corpo">
	 		<br>
	 		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  			<div class="carousel-inner">
    	<div class="carousel-item active">
      	<img src="img/dsII.jpg" class="d-block w-100" alt="Death Stranding">
      	 <div class="carousel-caption d-none d-md-block">
          <h5>Death Stranding</h5>
          <p>Confira as novidades do novo jogo de Kojima</p>
        </div>
   		</div>
    	<div class="carousel-item">
      	<img src="img/CPII.jpg" class="d-block w-100" alt="Cyberpunk 2077">
      	<div class="carousel-caption d-none d-md-block">
          <h5>Cyberpunk2077</h5>
          <p>O novo game da CD Projekt Red será lançado para PlayStation 4, Xbox One e PC em 16 de abril de 2020</p>
        </div>
    	</div>
    	<div class="carousel-item">
     	<img src="img/SWIII.jpg" class="d-block w-100" alt="Star Wars Jedi Fallen Order">
     	<div class="carousel-caption d-none d-md-block">
          <h5>Star Wars Jedi Fallen Order</h5>
          <p>O título da Electronic Arts e da Respawn Entertainment será lançado em 15 de novembro</p>
        </div>
  		</div>
  		<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
   		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    	<span class="sr-only">Previous</span>
  		</a>
  		<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
    	<span class="sr-only">Next</span>
  		</a>
		</div>
	 	</div>
	 	<br>
	 	<div class="card-deck">
  <div class="card">
    <img src="img/XBOX.png" class="card-img-top" alt="GAME PASS">
    <div class="card-body">
      <h5 class="card-title">XBOX GAME PASS</h5>
      <p class="card-text">X019: Novidades do novo game pass do XBOX anunciadas pela Microsoft</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 55 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="img/FN.jpg" class="card-img-top" alt="Fortnite" class="thumb">
    <div class="card-body">
      <h5 class="card-title">Atualização Fortnite</h5>
      <p class="card-text">V11.11 já está disponível para o game</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 49 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="img/M.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Minecraft Dungeons</h5>
      <p class="card-text">Minecraft Dungeons será lançado em abril de 2020 para consoles e PCs</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>
<br><br>

<div class="row">

<div class="col-xs-6 col-md-6 col-lg-6">
  <h2>Death Stranding</h2>
      <img class="img-fluid" width="540" height="360" src="img/dsII.jpg" alt="Death Stranding" align="align-center">
     </div> 
      <div class="col-xs-6 col-md-6 col-lg-6">
        <br><br><p>Death Stranding é o mais novo jogo de Hideo Kojima, criador da série Metal Gear, a chegar para o PlayStation 4 após um longo período de desenvolvimento. O game traz uma jornada solitária através de um mundo fragmentado e misterioso com o objetivo de reconectar a sociedade. Sua jogabilidade é um misto de aventura em mundo aberto com trechos de combate e stealth, porém a grande novidade é um sistema de interação indireto no qual suas ações podem ter reflexos na jornada de outros jogadores. 
        <br>
       A jogabilidade básica do jogo é andar com Sam pelo mundo para entregar alguns itens em algum destino distante enquanto diversos obstáculos tentam impedi-lo. O mais comum desses obstáculos é o relevo, pois o mundo é simplesmente grande e acidentado. Para atravessar esses desafios o jogador precisa de auxílios como escadas para atravessar abismos ou chegar a locais altos e às vezes poderá encontrar veículos úteis como motos.
        </p>
      </div>
      <br>
      <div class="col-xs-6 col-md-6 col-lg-6">
      <h2>CYBERPUNK 2077</h2>
      <img class="img-fluid" width="540" height="360" src="img/CPII.jpg" alt="Cyberpunk2077" align="align-center">
      </div>
      <div class="col-xs-6 col-md-6 col-lg-6">
        <br><br><p>Cyberpunk 2077 é um jogo de RPG de mundo aberto para PS4, Xbox One e PC baseado no RPG de mesa Cyberpunk 2020. O lançamento foi confirmado para o dia 16 de abril de 2019 junto do trailer de gameplay estrelado pelo ator Keanu Reeves durante a E3 2019. Desenvolvido pela CDProjekt Red, mesma criadora de The Witcher 3: Wild Hunt, o game traz um enredo que se passa em um futuro distópico, na violenta metrópole de Night City, que é regida por grandes corporações. É lá onde V, o protaginista cyberpunk em ascensão, vive.<br>
        No título, o jogador será capaz de personalizar totalmente o protagonista, com escolhas de gênero, classe e histórico de vida. Os diálogos e ações prometem ser imersivos, com sistemas de escolhas que afetarão o enredo. Também será possível controlar veículos pelo mapa, que prometem ser imensos como em outros jogos do gênero Open World.
        </p>
      </div>

      <div class="col-xs-6 col-md-6 col-lg-6">
        <br>
      <h2>STAR WARS</h2>
      <img class="img-fluid" width="540" height="360" src="img/SWIII.jpg" alt="Star WARS The Fallen Order" align="align-center">
      </div>
      <div class="col-xs-6 col-md-6 col-lg-6">
        <br><br><br><p>Prepare-se para cruzar a galáxia em Star Wars Jedi: Fallen Order™, uma nova aventura em terceira pessoa cheia de ação da Respawn Entertainment. Este jogo para um jogador focado na narrativa coloca você na pele de um padawan que escapou por pouco do expurgo da Ordem 66, após os eventos do Episódio III – A Vingança dos Sith. Em um esforço para reerguer a Ordem Jedi, você precisa reunir os fragmentos do seu passado, completar seu treinamento, desenvolver novas habilidades com a Força e dominar a arte do lendário sabre de luz — tudo isso enquanto despista o Império e seu letais inquisidores. <br>
        Enquanto assimilam suas habilidades, os jogadores vão usar sabres de luz e a Força em confrontos cinematográficos, criados para oferecer a intensidade dos combates com sabre de luz vistos nos filmes de Star Wars.
        </p>
    </div>
    <br>
    <br>
</div>

<?php include'footer.php'?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
