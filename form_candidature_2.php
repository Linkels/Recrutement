<?php
session_start();
if (isset($_SESSION['id_etudiant']) AND isset($_SESSION['pseudo_etudiant']))
{

  ?>

  <!DOCTYPE html>
<html lang="fr">

<head>
  <title>Simplon Charleville _ candidature</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="img/favicon.ico" />

  <link rel="stylesheet" href="css/reset.css">
  <!--pour les icones de fontawesome-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <!--pour les animations de animate.css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
  <!--pour la police Roboto-->
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

  <!--  pour le css natif -->
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/form_cand_1.css">
</head>

<body>
  <!--pour inclure le header-->
  <?php

  include 'include/header.php';


  include 'include/connectBDD.php';
  $req = $bdd->prepare("SELECT * FROM etudiant WHERE id_etudiant = :id_etudiant");
  $req->execute(array(
      'id_etudiant' => $_SESSION['id_etudiant']));
  $resultat = $req->fetch();
$req-> closeCursor();
  ?>

  <!---titre---->

  <div id="titre">

    <h1>Bienvenue au formulaire de candidature à la promo de SIMPL<span class="clr">O</span>N Charleville-Mézières
    </h1>
  </div>


<!--  Barre de progression -->

  <center><hr class="ligne-prog"></center>
  <div id="progress-bar">
    <div class="cercle etape-1">1</div>
    <div class="cercle etape-1">2</div>
    <div class="cercle">3</div>
    <div class="etape-d"><i class="far fa-check-circle fa-2x bgd"></i></div>
  </div>

<!--  formulaire -->

  <center><form id="form" action="back/validation-update-form2.php" method="POST">

     <input type="hidden" name="idd" value=""><br>

    <fieldset class="float-left">
      <legend>Motivation <span class="clr">*</span></legend>

        <label>Si vous étiez un super-héros / une super-héroïne, qui seriez-vous et pourquoi?</label><br/>
        <textarea name="qhero_etudiant" value="" rows="7" cols="100" required><?php echo $resultat['qhero_etudiant']; ?></textarea><br/>
        <label>Racontez-nous un de vos "hacks" (pas forcément technique ou informatique):</label><br/>
        <textarea name="qhack_etudiant" value="" rows="7" cols="100" required><?php echo $resultat['qhack_etudiant']; ?></textarea><br/>


        <label>Dites-nous pourquoi vous souhaitez intégrer la formation :</label><br/>
        <textarea name="qformation_etudiant" value="" rows="7" cols="100" required><?php echo $resultat['qformation_etudiant']; ?></textarea><br/>


        <label>Racontez-nous votre parcours et détaillez-nous votre motivation en vous exprimant avec votre style,
        mais ne vous limitez pas à un texte tapé à la va-vite. Aussi, n'hésitez pas à faire une vidéo, un site
        ou toute autre chose qui démontrera votre envie, votre motivation et vos compétences!</label><br/>
        <textarea name="qparcours_etudiant" value="" rows="7" cols="100" required><?php echo $resultat['qparcours_etudiant']; ?></textarea><br/>

        <label>Dans un an, avec vos nouveaux superpouvoirs de code informatique, que souhaiteriez-vous faire dans votre vie?</label><br/>
        <textarea name="qpouvoir_etudiant" value="" rows="7" cols="100" required><?php echo $resultat['qpouvoir_etudiant']; ?></textarea><br/>

    </fieldset>

      <center>
        <button><a href="form_candidature_1.php">Revenir aux questions précédentes</a></button>
        <input type="submit" name="submit" value="Passez aux questions suivantes">
      </center>

    </form></center>

      <p class="float-none"><span class="clr">* </span> Toutes les questions sont obligatoires, mais restent modifiables tant
        que vous ne validez pas votre formulaire à la dernière étape.</p>

        <?php
        // pour fermer la première requête sur table infospromo

      //pour inclure le footer
    include 'include/footer.php';

    ?>


  <script src="js/main.js"></script>
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
