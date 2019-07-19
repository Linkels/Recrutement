<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <title>Simplon Charleville _ administration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../img/favicon.ico" />

  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  <!--  pour le css natif -->
  <link rel="stylesheet" href="../css/header.css">
  <link rel="stylesheet" href="../css/admin.css">
</head>

<body>
  <!--pour inclure le header-->
  <?php

  include '../header.php';
?>

    <!-- début du main -->

    <!---titre---->

    <div id="titre">
      <h1>Bienvenue <?= $_SESSION['prenom']." ".strtoupper($_SESSION['nom']);?> à la gestion des sessions
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


      <!--message de validation -->
        <p class="tx-validation">Votre opération a bien été prise en compte</p>


</body>
</html>
