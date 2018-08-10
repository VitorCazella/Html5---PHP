<!DOCTYPE html>
<html>
	<head>
		<title>Filmes</title>
		<meta charset="UTF-8"/>
		<meta name="author" content="Vitor">
		<meta name="description" content="Filmes"/>
		<meta name="keywords" content="filmes, filme">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="icon" href="img/film.ico" type="image/x-icon" />
		<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>-->
	</head>
	<body>
		<header>
			<img src="img/filmes.png" height="200px" width="200px" style="margin-left: 50px; border: 0.5px black solid;"/>
			<ul>
			    <li><b><a href="index.html" class="button">Menu</a></b></li>
			    <li><b><a href="#" class="button">Ação</a></b></li>
			    <li><b><a href="#" class="button">Comédia</a></b></li>
			    <li><b><a href="#" class="button">Terror</a></b></li>
			    <li><b><a href="#" class="button">Românce</a></b></li>
		    </ul>
		</header>

		<section>
			<aside>
				Nome: <?php echo $_GET["name"]; ?>
				Tipo: <?php echo $_GET["subname"]; ?>
			</aside>
			<article style="text-align: center">
		  		article
			</article>
		</section>
		
		<footer>
		  <p>Copyright@VitorAntunesCazella, todos os direitos reservados</p>
		</footer>
	</body>
	
</html>