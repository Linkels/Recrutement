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
  <link rel="stylesheet" href="css/form_cand_1.css">
  <link rel="stylesheet" href="css/footer.css">

</head>

<body>

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
    <div class="cercle etape-1">3</div>
    <div class="etape-d"><i class="far fa-check-circle fa-2x bgd"></i></div>
  </div>

<!--  formulaire -->

  <form id="form" action="back/validation-update-form3.php" method="POST">

     <input type="hidden" name="idb" value=""><br>

    <fieldset class="float-left">
      <legend> Pré-requis <span class="clr">*</span></legend>

        <label>Pré-requis #1 : PHP - Lessons Sololearn (OBLIGATOIRE) / Déposer ci-dessous le lien de votre profil Sololearn :</label><br/>
        <input type="text" name="sololearn_etudiant" maxlength="100" value="<?php echo $resultat['sololearn_etudiant']; ?>" required><br/>


        <label>Pré-requis #2 : HTML et CSS - Badges Codecademy (OBLIGATOIRE) / Déposer ici le lien de votre profil public Codecademy :</label><br/>
        <input type="text" name="codeacademy_etudiant" maxlength="100" value="<?php echo $resultat['codeacademy_etudiant']; ?>" required><br/>


        <label>Si vous avez des profils supplémentaires sur d'autres plate-formes  similaires, comme Openclassrooms ou Codeschool, copiez ici le(s) lien(s) vers ce(s) profil(s) public(s) (FACULTATIF)</label><br/>
        <input type="text" name="autreplateforme_etudiant" value="<?php echo $resultat['autreplateforme_etudiant']; ?>" ><br/>


        <label>Quel est votre niveau d'anglais (lu / écrit)? Pas  de panique, cette question est posée à titre indicatif</label><br/>
        <input type="radio" name="anglais_etudiant" class="radio" <?php if (isset($resultat['anglais_etudiant']) && $resultat['anglais_etudiant']=="Très bon") echo "checked";?> value="Très bon"> Très bon <br/>

        <input type="radio" name="anglais_etudiant" class="radio" <?php if (isset($resultat['anglais_etudiant']) && $resultat['anglais_etudiant']=="Bon") echo "checked";?> value="Bon">Bon <br/>

          <input type="radio" name="anglais_etudiant" class="radio" <?php if (isset($resultat['anglais_etudiant']) && $resultat['anglais_etudiant']=="Moyen") echo "checked";?> value="Moyen">Moyen <br/>

          <input type="radio" name="anglais_etudiant" class="radio" <?php if (isset($resultat['anglais_etudiant']) && $resultat['anglais_etudiant']=="Nul") echo "checked";?> value="Nul">Nul<br/>

    </fieldset>

    <center>
      <button><a href="form_candidature_2.php">Revenir aux questions précédentes</a></button>
      <input type="submit" name="submit" value="Passez à la validation de votre inscription">
    </center>
  </form>


      <p class="float-none"><span class="clr">* </span> Toutes les questions sont obligatoires, à l'exception de la dernière, mais restent modifiables tant
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
  echo " il y a un soucis, vous n'êtes pas connecté, merci de vous reconnecter à cette page : <a href='connexion.php'> en cliquant ici </a>";
}
