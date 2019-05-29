<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/folio.css">
  <title>PORTEFOLIO</title>
</head>

<?php
$bdd = new PDO('mysql:host=localhost;dbname=recrutement;charset=utf8', 'root', '');
$requete = "SELECT * FROM etudiant";
$reponse = $bdd->query($requete);
?>

<body>
  <?php include "header.php" ?>

  <center>
    <h1>SESSION N°1</h1>
  </center>


  <div class="cards-list">


      <?php
            while($donnees = $reponse->fetch())
            {
              ?>

  <a href="jury_admin.php?id=<?php echo $donnees["idhor"];?>">
    <div class="card">
      <div class="card_image">
        <img src="<?php echo $donnees["liphoto"]; ?>" /> </div>
      <div class="card_title">
        <p><?php echo $donnees["nom"]; ?> <?php echo $donnees["prenom"]; ?></p>
      </div>
    </div>
  </a>

    <?php
          }
          ?>



  </div>


  <?php include "footer.php" ?>
</body>

</html>
