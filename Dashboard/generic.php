<!DOCTYPE HTML>
<html>
	<head>
		<title>Huby</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>
		<header id="header">
			<h1><a href="index.php">Huby</a></h1>
			<a href="#nav">Menu</a>
		</header>

		<!-- Nav -->
		<nav id="nav">
			<ul class="links">
				<li><a href="index.php">Accueil</a></li>
				<li><a href="generic.php">A propos de nous</a></li>
			</ul>
		</nav>

		<!-- Main -->
		<section id="main" class="wrapper">
			<div class="container">

				<header class="major special">
					<h2>A propos de </h2>
					<p>HuBy - La pointeuse intelligent</p>
				</header>

				<a href="#" class="image fit"><img src="images/pic11.jpg" alt="" /></a>

				<p>
					L'objectif est de construire un système permettent de faciliter la gestion d’un fablab ou d’un espace de coworking. Développé initialement dans le cadre du concours remix my Energy d’EDF.
				</p>
				<p>
					Il a pour premier objectif de mesurer la consommation électrique et le nombre d’occupants puis de rendre l’information disponible via une interface web.L’objectif est aussi de le développer collaborativement entre espaces et structures pour faciliter la coopération entre les espaces.
				</p>
				<p>
					Le projet vous plaît ? Parlez-en autour de vous, chaque partage, chaque tweet peut faire la différence, et permet de faire connaître le projet, et donc de le faire avancer. Merci d'avance !
				</p>						
				<h3>Le matériel</h3>
				<p>
					Huby étant écrit en Python, il fonctionne sur à peu près toutes les plateformes : Linux, Mac, Windows. ( et même sur un serveur !) Cependant, pour un maximum d'interactions domotique, il est plus intéressant d'installer Huby sur un Raspberry Pi.
				</p>						
				<h3>Le Raspberry Pi</h3>
				<p>
					Pourquoi Huby sur un Raspberry Pi ?
				</p>
				<p>
					Le prix : 30€ environ pour un Raspberry Pi 2. Un Raspberry Pi peut être allumé en continu, sans faire un seul bruit. Il peut donc accueillir Huby en se faisant oublier.
					Un Raspberry Pi consomme très peu, environ 3€ par an d'électricité si il est branché H24. Loin de la consommation d'un PC 'classique' !
					Les ports GPIOs du Raspberry permettent d'avoir des interactions avec du matériel électronique, et donc de faire de la domotique.
				</p>
				<h3>Un Arduino</h3>
				<p>
					Le Raspberry permet certes de faire de l'électronique avec les ports GPIOs, mais celui-ci reste limité lorsqu'il s'agit de faire du "temps réel", car cela sature le CPU du Rpi. Pour des tâches comme attendre un signal radio fréquence, rien ne vaut un Arduino. Et vu le prix d'un arduino sur des sites chinois (environ 4-6€), on aurait tort de s'en priver ! L'arduino est branché à l'aide d'un réseaux en PCL au Raspberry Pi pour communiquer avec lui.
				</p>
				<h3>Les capteurs</h3>
				<p>
					Comment savoir si une personne est présente ? Rien de mieux qu'un lecteur de puce RFID pour détecter les entrées et sorties, et donc la présence d'un utilisateur.
				</p>
				
			</div>
		</section>

		<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/util.js"></script>
		<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
		<script src="assets/js/main.js"></script>
	</body>
</html>