<?php
  // Definition des constantes et variables
  define('LOGIN','administrateur');
  define('PASSWORD','administrateur');
  $errorMessage = '';
 
  // Test de l'envoi du formulaire
  if(!empty($_POST)) 
  {
    // Les identifiants sont transmis ?
    if(!empty($_POST['login']) && !empty($_POST['password'])) 
    {
      // Sont-ils les mêmes que les constantes ?
      if($_POST['login'] !== LOGIN) 
      {
        $errorMessage = 'Mauvais login !';
      }
        elseif($_POST['password'] !== PASSWORD) 
      {  
        $errorMessage = 'Mauvais password !';
      }
        else
      {
        // On ouvre la session
        session_start();
        // On enregistre le login en session
        $_SESSION['login'] = LOGIN;
        header('Location: inscrivants/index.php');
        exit();
      }
    }
      else
    {
      $errorMessage = 'Veuillez inscrire vos identifiants svp !';
    }
  }

?>
<!DOCTYPE html">
<html lang="fr">
 <head>


        <meta charset="utf-8">
        <title>Basketball Club</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />
        <!-- ci-dessous notre fichier CSS -->
        <link rel="stylesheet" type="text/css" href="styles.css" />
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:400,700,300" />
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </head>  

  <body>
<div class="container">
<div class="row">
<div class="col-xs-12">
    
    <div class="main">
            
        <div class="row">
        <div class="col-xs-12 col-sm-6 col-sm-offset-1">
     <h1>La ligue de basket</h1>
            <h2>Nous organisons un évenement sportif le Samedi 5 décembre 2015, et nous aimerions connaitre le nombre de participants pour mieux préparer la rencontre . </h2>




    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" name="login" class="form-horizontal" method="post" accept-charset="utf-8">

      <fieldset>
        <?php
          // Rencontre-t-on une erreur ?
          if(!empty($errorMessage)) 
          {
            echo '<p>', htmlspecialchars($errorMessage) ,'</p>';
          }
        ?>

     <div class="form-group">
                <div class="col-md-8"><input name="login" placeholder="Idenfiant" class="form-control" type="text" id="login"/></div>
     </div> 

        <div class="form-group">
                <div class="col-md-8"><input name="password" placeholder="Mot de passe" class="form-control" type="password" id="password"/></div>
        </div> 

 <div class="form-group">

                <div class="col-md-offset-0 col-md-8"> 
                 <a  class="btn btn-success btn btn-success" onclick="document.location.href='inscription.php';">Inscription</a>
                 <input class="btn btn-success btn btn-success" type="submit" name="submit" value="Connexion"  />
                </div>
   </fieldset>
    </form>
            <p class="credits">© Tous droits réservés.</p>
             <a  position="right" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat" href="#"  >Contactez-moi</a>

        </div>
        </div>





     </div>
  </body>
</html>
