<html>
	<head>
		<title>Huby</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="assets/js/Chart.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js" type="text/javascript"></script>

		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body class="landing">



			<header id="header" class="alt">
				<a href="#nav">Menu</a>
			</header>

			<nav id="nav">
				<ul class="links">
					<li><a href="index.php">Accueil</a></li>
					<li><a href="generic.php">A propos de nous</a></li>
					<li><a href="login/index.php">Paramètres</a></li>

				</ul>
			</nav>

			<section id="banner">
				<i class="icon  fa fa-diamond fa-stack-1x fa-inverse"></i>
				<h2>Huby</h2>
				<p>Votre pointeuse intelligente</p>
			
			</section>

			<section id="one" class="wrapper style1">
				<div class="inner">
					<article class="feature left">
						<span class="image"><img src="images/pic01.jpg" alt="" /></span>
						<div class="content">
							<h2>Fabrique d'Objet Libre</h2>
							<p>La fabrique d’objets libre est une association, elle est identifiée sur fablabs.io comme fablab respectant la charte MIT.</p>
							<ul class="actions">
								<li>
									<a href="http://www.fablab-lyon.fr/" target="_blank" class="button alt">plus d'infos</a>
								</li>
							</ul>
						</div>
					</article>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
		<script>
					$(document).ready(function(){
					$('#nbVisiteur').load('nb.php');
					setInterval(function(){
					$('#nbVisiteur').load('nb.php');
						}, 3000);
							});
		</script>
				<article class="feature right">
 <?php include "chart.php" ; ?>
					<div class="content">
						<h2>Nombre de visiteurs : <a><?php echo '<a id="nbVisiteur"></a>';?></a></h2>
						<p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est.</p>
						
					</div>
					</article>
				</div>
			</section>

			<section id="two" class="wrapper special">
				<div class="inner">
					<header class="major narrow">
						<h2>Aliquam Blandit Mauris</h2>
						<p>Ipsum dolor tempus commodo turpis adipiscing Tempor placerat sed amet accumsan</p>
					</header>
					<div class="image-grid">
						<!--<a href="#" class="image"><img src="http://placehold.it/225x150" alt="" /></a>
						<a href="#" class="image"><img src="http://placehold.it/225x150" alt="" /></a>
						<a href="#" class="image"><img src="http://placehold.it/225x150" alt="" /></a>
						<a href="#" class="image"><img src="http://placehold.it/225x150" alt="" /></a>
						<a href="#" class="image"><img src="http://placehold.it/225x150" alt="" /></a>
						<a href="#" class="image"><img src="http://placehold.it/225x150" alt="" /></a>
						<a href="#" class="image"><img src="http://placehold.it/225x150" alt="" /></a>
						<a href="#" class="image"><img src="http://placehold.it/225x150" alt="" /></a>-->
						<div id="images-box">
							<div class="holder">
								<div id="image-1" class="image-lightbox">
									<span class="close"><a href="#">X</a></span>
									<img src="1.jpg" alt="earth!">
									<a class="expand" href="#image-1"></a>
								</div>
							</div>
							<div class="holder">
								<div id="image-2" class="image-lightbox">
									<span class="close"><a href="#">X</a></span>
									<img src="2.jpg" alt="earth!">
									<a class="expand" href="#image-2"></a>
								</div>
							</div>
							<div class="holder">
								<div id="image-3" class="image-lightbox">
									<span class="close"><a href="#">X</a></span>
									<img src="3.jpg" alt="earth!">
									<a class="expand" href="#image-3"></a>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</section>






<?php
/*
  ********************************************************************************************
  CONFIGURATION
  ********************************************************************************************
*/
// destinataire est votre adresse mail. Pour envoyer à plusieurs à la fois, séparez-les par une virgule
$destinataire = 'zakaria_550@hotmail.com';

// copie ? (envoie une copie au visiteur)
$copie = 'oui';

// Action du formulaire (si votre page a des paramètres dans l'URL)
// si cette page est index.php?page=contact alors mettez index.php?page=contact
// sinon, laissez vide
$form_action = '';

// Messages de confirmation du mail
$message_envoye = "Votre message nous est bien parvenu !";
$message_non_envoye = "L'envoi du mail a échoué, veuillez réessayer SVP.";

// Message d'erreur du formulaire
$message_formulaire_invalide = '<div class="alert-danger"><a data-dismiss="alert" class="close">x</a>Vérifiez si vous avez rempli tous les champs avec des informations valides et réessayez.</div>';






 





/*
  ********************************************************************************************
  FIN DE LA CONFIGURATION
  ********************************************************************************************
*/

/*
 * cette fonction sert à nettoyer et enregistrer un texte
 */
