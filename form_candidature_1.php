<?php
session_start();
if (isset($_SESSION['id_etudiant']) AND isset($_SESSION['pseudo_etudiant']))
{

      include ('include/connectBDD.php');

      $req = $bdd->prepare("SELECT * FROM etudiant WHERE id_etudiant = :id_etudiant");
      $req->execute(array(
          'id_etudiant' => $_SESSION['id_etudiant']));
      $resultat = $req->fetch();
      $req-> closeCursor();


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

  ?>

  <!---titre---->

  <div id="titre">

    <h1>Bienvenue au formulaire de candidature à la promo de SIMPL<span class="clr">O</span>N Charleville-Mézières
    </h1>
  </div>

  <!---time-line---->

  <center><hr class="ligne-prog"></center>
  <div id="progress-bar">
    <div class="cercle etape-1">1</div>
    <div class="cercle">2</div>
    <div class="cercle">3</div>
    <div class="etape-d"><i class="far fa-check-circle fa-2x bgd"></i></div>
  </div>

  <!---formulaire---->



  <form id="form" action="back/validation-update-form.php" method="POST">

        <fieldset class="float-left">
          <legend> Etat Civil <span class="clr">*</span></legend>

            <label>Prénom</label><br/>
            <input type="text" name="prenom_etudiant" value="<?php echo $resultat['prenom_etudiant']; ?>" maxlength="20" ><br/>


            <label>Nom</label><br/>
            <input type="text" name="nom_etudiant" value="<?php echo $resultat['nom_etudiant']; ?>" maxlength="20" ><br/>


            <label>Date de naissance</label><br/>
            <input type="date" name="datenaissance_etudiant" value="<?php echo $resultat['datenaissance_etudiant']; ?>" ><br/>


            <label>Adresse</label><br/>
            <input type="text" name="adresse_etudiant" value="<?php echo $resultat['adresse_etudiant']; ?>" ><br/>


            <label>Code postal</label><br/>
          <input type="text" name="codepostal_etudiant" value="<?php echo $resultat['codepostal_etudiant']; ?>" ><br/>


            <label>Ville</label><br/>
            <input type="text" name="ville_etudiant" value="<?php echo $resultat['ville_etudiant']; ?>" ><br/>



          <label>Nationalité</label><br/>
          <input type="text" name="nationalite_etudiant" value="<?php echo $resultat['nationalite_etudiant']; ?>" ><br/>


          <label>Email</label><br/>
          <input type="email" name="mail_etudiant" value="<?php echo $resultat['mail_etudiant']; ?>" ><br/>


          <label>Numéro de téléphone où l'on peut vous joindre (format xx-xx-xx-xx)</label><br/>
          <input type="tel" name="telephone_etudiant" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}" value="<?php echo $resultat['telephone_etudiant']; ?>" ><br/>

    </fieldset>

