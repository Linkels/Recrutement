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

  include 'header.php';

  ?>

  <!--  Titre encadré -->

  <div id="titre">
    <h1>Bienvenue au formulaire de candidature à la promo 1.3 de SIMPL<span class="clr">O</span>N Charleville-Mézières - 2
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

  <center><form id="form" action="/formulaire_candidature.php" method="POST">
    <fieldset class="float-left">
      <legend>Motivation <span class="clr">*</span></legend>

        <label>Si vous étiez un super-héros / une super-héroïne, qui seriez-vous et pourquoi?</label><br/>
        <textarea name="heros" rows="7" cols="100" required></textarea><br/>


        <label>Racontez-nous un de vos "hacks" (pas forcément technique ou informatique):</label><br/>
        <textarea name="hack" rows="7" cols="100" required></textarea><br/>


        <label>Dites-nous pourquoi vous souhaitez intégrer la formation :</label><br/>
        <textarea name="pourquoi" rows="7" cols="100" required></textarea><br/>


        <label>Racontez-nous votre parcours et détaillez-nous votre motivation en vous exprimant avec votre style,
        mais ne vous limitez pas à un texte tapé à la va_vite. Aussi, n'hésitez pas à faire une vidéo, un site
        ou toute autre chose qui démontrera votre envie, votre motivation et vos compétences!</label><br/>
        <textarea name="parcours" rows="7" cols="100" required></textarea><br/>

        <label>Dans un an, avec vos nouveaux superpouvoirs de code informatique, que souhaiteriez-vous faire dans votre vie?</label><br/>
        <textarea name="futur" rows="7" cols="100" required></textarea><br/>

    </fieldset>


  </form></center>

  <center>
    <button><a href="form_candidature_1.php">Revenir aux questions précédentes</a></button>
    <button><a href="form_candidature_3.php">Passez aux questions suivantes</a></button>
  </center>

      <p class="float-none"><span class="clr">* </span> Toutes les questions sont obligatoires, mais restent modifiables tant
        que vous ne validez pas votre formulaire à la dernière étape.</p>

    <!--pour inclure le footer-->
    <?php

    include 'footer.php';

    ?>


  <script src="js/main.js"></script>
</body>

</html>
