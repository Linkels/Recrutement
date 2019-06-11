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
      <h1>Bienvenue <?= $row['user'];?> à la gestion des sessions
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

<form id="form" action="validation-session.php" method="POST">

      <fieldset class="float-left">
        <legend> Création d'une session </legend>

          <div class="form-flex">
            <div class="form-left">
              <label>Nom de la session</label><br/>
              <input type="text" name="nom_session" value="<?= $nom_session;?>" maxlength="20" required><br/>


              <label>Date de la session</label><br/>
              <input type="date" name="date_session" value="<?= $date_session;?>" required><br/>


              <label>Heure de la session</label><br/>
              <input type="time" name="heure_session" value="<?= $heure_session;?>" required><br/>

            </div>
            <div class="form-right">

              <label>Nom du premier jury sélectionné</label><br/>
              <input type="text" name="jury1" value="<?= $jury1;?>" required><br/>

              <label>Nom du deuxième jury sélectionné</label><br/>
              <input type="text" name="jury2" value="<?= $jury2;?>"><br/>

              <label>Nom du troisième jury sélectionné</label><br/>
              <input type="text" name="jury3" value="<?= $jury3;?>"><br/>
            </div>
          </div>
    </fieldset>

    <center>
      <input type="reset" value="Effacer">
      <input type="submit" name="submit" value="Créer une nouvelle session">
    </center>

  </form>

</div>


</body>
</html>
