<?php
session_start();

// Suppression des variables de session et de la session
$_SESSION = array();
session_destroy();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Connexion</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/reset.css"/>
        <link rel="stylesheet" href="css/connexion.css"/>

</head>
<body>
  <?php

  include "include/header.php";

  ?>
    <section>
      <p class="message">
        Vous êtes maintenant déconnecté - Vous pouvez revenir sur la page d'accueil en cliquant ici :
      </p>

  <a href='index.php'>
    <button  class="btn-transit">Retour à la page d'accueil</button>
  </a>
</body>
</html>