<!--2ème champ de formulaire-->

    <fieldset class="champ2">
      <legend>Votre statut<span class="clr">*</span></legend>

      <label>Votre statut actuel</label><br/><br/>
      <input type="radio" name="statut_etudiant" class="radio"
      <?php if (isset($resultat['statut_etudiant']) && $resultat['statut_etudiant']=="Etudiant.e") echo "checked";?> value="Etudiant.e">Etudiant.e (Vous ne pouvez pas postuler à notre formation)<br/>

      <input type="radio" name="statut_etudiant" class="radio"
      <?php if (isset($resultat['statut_etudiant']) && $resultat['statut_etudiant']=="Salarié.e") echo "checked";?> value="Salarié.e">Salarié.e (Vous ne pouvez pas postuler à notre formation)<br/>

      <input type="radio" name="statut_etudiant" class="radio"
      <?php if (isset($resultat['statut_etudiant']) && $resultat['statut_etudiant']=="Demandeur.se") echo "checked";?> value="Demandeur.se">Demandeur.se d'emploi indemnisé.e par Pôle Emploi<br/>

      <input type="radio" name="statut_etudiant" class="radio"
      <?php if (isset($resultat['statut_etudiant']) && $resultat['statut_etudiant']=="Demandeur.se_non") echo "checked";?> value="Demandeur.se_non">Demandeur.se d'emploi non indemnisé.e par Pôle Emploi<br/>

      <input type="radio" name="statut_etudiant" class="radio"
      <?php if (isset($resultat['statut_etudiant']) && $resultat['statut_etudiant']=="RSA") echo "checked";?> value="RSA">Allocataire RSA<br/>

      <input type="radio" name="statut_etudiant" class="radio"
      <?php if (isset($resultat['statut_etudiant']) && $resultat['statut_etudiant']=="ASS") echo "checked";?> value="ASS">Allocataire ASS<br/>

      <input type="radio" name="statut_etudiant" class="radio"
      <?php if (isset($resultat['statut_etudiant']) && $resultat['statut_etudiant']=="ASH") echo "checked";?> value="ASH">Allocataire ASH<br/>

      <input type="radio" name="statut_etudiant" class="radio"
      <?php if (isset($resultat['statut_etudiant']) && $resultat['statut_etudiant']=="Réfugié.e") echo "checked";?> value="Réfugié.e">Réfugié.e<br/>

      <input type="radio" name="statut_etudiant" class="radio"
      <?php if (isset($resultat['statut_etudiant']) && $resultat['statut_etudiant']=="Autre") echo "checked";?> value="Autre">Autre<br/>

      <br/><br/>

      <label>Quel est le dernier diplôme que vous ayez obtenu?</label><br/><br/>
      <input type="radio" name="diplome_etudiant" class="radio"
      <?php if (isset($resultat['diplome_etudiant']) && $resultat['diplome_etudiant']=="sans") echo "checked";?> value="sans">Sans diplôme<br/>

      <input type="radio" name="diplome_etudiant" class="radio"
      <?php if (isset($resultat['diplome_etudiant']) && $resultat['diplome_etudiant']=="brevet") echo "checked";?> value="brevet">Diplôme National du Brevet (brevet des collèges)<br/>

      <input type="radio" name="diplome_etudiant" class="radio"
      <?php if (isset($resultat['diplome_etudiant']) && $resultat['diplome_etudiant']=="CAP") echo "checked";?> value="CAP">CAP<br/>

      <input type="radio" name="diplome_etudiant" class="radio"
      <?php if (isset($resultat['diplome_etudiant']) && $resultat['diplome_etudiant']=="BEP") echo "checked";?> value="BEP">BEP<br/>

      <input type="radio" name="diplome_etudiant" class="radio"
      <?php if (isset($resultat['diplome_etudiant']) && $resultat['diplome_etudiant']=="bac") echo "checked";?> value="bac">Bac (dont équivalence bac)<br/>

      <input type="radio" name="diplome_etudiant" class="radio"
      <?php if (isset($resultat['diplome_etudiant']) && $resultat['diplome_etudiant']=="bac+2") echo "checked";?> value="bac+2">Bac +2<br/>

      <input type="radio" name="diplome_etudiant" class="radio"
      <?php if (isset($resultat['diplome_etudiant']) && $resultat['diplome_etudiant']=="licence") echo "checked";?> value="licence">Licence<br/>

      <input type="radio" name="diplome_etudiant" class="radio"
      <?php if (isset($resultat['diplome_etudiant']) && $resultat['diplome_etudiant']=="master") echo "checked";?> value="master">Master<br/>

      <input type="radio" name="diplome_etudiant" class="radio"
      <?php if (isset($resultat['diplome_etudiant']) && $resultat['diplome_etudiant']=="doctorat") echo "checked";?> value="doctorat">Doctorat<br/>

      <input type="radio" name="diplome_etudiant" class="radio"
      <?php if (isset($resultat['diplome_etudiant']) && $resultat['diplome_etudiant']=="autre") echo "checked";?> value="autre">Autre<br/><br/><br/>

      <label>Êtes-vous disponible à temps plein dès la pré-rentrée, le 18 février 2019 ? </label><br/><br/>
      <input type="radio" name="disponibilite_etudiant" class="radio"
      <?php if (isset($resultat['disponibilite_etudiant']) && $resultat['disponibilite_etudiant']=="oui") echo "checked";?> value="oui">oui<br/>

      <input type="radio" name="disponibilite_etudiant" class="radio"
      <?php if (isset($resultat['disponibilite_etudiant']) && $resultat['disponibilite_etudiant']=="non") echo "checked";?> value="non">non<br/>

      <br/><br/>

      <label>Insérez ici votre photo</label><br/><br/>
      <input type="file" name="photo_etudiant" value="" ><br/>


        <!--<input type="submit" value="Valider cette photo"><br/><br/>-->

    </fieldset>


      <center>
      <input type="submit" name="submit" value="Passez aux questions suivantes">
      </center>
</form>
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
