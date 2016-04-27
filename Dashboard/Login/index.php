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
        header('Location: panel/index.php');
        exit();
      }
    }
      else
    {
      $errorMessage = 'Veuillez inscrire vos identifiants svp !';
    }
  }

?>




<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Panel Admin</title>
    
    
    <link rel="stylesheet" href="css/reset.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>

    
<!-- Mixins-->
<!-- Pen Title-->
<div class="pen-title">
  <h1>Bonjour !</h1>
</div>
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Connexion</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" name="login" class="form-horizontal" method="post" accept-charset="utf-8">
      <div class="input-container">
        <input type="text" id="login" name="login" required="required"/>
        <label for="login">Pseudo</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="Password" name="password" required="required"/>
        <label for="Password">Mot de passe</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button type="submit" name="submit"><span>Entrer</span></button>
        <button onclick="document.location.href='../index.php';"><span>Retour</span></button>
       </div>
    </form>
  </div>
   
</div>

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>
