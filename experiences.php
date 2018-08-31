<!-- Page expériences avec Navbar, animation des compétences et parcours pro -->

<!DOCTYPE html>
<html lang="fr">
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../PHP_Avance_Portfolio/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<head>
	<title>Portfolio de Christophe</title>
</head>
<body>
	<div class="container">
		<h1>Bienvenue sur mon Portfolio !</h1>
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="../PHP_Avance_Portfolio/index.php">Accueil</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="../PHP_Avance_Portfolio/projets.php">Réalisation de Projet <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="../PHP_Avance_Portfolio/hobbies.php">Hobbies - Centres d'interêts</a>
				</li>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="../PHP_Avance_Portfolio/experiences.php">Expériences</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="../PHP_Avance_Portfolio/coordonnees.php">Coordonnées</a>
				<li class="nav-item active">
					<a class="nav-link" href="../PHP_Avance_Portfolio/contact.php">Contact</a>
				</ul>
			</div>
		</nav>
		<div class="container">
			<h2>Expériences :</h2>
			<h2>Formations :</h2>
			<img class="wac" src="../PHP_Avance_Portfolio/wac.png" width="40%">
			<br>
			<img class="htmlimg" src="../PHP_Avance_Portfolio/html.png" width="10%">
			<div class="progress-outer">
				<div class="progress">
					<div class="progress-bar progress-bar-info progress-bar-striped active" 
					style="width:60%;"></div>
					<div class="progress-value">
						<p>60%</p>
					</div>
				</div>
			</div>
			<img class="cssimg" src="../PHP_Avance_Portfolio/css.svg" width="10%">
			<div class="progress-outer">
				<div class="progress">
					<div class="progress-bar progress-bar-info progress-bar-striped active" 
					style="width:60%;"></div>
					<div class="progress-value">
						<p>60%</p>
					</div>
				</div>
			</div>
			<img class="phpimg" src="../PHP_Avance_Portfolio/php.png" width="10%">
			<div class="progress-outer">
				<div class="progress">
					<div class="progress-bar progress-bar-info progress-bar-striped active" 
					style="width:50%;"></div>
					<div class="progress-value">
						<p>50%</p>
					</div>
				</div>
			</div>
			<img class="javaimg" src="../PHP_Avance_Portfolio/javascript.png" width="10%">
			<div class="progress-outer">
				<div class="progress">
					<div class="progress-bar progress-bar-info progress-bar-striped active" 
					style="width:40%;"></div>
					<div class="progress-value">
						<p>40%</p>
					</div>
				</div>
			</div>
		</div>
	</body>
	</html>