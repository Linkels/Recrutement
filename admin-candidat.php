<?php
session_start();
?>
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

<body id="haut">
  <!--pour inclure le header-->
  <?php

  include 'header.php';


  include 'connectBDD.php';
  $i=0;
  $sql = $bdd->prepare("SELECT * FROM utilisateur");
  $sql->execute();

  $resultat = $sql->fetch();

  ?>

<!--début du contenu "main"-->

  <div id="main">

    <!---titre---->

    <div id="titre">
      <h1>Bienvenue <?= $_SESSION['prenom']." ".strtoupper($_SESSION['nom']);?> à la gestion des candidats
      </h1>
    </div>

    <?php
    $sql = "SELECT * FROM etudiant";
    foreach ($bdd->query($sql) as $donnees) {
      $i++;
        }
       ?>

    <aside> Nombre de candidats inscrits: <span class="bold"><?= $i; $i=0?></span></aside>
    <?php

    $sql->closeCursor;
    ?>

<!--début menu gestion-->
  <div class="vertical-menu">
    <a href="admin-utilisateur.php">Utilisateurs</a>
    <a href="admin-candidat.php">Candidats</a>
    <a href="admin-session.php">Sessions</a>
    <a href="admin-infospromo.php">Infos Promo</a>
    <a href="#deconnexion">Déconnexion</a>
  </div>

<!--début tableau Utilisateurs-->

<?php
  $sql = "SELECT * FROM etudiant";

?>



  <table id="tableau-gestion" >
    <caption>Tableau de gestion des utilisateurs</caption>
        <tr>
          <th>Nom</th>
          <th>Prénom</th>
          <th>Date inscription</th>
          <th style="color:black;">Détails infos</th>
          <th style="background:black;">Validation 1ère sélection</th>
          <th style="background:black;">Choix de la session</th>
          <th style="background:black;">Note</th>
          <th style="background:black;">Validation 2ème sélection</th>
        </tr>
        <tr>
          <?php
          foreach ($bdd->query($sql) as $donnees) {
            $i++;
             ?>
          <td><?= $donnees['nom'];?></td>
          <td><?= $donnees['prenom'];?></td>
          <td><?= $donnees['date_insc'];?></td>
          <td><a href="admin-detail.php?vab=<?= $donnees['idhor'];?>"><i class="fas fa-info-circle fa-lg"></i></a></td>
          <td><a href="#idval1"><i class="fas fa-check-square fa-lg"></i></a></td>
          <td><a href="#idsession"><i class="fas fa-list-ol fa-lg"></i></a></td>
          <td><?= $row['moynote'];?></td>
          <td><a href="#idval2"><i class="fas fa-check-circle fa-2x bgd"></i></a></td>
        </tr>
        <?php
        }
        $sql->closeCursor;
        ?>
  </table>
    <aside> Nombre de candidats inscrits: <span class="bold"><?= $i;?></span></aside>

  <!--début fenêtres modales-->

  <div id="idval1" class="modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <header class="container">
          <a href="#" class="closebtn">×</a>
          <h4>Validation 1ère sélection</h4>
        </header>
        <div class="container">
          <form id="form-modal" action="validation-val1s.php" method="POST">
            <label>Voulez-vous sélectionner ce candidat pour les sessions? </label><br/><br/>
              <div class="cnt">
              <input type="radio" name="val1" class="radio"
            <?php if (isset($val1) && $val1=="oui") echo "checked";?> value="oui">oui<br/>

              <input type="radio" name="val1" class="radio"
            <?php if (isset($val1) && $val1=="non") echo "checked";?> value="non">non<br/>

              <input type="submit" name="submit" value="Valider">
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>

  <div id="idsession" class="modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <header class="container">
          <a href="#" class="closebtn">×</a>
          <h4>Choix de la session</h4>
        </header>
        <div class="container">
          <form id="form-modal" action="validation-session.php" method="POST">
              <div class="cnt">
              <input type="radio" name="session" class="radio"
            <?php if (isset($session) && $session=="oui") echo "checked";?> value="oui">Session 1<br/>

              <input type="radio" name="session" class="radio"
            <?php if (isset($session) && $session=="non") echo "checked";?> value="non">Session 2<br/>

              <input type="radio" name="session" class="radio"
            <?php if (isset($session) && $session=="non") echo "checked";?> value="non">Session 3<br/>

              <input type="submit" name="submit" value="Valider">
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>

  <div id="idval2" class="modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <header class="container">
          <a href="#" class="closebtn">×</a>
          <h4>Validation 2ème sélection</h4>
        </header>
        <div class="container">
          <form id="form-modal" action="validation-val1s.php" method="POST">
            <label>Voulez-vous sélectionner ce candidat pour la prairie? </label><br/><br/>
              <div class="cnt">
              <input type="radio" name="val1" class="radio"
            <?php if (isset($val1) && $val1=="oui") echo "checked";?> value="oui">oui<br/>

              <input type="radio" name="val1" class="radio"
            <?php if (isset($val1) && $val1=="non") echo "checked";?> value="non">non<br/>

              <input type="submit" name="submit" value="Valider">
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>

  <!--début fenêtres modales-->

  <div id="deconnexion" class="modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <header class="container">
          <a href="#" class="closebtn">×</a>
          <h4>Déconnexion</h4>
        </header>
        <div class="container">
          <form id="form-modal" action="validation-val1s.php" method="POST">
            <label>Etes-vous sûr de vouloir vous déconnecter? </label><br/><br/>
              <div class="cnt">
              <input type="radio" name="deconnect" class="radio"
            <?php if (isset($jury) && $jury=="oui") echo "checked";?> value="oui">Oui<br/>

              <input type="radio" name="jury" class="radio"
            <?php if (isset($jury) && $jury=="non") echo "checked";?> value="non">Non<br/>

              <input type="submit" name="submit" value="Valider">
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
  <!--//////////////////////////////  BACK TO TOP BTN  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

    <div><a id="cRetour" class="cInvisible" href="#haut"></a></div>

    </div>
    <!--//////////////////////////////  SCRIPTS  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

      <script src="js/main.js"></script>



</body>
</html>
