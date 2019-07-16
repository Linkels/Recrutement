<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link rel="stylesheet" href="css/jury.css">
  <title>JURY ADMIN</title>
</head>

<body>
  <?php include "header.php" ?>
  <?php include "connectBDD.php" ?>

  <?php
$requete = "SELECT * FROM etudiant WHERE idhor=" . $_GET["id"];
$reponse = $bdd->query($requete);
while ($donnees = $reponse->fetch())
{
?>

  <?php
  $sql = $bdd->prepare("SELECT * FROM jury_admin");
  $sql->execute();
  $resultat = $sql->fetch();
  ?>

  <?php
  	$avis = "2";
  	$note = "";
  	$id_jadmin = 0;

  	if (isset($_POST['save'])) {
  		$avis = $_POST['avis'];
  		$note = $_POST['note'];

  		mysqli_query($db, "INSERT INTO jury_admin (avis, note) VALUES ('$avis', '$note')");
  		$_SESSION['message'] = "Note sauvegardé !";
  		header('location: jury_admin.php');
  	}
    ?>


  <center>
    <h1>CANDIDAT <?php echo $donnees["idhor"]; ?> - JURY ADMIN</h1>
  </center>
  <div>
    <div id="bloc_1" class="animated zoomInLeft">
      <h1 class="titre-bloc1">
        <img src="<?php echo $donnees["liphoto"]; ?>" width="10%" alt="">
      </h1>
      <center>
        <hr />
      </center>
      <h3 class="titre-inter-bloc1">
        <ul>
          <li>Nom : <?php echo $donnees["nom"]; ?></li>
          <li>Prénom : <?php echo $donnees["prenom"]; ?></li>
          <li>Date de naissance : <?php echo $donnees["datenai"]; ?></li>
          <li>Adresse : <?php echo $donnees["adresse_perso"]; ?></li>
          <li>Nationalité : <?php echo $donnees["nationalite"]; ?></li>
          <li>Email : <?php echo $donnees["email"]; ?></li>
          <li>N° de téléphone : <?php echo $donnees["numtels"]; ?></li>
          <li>Dernier diplôme obtenu : <?php echo $donnees["lastdipl"]; ?></li>
          <li>Disponibilité : <?php echo $donnees["disponib"]; ?></li>
          <li>Statut : <?php echo $donnees["situactu"]; ?></li>
        </ul>
      </h3>
    </div>

    <?php

    }
    $reponse->closeCursor();
    ?>

    <div id="bloc_1" class="animated zoomInLeft">
      <h1 class="titre-bloc1">
        Avis
      </h1>
      <center>
        <hr />
      </center>
      <h3 class="titre-inter-bloc1">
        <ul>
          <div class="fake">
            <center>
              <textarea></textarea>
              <div class="input-group">
                <label>avis</label>
                <input type="text" name="avis" value="<?php echo $avis; ?>">
              </div>
              <button class="btn" type="submit" name="save">Save</button>
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
                <input type="range" min="1" max="9" value="5" class="slider" id="myRange">
              </div>



        </ul>
      </h3>
    </div>

  </div>

</body>

</html>
