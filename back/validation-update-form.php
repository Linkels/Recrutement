<?php
session_start();
if (isset($_SESSION['id_etudiant']) AND isset($_SESSION['pseudo_etudiant']))
{

  include ('../include/connectBDD.php');

  //pour upload de la photo

  $target_dir = "uploads/";//pour spécifier dans quel dossier vont être stockées les images
  $target_file = $target_dir . basename($_FILES["photo_etudiant"]["name"]);//pour déterminer le chemin des images à uploader
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));// pour l'extension, en minuscule , du fichier

  // Vérifications de l'image
  if(isset($_POST["submit"]) && !empty($_FILES["photo_etudiant"]["name"])) {

  // Vérification si l'image existe déjà dans le dossier uploads
  /*if (file_exists($target_file)) {
  }

  // Vérification de la taille de l'image
  if ($_FILES["photo_etudiant"]["size"] > 500000) {

  // Vérification de la taille de l'image
  if ($_FILES["photo_etudiant"]["size"] > 500000) {
  }
  */
      $nom_etudiant = isset($_POST['nom_etudiant']) ? $_POST['nom_etudiant'] : NULL;
      $prenom_etudiant = isset($_POST['prenom_etudiant']) ? $_POST['prenom_etudiant'] : NULL;
      $mail_etudiant = isset($_POST['mail_etudiant']) ? $_POST['mail_etudiant'] : NULL;
      $datenaissance_etudiant = isset($_POST['datenaissance_etudiant']) ? $_POST['datenaissance_etudiant'] : NULL;
      $adresse_etudiant = isset($_POST['adresse_etudiant']) ? $_POST['adresse_etudiant'] : NULL;
      $codepostal_etudiant = isset($_POST['codepostal_etudiant']) ? $_POST['codepostal_etudiant'] : NULL;
      $ville_etudiant = isset($_POST['ville_etudiant']) ? $_POST['ville_etudiant'] : NULL;
      $nationalite_etudiant = isset($_POST['nationalite_etudiant']) ? $_POST['nationalite_etudiant'] : NULL;
      $telephone_etudiant = isset($_POST['telephone_etudiant']) ? $_POST['telephone_etudiant'] : NULL;
      $statut_etudiant = isset($_POST['statut_etudiant']) ? $_POST['statut_etudiant'] : NULL;
      $diplome_etudiant = isset($_POST['diplome_etudiant']) ? $_POST['diplome_etudiant'] : NULL;
      $disponibilite_etudiant = isset($_POST['disponibilite_etudiant']) ? $_POST['disponibilite_etudiant'] : NULL;

      //contrôle du mime de la photo
      $allowTypes = array('jpg','jpeg','png');
      if (in_array($imageFileType, $allowTypes)){

        if(move_uploaded_file($_FILES["photo_etudiant"]["tmp_name"],$target_file)){

// REQUETE POUR MODIFIER LA BDD
          $sql = $bdd->prepare ("UPDATE etudiant SET nom_etudiant=:nom_etudiant, prenom_etudiant=:prenom_etudiant, mail_etudiant=:mail_etudiant,  datenaissance_etudiant=:datenaissance_etudiant, adresse_etudiant=:adresse_etudiant, codepostal_etudiant=:codepostal_etudiant, ville_etudiant=:ville_etudiant, nationalite_etudiant=:nationalite_etudiant, telephone_etudiant=:telephone_etudiant, statut_etudiant=:statut_etudiant, diplome_etudiant=:diplome_etudiant, disponibilite_etudiant=:disponibilite_etudiant, photo_etudiant=:photo_etudiant WHERE id_etudiant=:id_etudiant");

          $sql->execute(array(
            ':nom_etudiant' => $nom_etudiant,
            ':prenom_etudiant' => $prenom_etudiant,
            ':mail_etudiant' => $mail_etudiant,
            ':datenaissance_etudiant' => $datenaissance_etudiant,
            ':adresse_etudiant' => $adresse_etudiant,
            ':codepostal_etudiant' => $codepostal_etudiant,
            ':ville_etudiant' => $ville_etudiant,
            ':nationalite_etudiant' => $nationalite_etudiant,
            ':telephone_etudiant' => $telephone_etudiant,
            ':statut_etudiant' => $statut_etudiant,
            ':diplome_etudiant' => $diplome_etudiant,
            ':disponibilite_etudiant' => $disponibilite_etudiant,
            ':photo_etudiant' => $target_file,
            ':id_etudiant' => $_SESSION['id_etudiant']
          ));

        $sql-> closeCursor();
        } else {
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
                    Votre fichier est trop conséquent. Veuillez vous reconnecter et choisir une photo de moins de 500KB.
                  </p>

              <a href='../connexion.php'>
                <button  class="btn-transit">Nouvel essai</button>
              </a>
            </body>
            </html>
          <?php
        }
      } else {
        ?>
    <!DOCTYPE html>
    <html>
        <head>
            <title>Connexion</title>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1">
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
                  Le format de la photo choisie n'est pas accepté. Veuillez vous reconnecter et télécharger une photo au format .jpg, .jpeg ou .png.
                </p>

            <a href='../connexion.php'>
              <button  class="btn-transit">Nouvel essai</button>
            </a>
          </body>
          </html>
          <?php
      }
    }


 header('location:../form_candidature_2.php');

    } else {
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
