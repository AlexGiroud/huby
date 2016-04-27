<!DOCTYPE HTML>

<html>
	<head>
		<title>Huby</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />

	<body>

		<!-- Header -->
			<header id="header">
				<h1><a href="index.php">Huby</a></h1>
				<a href="#nav">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="nav">
				<ul class="links">
					<li><a href="index.php">Accueil</a></li>
					<li><a href="generic.php">A propos de nous</a></li>
					<li><a href="elements.php">...</a></li>
				</ul>
			</nav>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major special">
						<h2>A propos de </h2>
						<p>Votre assistant domotique intelligent</p>
					</header>

					<a href="#" class="image fit"><img src="images/pic11.jpg" alt="" /></a>

<p>
L'objectif est de construire un système similaire à l'assistant JARVIS du film Iron Man, capable de gérer la maison, vous réveiller au bon moment, vous prévenir quand il faut partir pour être à l'heure en fonction du trafic, etc...
</p>
<p>
Vous allez me dire : plein de projets existent déjà! et pourtant ça ressemble bien souvent à du bricolage!
</p>
<p>
En fait, je pars sur une toute autre approche. Bien souvent, les projets JARVIS sont des sortes de siri, l'utilisateur pose une question ("Quel temps fait-il ?"), le système analyse la voix, et fournit une réponse. Le problème, c'est que la reconnaissance vocale, en 2015, c'est pas encore ça... et encore moins sous linux.
</p>
<p>
Alors j'ai pris le problème à l'envers : Et si au lieu que ça soit l'homme qui sollicite vocalement l'assistant, ça soit l'assistant qui sollicite l'homme au bon moment ? C'est à dire qu'au lieu que ce soit l'utilisateur qui pose une question, ça soit l'assistant qui prenne la parole, ou fasse une action, pour aider l'utilisateur.
</p>
<p>
<h1>Imaginons un scénario :</h1>
</p>
<p>
Il est 8H, Huby me réveille car elle sait qu'à 9H je dois aller travailler, et que je mets, selon mes préférences, 30 minutes pour me préparer, et que selon l'état actuel du trafic, je vais mettre 30 minutes en voiture pour aller au bureau. Elle a vu grâce à une API de météo qu'il pleut dehors, et en profite pour me le signaler au réveil.
Dès que je sors de mon lit, elle détecte un mouvement dans la pièce et coupe le réveil, allume la lumière, et lance une playlist calme, allume la lumière de la pièce, et ouvre les volets.
Il est 8H45, je sors de chez moi pour aller travailler, Huby détecte que je ne suis plus là, elle coupe lumière et la musique. Cependant, après le boulot, je sors chez des amis, et reste dormir chez eux. Huby sait que je ne suis pas rentré (pas de mouvement n'a été détecté), et désactive donc le réveil du lendemain, car pas besoin de sonner si je ne dors pas chez moi, et que mon appartement est vide !
Le lendemain, 7H30, Huby m'envoie une notification sur mon portable pour me rappeler qu'a 9H je dois être au bureau. Elle a prit en compte la localisation de l'appartemment de mes amis, et me réveille plus tôt pour que je sois à l'heure.
Il est 19H, je rentres du bureau, Huby allume la lumière, me souhaite la bienvenue, et me notifie les messages que j'ai reçu en mon absence.
Ainsi, au lieu d'un système passif qui attend des commandes de l'utilisateur, nous avons ici un véritable assistant qui aide l'utilisateur au quotidien en prenant des iniatives. Et ce n'est pas futuriste ! Toutes les technos citées ci-dessus existent...
</p>
<p>
Après une première version sortie il y a 1 an, Huby revient avec une nouvelle version 100% réécrite en full Node.js, vous pouvez la téléchargez gratuitement et l'installer chez vous.
</p>
<p>
Le projet vous plaît ? Parlez-en autour de vous, chaque partage, chaque tweet peut faire la différence, et permet de faire connaître le projet, et donc de le faire avancer. Merci d'avance !
</p>
<p>
<h3>Le matériel</h3>
Huby étant écrite en full Node.js, elle fonctionne sur à peu près toutes les plateformes : Linux, Mac, Windows. ( et même sur un serveur !) Cependant, pour un maximum d'interactions domotique, il est plus intéressant d'installer Huby sur un Raspberry Pi.
</p>
<p>
<h3>Le Raspberry Pi</h3>
Pourquoi Huby sur un Raspberry Pi ?
</p>
<p>
Le prix : 30€ environ pour un Raspberry Pi 2. Un Raspberry Pi peut être allumé en continu, sans faire un seul bruit. Il peut donc accueillir Huby en se faisant oublier.
Un Raspberry Pi consomme très peu, environ 3€ par an d'électricité si il est branché H24. Loin de la consommation d'un PC 'classique' !
Les ports GPIOs du Raspberry permettent d'avoir des interactions avec du matériel électronique, et donc de faire de la domotique.
<h3>Un Arduino</h3>
Le Raspberry permet certes de faire de l'électronique avec les ports GPIOs, mais celui-ci reste limité lorsqu'il s'agit de faire du "temps réel", car cela sature le CPU du Rpi. Pour des tâches comme attendre un signal radio fréquence, rien ne vaut un Arduino. Et vu le prix d'un arduino sur des sites chinois (environ 4-6€), on aurait tort de s'en priver ! L'arduino est branché en USB au Raspberry Pi pour communiquer avec lui.
</p>

<h3>Des prises télécommandées</h3>
Pour pouvoir contrôler des appareils divers et variés (lampes de bureaux, postes de radio, cafetière), les prises télécommandées sont parfaites ! Avec un prix assez raisonnable ( 20€ les 4 prises), le contrôle se fait avec un petit émetteur 433Mhz branché au Raspberry sur les ports GPIOs.
</p>
<h3>Les capteurs</h3>
Comment savoir si l'utilisateur est chez lui ? Dans quelle pièce il est ? Rien de mieux qu'un détecteur de mouvement sans-fil standard d'alarme pour détecter les mouvements dans la maison, et donc la présence d'un utilisateur.
</p>
<p>
Au niveau de la réception, elle se fait avec un récepteur 433Mhz branché à un arduino, qui prévient Huby via le port USB du Raspberry lorqu'il y a un mouvement.
</p>
<h3>Les lumières</h3>
Comment contrôler l'éclairage de la maison de façon plus poussée qu'avec les prises télécommandées qui ne permettent que de faire 'On' et 'Off' ? Avec des ampoules connectées ! Les plus connues sont les Philips Hue, mais malheureusement elles sont très chère. Heureusement on trouve des équivalents chinois pour environ 20€. Ces lampes sont contrôlable en Wi-Fi, et permettent de faire de nombreuses choses : prendre toutes les couleurs, changer d'intensité, flasher, etc...
<h3>Le logiciel</h3>
Après une première version de Huby sortie en Avril 2014, Huby revient avec une toute nouvelle version, totalement réécrite !
<p>
Cette version est écrite en 100% Node.js, avec côté serveur le framework Sails.js, et côté client le framework AngularJS.
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