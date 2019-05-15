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
<!--  Barre de progression -->

  <center><hr class="ligne-prog"></center>
  <div id="progress-bar">
    <div class="cercle etape-1">1</div>
    <div class="cercle etape-1">2</div>
    <div class="cercle etape-1">3</div>
    <div class="etape-d"><i class="far fa-check-circle fa-2x bgd"></i></div>
  </div>

<!--  formulaire -->

  <form id="form" action="/formulaire_candidature.php" method="POST">
    <fieldset class="float-left">
      <legend> Pré-requis <span class="clr">*</span></legend>

        <label>Pré-requis #1 : PHP - Lessons Sololearn (OBLIGATOIRE) / Déposer ci-dessous le lien de votre profil Sololearn :</label><br/>
        <input type="text" name="php" maxlength="100" required><br/>


        <label>Pré-requis #2 : HTML et CSS - Badges Codecademy (OBLIGATOIRE) / Déposer ici le lien de votre profil public Codecademy :</label><br/>
        <input type="text" name="html/css" maxlength="100" required><br/>


        <label>Si vous avez des profils supplémentaires sur d'autres plate-formes  similaires, comme Openclassrooms ou Codeschool, copiez ici le(s) lien(s) vers ce(s) profil(s) public(s) (FACULTATIF)</label><br/>
        <input type="text" name="autres profils"><br/>


        <label>Quel est votre niveau d'anglais (lu / écrit)? Pas  de panique, cette question est posée à titre indicatif</label><br/>
        <select type="datalist" name="anglais" required><br/>
          <option value="php">PHP</option>
        </select><br/><br/>

    </fieldset>


  </form>

  <center>
    <button><a href="form_candidature_2.php">Revenir aux questions précédentes</a></button>
    <button><a href="form_candidature_valider.php">Passez aux questions suivantes</a></button>
  </center>

      <p class="float-none"><span class="clr">* </span> Toutes les questions sont obligatoires, à l'excpetion de la dernière, mais restent modifiables tant
        que vous ne validez pas votre formulaire à la dernière étape.</p>

    <!--pour inclure le footer-->
    <?php

    include 'footer.php';

    ?>

  <script src="js/main.js"></script>
</body>

</html>
