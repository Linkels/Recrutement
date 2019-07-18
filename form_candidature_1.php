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

  $sql = "SELECT * FROM infospromo ORDER BY idip DESC LIMIT 1";
  $etudiant = $bdd->prepare($sql);
  $etudiant->execute();
 foreach ($etudiant as $row){
  ?>

  <!---titre---->

  <div id="titre">

    <h1>Bienvenue au formulaire de candidature à la promo <?= $row['nompromo'];?> de SIMPL<span class="clr">O</span>N Charleville-Mézières
    </h1>
  </div>

  <?php
    }
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



  <form id="form" action="validation-temp-form1.php" method="POST">

        <fieldset class="float-left">
          <legend> Etat Civil <span class="clr">*</span></legend>

            <label>Prénom</label><br/>
            <input type="text" name="prenom" value="" maxlength="20" required><br/>


            <label>Nom</label><br/>
            <input type="text" name="nom" value="" maxlength="20" required><br/>


            <label>Date de naissance</label><br/>
            <input type="date" name="date_naissance" value="" required><br/>


            <label>Adresse</label><br/>
            <input type="text" name="adresse" value="" required><br/>


            <label>Code postal</label><br/>
          <input type="text" name="code_postal" value="" required><br/>


            <label>Ville</label><br/>
            <input type="text" name="ville" value="" required><br/>



          <label>Nationalité</label><br/>
          <input type="text" name="nationalite" value="" required><br/>


          <label>Email</label><br/>
          <input type="email" name="email" value="" required><br/>


          <label>Numéro de téléphone où l'on peut vous joindre (format xx-xx-xx-xx)</label><br/>
          <input type="tel" name="tel" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}" value="" required><br/>

    </fieldset>

<!--2ème champ de formulaire-->

    <fieldset class="champ2">
      <legend>Votre statut<span class="clr">*</span></legend>

      <label>Votre statut actuel</label><br/><br/>
      <input type="radio" name="statut" class="radio"
      <?php if (isset($statut) && $statut=="Etudiant.e") echo "checked";?> value="Etudiant.e">Etudiant.e (Vous ne pouvez pas postuler à notre formation)<br/>

      <input type="radio" name="statut" class="radio"
      <?php if (isset($statut) && $statut=="Salarié.e") echo "checked";?> value="Salarié.e">Salarié.e (Vous ne pouvez pas postuler à notre formation)<br/>

      <input type="radio" name="statut" class="radio"
      <?php if (isset($statut) && $statut=="Demandeur.se") echo "checked";?> value="Demandeur.se">Demandeur.se d'emploi indemnisé.e par Pôle Emploi<br/>

      <input type="radio" name="statut" class="radio"
      <?php if (isset($statut) && $statut=="Demandeur.se_non") echo "checked";?> value="Demandeur.se_non">Demandeur.se d'emploi non indemnisé.e par Pôle Emploi<br/>

      <input type="radio" name="statut" class="radio"
      <?php if (isset($statut) && $statut=="RSA") echo "checked";?> value="RSA">Allocataire RSA<br/>

      <input type="radio" name="statut" class="radio"
      <?php if (isset($statut) && $statut=="ASS") echo "checked";?> value="ASS">Allocataire ASS<br/>

      <input type="radio" name="statut" class="radio"
      <?php if (isset($statut) && $statut=="ASH") echo "checked";?> value="ASH">Allocataire ASH<br/>

      <input type="radio" name="statut" class="radio"
      <?php if (isset($statut) && $statut=="Réfugié.e") echo "checked";?> value="Réfugié.e">Réfugié.e<br/>

      <input type="radio" name="statut" class="radio"
      <?php if (isset($statut) && $statut=="Autre") echo "checked";?> value="Autre">Autre<br/>

      <br/><br/>

      <label>Quel est le dernier diplôme que vous ayez obtenu?</label><br/><br/>
      <input type="radio" name="diplome" class="radio"
      <?php if (isset($diplome) && $diplome=="sans") echo "checked";?> value="sans">Sans diplôme<br/>

      <input type="radio" name="diplome" class="radio"
      <?php if (isset($diplome) && $diplome=="brevet") echo "checked";?> value="brevet">Diplôme National du Brevet (brevet des collèges)<br/>

      <input type="radio" name="diplome" class="radio"
      <?php if (isset($diplome) && $diplome=="CAP") echo "checked";?> value="CAP">CAP<br/>

      <input type="radio" name="diplome" class="radio"
      <?php if (isset($diplome) && $diplome=="BEP") echo "checked";?> value="BEP">BEP<br/>

      <input type="radio" name="diplome" class="radio"
      <?php if (isset($diplome) && $diplome=="bac") echo "checked";?> value="bac">Bac (dont équivalence bac)<br/>

      <input type="radio" name="diplome" class="radio"
      <?php if (isset($diplome) && $diplome=="bac+2") echo "checked";?> value="bac+2">Bac +2<br/>

      <input type="radio" name="diplome" class="radio"
      <?php if (isset($diplome) && $diplome=="licence") echo "checked";?> value="licence">Licence<br/>

      <input type="radio" name="diplome" class="radio"
      <?php if (isset($diplome) && $diplome=="master") echo "checked";?> value="master">Master<br/>

      <input type="radio" name="diplome" class="radio"
      <?php if (isset($diplome) && $diplome=="doctorat") echo "checked";?> value="doctorat">Doctorat<br/>

      <input type="radio" name="diplome" class="radio"
      <?php if (isset($diplome) && $diplome=="autre") echo "checked";?> value="autre">Autre<br/><br/><br/>

      <label>Êtes-vous disponible à temps plein dès la pré-rentrée, le 18 février 2019 ? </label><br/><br/>
      <input type="radio" name="disponib" class="radio"
      <?php if (isset($disponib) && $disponib=="oui") echo "checked";?> value="oui">oui<br/>

      <input type="radio" name="disponib" class="radio"
      <?php if (isset($disponib) && $disponib=="non") echo "checked";?> value="non">non<br/>

      <br/><br/>

      <label>Insérez ici votre photo</label><br/><br/>
      <input type="file" name="photo" value="" required><br/>


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

    $etudiant->closeCursor();

  //pour inclure le footer
    include 'footer.php';

    ?>


  <script src="js/main.js"></script>
</body>

</html>
