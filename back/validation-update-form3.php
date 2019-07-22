<?php
session_start();
if (isset($_SESSION['id_etudiant']) AND isset($_SESSION['pseudo_etudiant']))
{

  include ('../include/connectBDD.php');

  $sololearn_etudiant = isset($_POST['sololearn_etudiant']) ? $_POST['sololearn_etudiant'] : NULL;
  $codeacademy_etudiant = isset($_POST['codeacademy_etudiant']) ? $_POST['codeacademy_etudiant'] : NULL;
  $autreplateforme_etudiant = isset($_POST['autreplateforme_etudiant']) ? $_POST['autreplateforme_etudiant'] : NULL;
  $anglais_etudiant = isset($_POST['anglais_etudiant']) ? $_POST['anglais_etudiant'] : NULL;

  $sql = $bdd->prepare ("UPDATE etudiant SET sololearn_etudiant=:sololearn_etudiant, codeacademy_etudiant=:codeacademy_etudiant, autreplateforme_etudiant=:autreplateforme_etudiant,  anglais_etudiant=:anglais_etudiant WHERE id_etudiant=:id_etudiant");

  $sql->execute(array(
    ':sololearn_etudiant' => $sololearn_etudiant,
    ':codeacademy_etudiant' => $codeacademy_etudiant,
    ':autreplateforme_etudiant' => $autreplateforme_etudiant,
    ':anglais_etudiant' => $anglais_etudiant,
    ':id_etudiant' => $_SESSION['id_etudiant']
  ));
  $sql-> closeCursor();


  header('location:../formu_valider.php');

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

  ?>
