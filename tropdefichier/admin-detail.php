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

<body id="haut">
  <!--pour inclure le header-->
  <?php

  include '../include/header.php';

  include '../include/connectBDD.php';
  ?>

<!--début du contenu "main"-->

  <div id="main">

    <!---titre---->

    <div id="titre">
      <h1>Bienvenue <?= $_SESSION['prenom']." ".strtoupper($_SESSION['nom']);?> au détail du formulaire de candidature de
        <?php
        $current_id=$_GET['id'];
        $req=$bdd->query("SELECT * from etudiant WHERE id_etudiant= '".$current_id."'");
        $res=$req->fetch();

        echo $res['prenom_etudiant'].' '.strtoupper($res['nom_etudiant']);?>
      </h1>
    </div>

<!--début menu gestion-->
  <div class="vertical-menu">
    <a href="admin-utilisateur.php">Utilisateurs</a>
    <a href="admin-candidat.php">Candidats</a>
    <a href="admin-session.php">Sessions</a>
    <!--<a href="admin-infospromo.php">Infos Promo</a>-->
    <a href="#deconnexion">Déconnexion</a>
  </div>

<!--début détail formulaire de candidature-->

  <form action="" method="post">
    <fieldset>
      <legend> Etat Civil </legend>

        <label>Prénom</label><br/>
        <input type="text" name="prenom" value="<?= $res['prenom_etudiant'];?>" readonly ><br/>


        <label>Nom</label><br/>
        <input type="text" name="nom" value="<?= $res['nom_etudiant'];?>" readonly><br/>


        <label>Date de naissance</label><br/>
        <input type="date" name="date_naissance" value="<?= $res['datenaissance_etudiant'];?>" readonly><br/>


        <label>Adresse</label><br/>
        <input type="text" name="adresse" value="<?= $res['adresse_etudiant'];?>" readonly><br/>


        <label>Code postal</label><br/>
        <input type="text" name="code_postal" value="<?= $res['codepostal_etudiant'];?>" readonly><br/>


        <label>Ville</label><br/>
        <input type="text" name="ville" value="<?= $res['ville_etudiant'];?>" readonly><br/>

        <label>Nationalité</label><br/>
        <input type="text" name="nationalite" value="<?= $res['nationalite_etudiant'];?>" readonly><br/>


        <label>Email</label><br/>
        <input type="email" name="email" value="<?= $res['mail_etudiant'];?>" readonly><br/>


        <label>N° de téléphone</label><br/>
        <input type="tel" name="tel" value="<?= $res['telephone_etudiant'];?>" readonly><br/>
      </fieldset>

      <fieldset>
        <legend>Statut</legend>

        <label>Statut actuel</label><br/>
        <input type="text" name="satut" value="<?= $res['statut_etudiant'];?>" readonly><br/>

        <label>Dernier diplôme obtenu</label><br/>
        <input type="text" name="diplome" value="<?= $res['diplome_etudiant'];?>" readonly><br/>

        <label>Disponibilité dès la pré-rentrée? </label><br/>
        <input type="text" name="disponib" value="<?= $res['disponibilite_etudiant'];?>" readonly><br/>
      </fieldset>

      <fieldset>
        <legend>Motivation</legend>

          <label>Quel super-héros et pourquoi?</label><br/>
          <input type="text" name="superheros" value="<?= $res['qhero_etudiant'];?>" readonly><br/>

          <label>Ses "hacks":</label><br/>
          <input type="text" name="hacks" value="<?= $res['qhack_etudiant'];?>" readonly><br/>

          <label>Pourquoi intégrer la formation?</label><br/>
          <input type="text" name="intformat" value="<?= $res['qformation_etudiant'];?>" readonly><br/>

          <label>Sa motivation:</label><br/>
          <input type="text" name="motivation" value="<?= $res['qparcours_etudiant'];?>" readonly><br/>

          <label>Son avenir dans un an:</label><br/>
          <input type="text" name="dansunan" value="<?= $res['qpouvoir_etudiant'];?>" readonly><br/>

      </fieldset>

      <fieldset>
        <legend> Pré-requis</legend>

          <label>Pré-requis #1 : PHP - Lessons Sololearn:</label><br/>
          <input type="text" name="prerequis1" value="<?= $res['sololearn_etudiant'];?>" readonly><br/>


          <label>Pré-requis #2 : HTML et CSS - Badges Codecademy:</label><br/>
          <input type="text" name="prerequis2" value="<?= $res['codeacademy_etudiant'];?>" readonly><br/>


          <label>Profils supplémentaires sur d'autres plate-formes:</label><br/>
          <input type="text" name="profilsuppl" value="<?= $res['autreplateforme_etudiant'];?>" readonly><br/>


          <label>Niveau d'anglais:</label><br/>
          <input type="text" name="nivangl" value="<?= $res['anglais_etudiant'];?>" readonly><br/>

        </fieldset>

        <fieldset>
          <legend> Avis Jury</legend>

          <label>Commentaire jury N°1:</label><br/>
          <input type="text" name="comment1" value="<?= $comment1;?>" readonly><br/>

          <label>Note jury N°1:</label><br/>
          <input type="text" name="note1" value="<?= $note1;?>" readonly><br/>

          <label>Commentaire jury N°2:</label><br/>
          <input type="text" name="comment2" value="<?= $comment2;?>" readonly><br/>

          <label>Note jury N°2:</label><br/>
          <input type="text" name="note2" value="<?= $note2;?>" readonly><br/>

          <label>Commentaire jury N°3:</label><br/>
          <input type="text" name="comment3" value="<?= $comment3;?>" readonly><br/>

          <label>Note jury N°3:</label><br/>
          <input type="text" name="note3" value="<?= $note3;?>" readonly><br/>

        </fieldset>

          <center>
            <button><a href="admin-candidat.php">Revenir au tableau de gestion des candidats</a></button>
          </center>

    </form>

    <!--début fenêtres modales-->

    <div id="deconnexion" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <header class="container">
            <a href="#" class="closebtn">×</a>
            <h4>Déconnexion</h4>
          </header>
          <div class="container">
            <form id="form-modal" action="back/validation-val1s.php" method="POST">
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

<!--//////////////////////////////  BACK TO TOP BTN  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

  <div><a id="cRetour" class="cInvisible" href="#haut"></a></div>

  </div>

<!--//////////////////////////////  SCRIPTS  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

  <script src="js/main.js"></script>

</body>
</html>
