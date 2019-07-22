<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link rel="stylesheet" href="/Recrutement/css/folio.css">
  <link rel="stylesheet" href="/Recrutement/css/header.css">
  <title>PORTEFOLIO</title>
</head>

<?php
include '../include/connectBDD.php';
$requete = "SELECT * FROM etudiant";
$reponse = $bdd->query($requete);
?>

<body>
  <?php include "../include/header.php" ?>

  <center>
    <h1>SESSION N°1</h1>
  </center>


  <div class="cards-list">


      <?php
            while($donnees = $reponse->fetch())
            {
              ?>

  <a href="jury.php?id=<?php echo $donnees["id_etudiant"];?>">
    <div class="card">
      <div class="card_image">
        <img src="<?php echo $donnees["photo_etudiant"]; ?>" /> </div>
      <div class="card_title">
        <p><?php echo $donnees["nom_etudiant"]; ?> <?php echo $donnees["prenom_etudiant"]; ?></p>
      </div>
    </div>
  </a>

    <?php
          }
          ?>



  </div>


</body>

</html>