function Rec($text)
{
  $text = htmlspecialchars(trim($text), ENT_QUOTES);
  if (1 === get_magic_quotes_gpc())
  {
    $text = stripslashes($text);
  }

  $text = nl2br($text);
  return $text;
};

/*
 * Cette fonction sert à vérifier la syntaxe d'un email
 */
function IsEmail($email)
{
  $value = preg_match('/^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!\.)){0,61}[a-zA-Z0-9_-]?\.)+[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!$)){0,61}[a-zA-Z0-9_]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/', $email);
  return (($value === 0) || ($value === false)) ? false : true;
}

// formulaire envoyé, on récupère tous les champs.
$nom     = (isset($_POST['nom']))     ? Rec($_POST['nom'])     : '';
$email   = (isset($_POST['email']))   ? Rec($_POST['email'])   : '';
$objet   = (isset($_POST['objet']))   ? Rec($_POST['objet'])   : '';
$message = (isset($_POST['message'])) ? Rec($_POST['message']) : '';

// On va vérifier les variables et l'email ...
$email = (IsEmail($email)) ? $email : ''; // soit l'email est vide si erroné, soit il vaut l'email entré
$err_formulaire = false; // sert pour remplir le formulaire en cas d'erreur si besoin

if (isset($_POST['envoi']))
{
  if (($nom != '') && ($email != '') && ($objet != '') && ($message != ''))
  {
    // les 4 variables sont remplies, on génère puis envoie le mail
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'From:'.$nom.' <'.$email.'>' . "\r\n" .
        'Reply-To:'.$email. "\r\n" .
        'Content-Type: text/plain; charset="utf-8"; DelSp="Yes"; format=flowed '."\r\n" .
        'Content-Disposition: inline'. "\r\n" .
        'Content-Transfer-Encoding: 7bit'." \r\n" .
        'X-Mailer:PHP/'.phpversion();

    // envoyer une copie au visiteur ?
    if ($copie == 'oui')
    {
      $cible = $destinataire.','.$email;
    }
    else
    {
      $cible = $destinataire;
    };

    // Remplacement de certains caractères spéciaux
    $message = str_replace("&#039;","'",$message);
    $message = str_replace("&#8217;","'",$message);
    $message = str_replace("&quot;",'"',$message);
    $message = str_replace('<br>','',$message);
    $message = str_replace('<br />','',$message);
    $message = str_replace("&lt;","<",$message);
    $message = str_replace("&gt;",">",$message);
    $message = str_replace("&amp;","&",$message);

    // Envoi du mail
    if (mail($cible, $objet, $message, $headers))
    {
      echo '<p>'.'<div class="alert alert-success">
                <p><strong>Votre message a été envoyé !</strong></p></div>'.'</p>';


    }
    else
    {
      echo '<p>'.$message_non_envoye.'</p>';


    };
  }
  else
  {
    // une des 3 variables (ou plus) est vide ...
    echo '<p>'.$message_formulaire_invalide.'</p>';
    $err_formulaire = true;
  };
}; // fin du if (!isset($_POST['envoi']))

if (($err_formulaire) || (!isset($_POST['envoi'])))
{
  // afficher le formulaire
  echo '

			<section id="four" class="wrapper style2 special">
<div class="inner">
					<header class="major narrow">
						<h2>Contactez-nous</h2>
						<p>Envoyez un message a ladministrateur !</p>
					</header>


<form role="form" id="contact" action="'.$form_action.'" id="contactform" method="post">
						<div class="container 75%">
							<div class="row uniform 50%">
								<div for="nom" class="6u 12u$(xsmall)">
									<input name="nom" id="nom" value="'.stripslashes($nom).'" role="input" placeholder="Nom complet" aria-required="true" type="text" />
								</div>
								<div class="6u$ 12u$(xsmall)">
									<input id="email" name="email" value="'.stripslashes($email).'"  placeholder="Adresse email" role="input" aria-required="true" type="email" />
								</div>
								<div class="12u$">
          <input type="text" name="objet" id="objet" value="'.stripslashes($objet).'"  placeholder="Objet" role="input" aria-required="true" />
        </div>   
								<div class="12u$">
									<textarea name="message" id="message" placeholder="Message" role="textbox" aria-required="true" rows="4"></textarea>
								</div>
							</div>
						</div>
						<ul class="actions">
							<li><input type="submit" class="special" name="envoi" id="submitButton" value="Envoyer" /></li>
							<li><input type="reset" class="alt" value="Rénitialiser" /></li>
						</ul>
					</form>

  ';
};



?>
		
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<footer id="footer">
				<div class="inner">
				<p class="pull-right"><a href="#">Remonter en haut</a></p>
        		<p>© 2015 Huby</p>
				</div>
			</footer>

	</body>
</html>