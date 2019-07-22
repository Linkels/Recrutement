<?php
session_start();
if (isset($_SESSION['id_etudiant']) AND isset($_SESSION['pseudo_etudiant']))
{

  include ('../include/connectBDD.php');


  $sql = $bdd->prepare ("UPDATE etudiant SET inscriptionvalide_etudiant=:inscriptionvalide_etudiant WHERE id_etudiant=:id_etudiant");
  $sql->execute(array(
    ':inscriptionvalide_etudiant' => 0,
    ':id_etudiant' => $_SESSION['id_etudiant']
  ));
  $sql-> closeCursor();

  ?>
    <!DOCTYPE html>
    <html>
        <head>
            <title>Connexion</title>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="../css/reset.css"/>
            <link rel="stylesheet" href="../css/connexion.css"/>

    </head>
    <body>
      <?php

      include "../include/header.php";

      ?>
        <section>
          <p class="message">
            Et voila, vous êtes dans la boite, à bientôt, pour la prochaine étape !
          </p>

      <a href='../index.php'>
        <button  class="btn-transit">Retour à l'accueil</button>
      </a>
    </body>
    </html>
  <?php

}
else {
  ?>
    <!DOCTYPE html>
    <html>
        <head>
            <title>Connexion</title>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="../css/reset.css"/>
            <link rel="stylesheet" href="../css/connexion.css"/>

    </head>
    <body>
      <?php

      include "../include/header.php";

      ?>
        <section>
          <p class="message">
            Vous n'êtes pas connecté, pour recommencer:
          </p>

      <a href='../connexion.php'>
        <button  class="btn-transit">Nouvel essai</button>
      </a>
    </body>
    </html>
  <?php

}
