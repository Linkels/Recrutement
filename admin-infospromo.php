<!DOCTYPE html>
<html lang="fr">

<head>
  <title>Simplon Charleville _ administration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="img/favicon.ico" />

  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  <!--  pour le css natif -->
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/admin.css">
</head>

<body>
  <!--pour inclure le header-->
  <?php

  include 'header.php';


  include 'connectBDD.php';

  //  $sql = "SELECT * FROM utlisateur";
        //foreach ($bdd->query($sql) as $row){
//}
  ?>

<!--début du contenu "main"-->

  <div id="main">

    <!---titre---->

    <div id="titre">
      <h1>Bienvenue <?= $row['user'];?> à la gestion des informations de la promo
      </h1>
    </div>

<!--début menu gestion-->
  <div class="vertical-menu">
    <a href="admin-utilisateur.php">Utilisateurs</a>
    <a href="admin-candidat.php">Candidats</a>
    <a href="admin-session.php">Sessions</a>
    <a href="admin-infospromo.php">Infos Promo</a>
  </div>

<!--début formulaire sessions-->

<form id="form" action="validation-infospromo.php" method="POST">

      <fieldset class="float-left">
        <legend> Modifier les informations de la promo </legend>

              <label>Nom de la promo</label><br/>
              <input type="text" name="nompromo" value="<?= $nompromo;?>" maxlength="10" required><br/>


              <label>Date de fin pour candidater</label><br/>
              <input type="date" name="datecandidature" value="<?= $datecandidature;?>" required><br/>


              <label>Date de début de la promo</label><br/>
              <input type="date" name="datedebutpromo" value="<?= $datedebutpromo;?>" required><br/>

              <label>Date de fin de la promo</label><br/>
              <input type="date" name="datefinpromo" value="<?= $datefinpromo;?>" required><br/>

    </fieldset>

    <center>
      <input type="reset" value="Effacer">
      <input type="submit" name="submit" value="Modifier les informations de la promo">
    </center>

  </form>

</div>


</body>
</html>
