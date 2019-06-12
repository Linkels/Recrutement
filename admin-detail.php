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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  <!--  pour le css natif -->
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/admin.css">
</head>

<body id="haut">
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
      <h1>Bienvenue <?= $resultat['prenom'];?> au détail du formulaire de candidature de
        <?php
        $scl = $bdd->prepare("SELECT * FROM etudiant WHERE idhor =".$_GET['vab']);
        $scl->execute();

        $result = $scl->fetch();

        echo $result['prenom'];?>
      </h1>
    </div>

<!--début menu gestion-->
  <div class="vertical-menu">
    <a href="admin-utilisateur.php">Utilisateurs</a>
    <a href="admin-candidat.php">Candidats</a>
    <a href="admin-session.php">Sessions</a>
    <a href="admin-infospromo.php">Infos Promo</a>
  </div>

<!--début détail formulaire de candidature-->

  <form action="" method="post">
    <fieldset>
      <legend> Etat Civil </legend>

        <label>Prénom</label><br/>
        <input type="text" name="prenom" value="<?= $result['prenom'];?>" readonly ><br/>


        <label>Nom</label><br/>
        <input type="text" name="nom" value="<?= $result['nom'];?>" readonly><br/>


        <label>Date de naissance</label><br/>
        <input type="date" name="date_naissance" value="<?= $result['datenai'];?>" readonly><br/>


        <label>Adresse</label><br/>
        <input type="text" name="adresse" value="<?= $result['adresse_perso'];?>" readonly><br/>


        <label>Code postal</label><br/>
        <input type="text" name="code_postal" value="<?= $result['codep'];?>" readonly><br/>


        <label>Ville</label><br/>
        <input type="text" name="ville" value="<?= $result['ville'];?>" readonly><br/>

        <label>Nationalité</label><br/>
        <input type="text" name="nationalite" value="<?= $result['nationalite'];?>" readonly><br/>


        <label>Email</label><br/>
        <input type="email" name="email" value="<?= $result['email'];?>" readonly><br/>


        <label>N° de téléphone</label><br/>
        <input type="tel" name="tel" value="<?= $result['numtels'];?>" readonly><br/>
      </fieldset>

      <fieldset>
        <legend>Statut</legend>

        <label>Statut actuel</label><br/>
        <input type="text" name="satut" value="<?= $result['situactu'];?>" readonly><br/>

        <label>Dernier diplôme obtenu</label><br/>
        <input type="text" name="diplome" value="<?= $result['lastdipl'];?>" readonly><br/>

        <label>Disponibilité dès la pré-rentrée? </label><br/>
        <input type="text" name="disponib" value="<?= $result['disponib'];?>" readonly><br/>
      </fieldset>

      <fieldset>
        <legend>Motivation</legend>

          <label>Quel super-héros et pourquoi?</label><br/>
          <input type="text" name="superheros" value="<?= $result['superheros'];?>" readonly><br/>

          <label>Ses "hacks":</label><br/>
          <input type="text" name="hacks" value="<?= $result['hacks'];?>" readonly><br/>

          <label>Pourquoi intégrer la formation?</label><br/>
          <input type="text" name="intformat" value="<?= $result['intformat'];?>" readonly><br/>

          <label>Sa motivation:</label><br/>
          <input type="text" name="motivation" value="<?= $result['motivation'];?>" readonly><br/>

          <label>Son avenir dans un an:</label><br/>
          <input type="text" name="dansunan" value="<?= $result['dansunan'];?>" readonly><br/>

      </fieldset>

      <fieldset>
        <legend> Pré-requis</legend>

          <label>Pré-requis #1 : PHP - Lessons Sololearn:</label><br/>
          <input type="text" name="prerequis1" value="<?= $result['prerequis1'];?>" readonly><br/>


          <label>Pré-requis #2 : HTML et CSS - Badges Codecademy:</label><br/>
          <input type="text" name="prerequis2" value="<?= $result['prerequis2'];?>" readonly><br/>


          <label>Profils supplémentaires sur d'autres plate-formes:</label><br/>
          <input type="text" name="profilsuppl" value="<?= $result['profilsuppl'];?>" readonly><br/>


          <label>Niveau d'anglais:</label><br/>
          <input type="text" name="nivangl" value="<?= $result['langlais'];?>" readonly><br/>

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

<!--//////////////////////////////  BACK TO TOP BTN  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

  <div><a id="cRetour" class="cInvisible" href="#haut"></a></div>

  </div>

<!--//////////////////////////////  SCRIPTS  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

  <script src="js/main.js"></script>

</body>
</html>
