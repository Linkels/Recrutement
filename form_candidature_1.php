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


  include 'connectBDD.php';

    $sql = "SELECT * FROM infospromo";
    foreach ($bdd->query($sql) as $row){
}
  ?>

  <!---titre---->

  <div id="titre">
    <h1>Bienvenue au formulaire de candidature à la promo <?= $row['nompromo'];?> de SIMPL<span class="clr">O</span>N Charleville-Mézières
    </h1>
  </div>

  <?php
    $bdd=null;
  ?>

  <!---time-line---->

  <center><hr class="ligne-prog"></center>
  <div id="progress-bar">
    <div class="cercle etape-1">1</div>
    <div class="cercle">2</div>
    <div class="cercle">3</div>
    <div class="etape-d"><i class="far fa-check-circle fa-2x bgd"></i></div>
  </div>

  <!---formulaire---->

  <form id="form" action="/formulaire_candidature.php" method="POST">
    <fieldset class="float-left">
      <legend>Etat Civil<span class="clr">*</span></legend>

        <label>Prénom</label><br/>
        <input type="text" name="prenom" maxlength="20" required><br/>


        <label>Nom</label><br/>
        <input type="text" name="nom" maxlength="20" required><br/>


        <label>Date de naissance</label><br/>
        <input type="date" name="date_naissance" value="jj/mm/aaaa" required><br/>


        <label>Adresse</label><br/>
        <input type="text" name="adresse" required><br/>
        <label>Code postal</label><br/>
        <select name="code_postal" required><br/>
          <option value="php">PHP</option>
        </select><br/><br/>
        <label>Ville</label><br/>
        <input type="text" name="ville" disabled><br/>


      <label>Nationalité</label><br/>
      <select name="nationalité" required><br/>
          <option value="php">PHP</option>
      </select><br/><br/>

      <label>Email</label><br/>
      <input type="email" name="email" required><br/>
      <label>Numéro de téléphone où l'on peut vous joindre</label><br/>
      <input type="tel" name="tel" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}" value="xx-xx-xx-xx-xx" required><br/>
    </fieldset>

<!--2ème champ de formulaire-->

    <fieldset class="champ2">
      <legend>Votre statut<span class="clr">*</span></legend>

      <label>Vote statut actuel</label><br/>
      <select type="datalist" name="statut" required><br/>
        <option value="php">PHP</option>
      </select><br/><br/>

      <label>Quel est le dernier diplôme que vous ayez obtenu?</label><br/>
      <input type="text" name="diplôme" required><br/>

        <label>Insérez ici votre photo</label><br/>
        <input type="file" name="photo" required><br/>
        <input type="submit" value="Valider cette photo"><br/><br/>

    </fieldset>
  </form>

      <center><button><a href="form_candidature_2.php">Passez aux questions suivantes</a></button></center>

      <p class="float-none"><span class="clr">* </span> Toutes les questions sont obligatoires, mais restent modifiables tant
        que vous ne validez pas votre formulaire à la dernière étape.</p>




    <!--pour inclure le footer-->
    <?php

    include 'footer.php';

    ?>


  <script src="js/main.js"></script>
</body>

</html>
