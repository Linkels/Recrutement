<?php
session_start();
include ('connectBDD.php');

    $_SESSION['uname'] = $_POST['uname'];

    $sql = $bdd->prepare('SELECT * FROM utilisateur WHERE ulogin = :pseudo');

     $sql->execute(array(
         'pseudo' => $_POST['uname']));

    if($resul = $sql->fetch()){
    $isPasswordCorrect = password_verify($_POST['psw'], $resul['motdepassec']);


        $_SESSION['nom'] = $resul['nom'];
        $_SESSION['prenom'] = $resul['prenom'];

}?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <title>Simplon Charleville _ administration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="img/favicon.ico" />

  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

  <!--  pour le css natif -->
  <link rel="stylesheet" href="css/header.css">

  <link rel="stylesheet" href="css/admin.css">
</head>

<body>
  <!--pour inclure le header-->
  <?php

  include 'header.php';


  ?>

<!--début du contenu "main"-->

  <div id="main">

    <!---titre---->

    <div id="titre">
      <h1>Bienvenue <?= $_SESSION['prenom']." ".strtoupper($_SESSION['nom']);?> à la gestion du recrutement de SIMPL<span class="clr">O</span>N Charleville-Mézières
      </h1>
    </div>


<!--début menu gestion-->
    <div class="vertical-menu">
      <a href="admin-utilisateur.php">Utilisateurs</a>
      <a href="admin-candidat.php">Candidats</a>
      <a href="admin-session.php">Sessions</a>
      <a href="admin-infospromo.php">Infos Promo</a>
      <a href="#deconnexion">Déconnexion</a>
    </div>

    <!--début fenêtres modales-->

    <div id="deconnexion" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <header class="container">
            <a href="#" class="closebtn">×</a>
            <h4>Déconnexion</h4>
          </header>
          <div class="container">
            <form id="form-modal" action="validation/validation-val1s.php" method="POST">
              <label>Etes-vous sûr de vouloir vous déconnecter? </label><br/><br/>
                <div class="cnt">
                <input type="radio" name="deconnect" class="radio"
              <?php if (isset($jury) && $jury=="oui") echo "checked";?> value="oui">Oui<br/>

                <input type="radio" name="jury" class="radio"
              <?php if (isset($jury) && $jury=="non") echo "checked";?> value="non">Non<br/>

                <input type="submit" name="submit" value="Valider">
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>

  </div>


  </body>
  </html>
