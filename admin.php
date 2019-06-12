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


  include 'connectBDD.php';

    $sql = $bdd->prepare("SELECT * FROM utilisateur");
    $sql->execute();

    $resultat = $sql->fetch();

  ?>

<!--début du contenu "main"-->

  <div id="main">

    <!---titre---->

    <div id="titre">
      <h1>Bienvenue <?= $resultat['prenom'];?> à la gestion du recrutement de SIMPL<span class="clr">O</span>N Charleville-Mézières
      </h1>
    </div>


<!--début menu gestion-->
    <div class="vertical-menu">
      <a href="admin-utilisateur.php">Utilisateurs</a>
      <a href="admin-candidat.php">Candidats</a>
      <a href="admin-session.php">Sessions</a>
      <a href="admin-infospromo.php">Infos Promo</a>
    </div>

  </div>


  </body>
  </html>
