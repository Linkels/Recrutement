<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link rel="stylesheet" href="/Recrutement/css/jury.css">
  <link rel="stylesheet" href="/Recrutement/css/animate.css">
  <title>JURY</title>
</head>

<body>
  <?php include '../include/connectBDD.php'; ?>
  <?php include "../include/header.php" ?>

  <?php
  $requete = "SELECT * FROM etudiant WHERE id_etudiant=" . $_GET["id"];
  $reponse = $bdd->query($requete);
  while ($donnees = $reponse->fetch())
  {
  ?>



  <center>
    <h1>CANDIDAT <?php echo $donnees["id_etudiant"]; ?> - JURY {NAME_JURY}</h1>
  </center>

    <!-- Jury Admin -->
    <div id="bloc_1" class="animated zoomInLeft">
      <h1 class="titre-bloc1">
        <img src="<?php echo $donnees["photo_etudiant"]; ?>" alt="">
      </h1>
      <center>
        <hr />
      </center>
      <h3 class="titre-inter-bloc1">
        <ul>
          <li>Nom : <?php echo $donnees["nom_etudiant"]; ?></li>
          <li>Prénom : <?php echo $donnees["prenom_etudiant"]; ?></li>
          <li>Date de naissance : <?php echo $donnees["datenaissance_etudiant"]; ?></li>
          <li>Adresse : <?php echo $donnees["adresse_etudiant"]; ?></li>
          <li>Nationalité : <?php echo $donnees["nationalite_etudiant"]; ?></li>
          <li>Email : <?php echo $donnees["mail_etudiant"]; ?></li>
          <li>N° de téléphone : <?php echo $donnees["telephone_etudiant"]; ?></li>
          <li>Dernier diplôme obtenu : <?php echo $donnees["diplome_etudiant"]; ?></li>
          <li>Disponibilité : <?php echo $donnees["disponibilite_etudiant"]; ?></li>
          <li>Statut : <?php echo $donnees["statut_etudiant"]; ?></li>
        </ul>
      </h3>
    </div>
    <!-- Fin du Jury admin -->

    <!-- Jury Motivation -->
    <div id="bloc_1" class="animated zoomInLeft">
      <h1 class="titre-bloc1">

      </h1>
      <center>
        <hr />
      </center>
      <h3 class="titre-inter-bloc1">
        <ul>
          <li>Réponse super héro : <?php echo $donnees["qhero_etudiant"]; ?></li>
          <li>Réponse "hacks" : <?php echo $donnees["qhack_etudiant"]; ?></li>
          <li>Raison d'intégrer Simplon : <?php echo $donnees["qformation_etudiant"]; ?></li>
          <li>Parcours et motivation : <?php echo $donnees["qparcours_etudiant"]; ?></li>
          <li>Vision dans un an : <?php echo $donnees["qpouvoir_etudiant"]; ?></li>
        </ul>
      </h3>
    </div>
    <!-- Fin du Jury Motivation -->

    <!-- Jury Tech -->
    <div id="bloc_1" class="animated zoomInLeft">
      <h1 class="titre-bloc1">

      </h1>
      <center>
        <hr />
      </center>
      <h3 class="titre-inter-bloc1">
        <ul>
          <li>Lien Lessons Sololearn : <a href="<?php echo $donnees["sololearn_etudiant"];?>"><?php echo $donnees["sololearn_etudiant"];?></a></li>
          <li>Lien Badges Codeacademy : <a href="<?php echo $donnees["codeacademy_etudiant"];?>"><?php echo $donnees["codeacademy_etudiant"];?></a></li>
          <li>Autre lien : <a href="<?php echo $donnees["autreplateforme_etudiant"];?>"><?php echo $donnees["autreplateforme_etudiant"];?></a></li>
          <li>Niveau anglais lu/écrit : <?php echo $donnees["anglais_etudiant"]; ?></li>
        </ul>
      </h3>
    </div>
    <!-- Fin Jury Tech -->

    <div id="bloc_1" class="animated zoomInLeft">
      <h1 class="titre-bloc1">
        Avis
      </h1>
      <center>
        <hr />
      </center>
      <h3 class="titre-inter-bloc1">
        <ul>
          <form class="fake" action="crea_avis.php" method="post">
            <center>
              <input type="text" name="Avis_Admin" placeholder="Avis_Admin">
              <div class="slidecontainer" style="width: 500px;">
                <p class="zero">0</p>
                <p class="other" style="padding-left: 48px;">-1</p>
                <p class="other" style="padding-left: 38px;">&nbsp1</p>
                <p class="other" style="padding-left: 38px;">+1</p>
                <p class="other" style="padding-left: 45px;">-2</p>
                <p class="other" style="padding-left: 40px;">&nbsp2</p>
                <p class="other" style="padding-left: 40px;">+2</p>
                <p class="other" style="padding-left: 40px;">-3</p>
                <p class="other" style="padding-left: 40px;">&nbsp3</p>
                <div class="col-75">

                  <input type="range" name="Note_Admin" min="1" class="slider" max="9" step=0 value=0 oninput="valora.value=parseInt(notes.value)" />
                  <output name="valora"> </output>
                </div>
              </div>

              <script>
                $(function() {
                  $('.range').next().text('--'); // Valeur par défaut
                  $('.range').on('input', function() {
                    var $set = $(this).val();
                    $(this).next().text($set);
                  });
                });
              </script>

              <button class="btn" type="submit" name="submit">Save</button>
          </form>
              <div class="bouton">
                <p>
                  <a href="../tropdefichier/folio.php">Retour Folio</a>
                </p>
        </ul>
      </h3>
    </div>

  </div>

  <?php

}
$reponse->closeCursor();
?>

</body>
</html>
