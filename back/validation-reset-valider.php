<?php
session_start();
if (isset($_SESSION['id_etudiant']) AND isset($_SESSION['pseudo_etudiant']))
{

  include ('../include/connectBDD.php');


  $sql = $bdd->prepare ("UPDATE etudiant SET inscriptionvalide_etudiant=:inscriptionvalide_etudiant WHERE id_etudiant=:id_etudiant");
  $sql->execute(array(
    ':inscriptionvalide_etudiant' => 1,
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
            Vous pouvez à nouveau modifier votre formulaire.
          </p>

      <a href='../form_candidature_1.php'>
        <button  class="btn-transit">Cliquez ici</button>
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
