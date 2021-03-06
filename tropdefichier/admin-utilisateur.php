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
  <link rel="stylesheet" href="../css/header.css">
  <link rel="stylesheet" href="../css/admin.css">
</head>

<body id="haut">
  <!--pour inclure le header-->
  <?php

  include '../include/header.php';


  include '../include/connectBDD.php';



?>

<!--début du contenu "main"-->

  <div id="main">

    <!---titre---->

    <div id="titre">
      <h1>Bienvenue <?= $_SESSION['prenom']." ".strtoupper($_SESSION['nom']);?> à la gestion des utilisateurs
      </h1>
    </div>

<!--début menu gestion-->
  <div class="vertical-menu">
    <a href="admin-utilisateur.php">Utilisateurs</a>
    <a href="admin-candidat.php">Candidats</a>
    <a href="admin-session.php">Sessions</a>
    <a href="admin-infospromo.php">Infos Promo</a>
    <a href="#deconnexion">Déconnexion</a>
  </div>

<!--début formulaire sessions-->

<?php
  $sql = "SELECT * FROM user";
?>

  <table id="tableau-gestion" >
    <caption>Tableau de gestion des utilisateurs</caption>
        <tr>
          <th>ID</th>
          <th>Nom</th>
          <th>Prénom</th>
          <th>Identifiant</th>
          <th>e-mail</th>
          <th style="background:black;">Jury</th>
          <th style="background:black;">Administrateur</th>
          <th style="background:black;">Supprimer</th>
        </tr>
        <tr>
          <?php
          foreach ($bdd->query($sql) as $donnees) {
            $i++;
             ?>
          <td><?= $donnees['id_user'];?></td>
          <td><?= $donnees['nom_user'];?></td>
          <td><?= $donnees['prenom_user'];?></td>
          <td><?= $donnees['pseudo_user'];?></td>
          <td><?= $donnees['mail_user'];?></td>
          <td><a href="droits-jury.php?id=<?= $donnees['id_user'];?>"><i class="fas fa-user-edit fa-lg"></i></a></td>
          <td><a href="#idadmin"><i class="fas fa-user-edit fa-lg"></i></a></td>
          <td><a href="#idsupp"><i class="fas fa-trash-restore fa-lg"></i></a></td>
        </tr>
        <?php
        }
        $sql->closeCursor;
        ?>

  </table>


  <!--début fenêtres modales-->

  <div id="idjury" class="modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <header class="container">
          <a href="#" class="closebtn">×</a>
          <h4>Donner les droits "jury"</h4>
        </header>
        <div class="container">
          <form id="form-modal" action="back/validation-jury.php?vall="<?php $id02; ?> method="POST">
            <?php
              //$id2 = $_GET['val'];

              echo $id02;
             ?>
             <input type="hidden" name="idd" value="<?= $id02;?>"><br>
            <label>Quels droits "jury" voulez-vous donner à cet utilisateur? </label><br/><br/>
              <div class="cnt">
              <input type="radio" name="jury" class="radio"
            <?php if (isset($jury) && $jury=="jury_admin") echo "checked";?> value="jury_admin">Jury administration<br/>

              <input type="radio" name="jury" class="radio"
            <?php if (isset($jury) && $jury=="jury_motiv") echo "checked";?> value="jury_motiv">Jury motivation<br/>

            <input type="radio" name="jury" class="radio"
          <?php if (isset($jury) && $jury=="jury_tech") echo "checked";?> value="jury_tech">Jury technique<br/>

              <input type="submit" name="submit" value="Valider">
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
      <?php

      $sql->closeCursor;
      ?>
  <div id="idadmin" class="modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <header class="container">
          <a href="#" class="closebtn">×</a>
          <h4>Donner les droits "administrateur"</h4>
        </header>
        <div class="container">
          <form id="form-modal" action="back/validation-admin.php" method="POST">
            <label>Voulez-vous donner les droits "administrateur" à cet utilisateur? </label><br/><br/>
              <div class="cnt">
              <input type="radio" name="admin" class="radio"
            <?php if (isset($admin) && $admin=="oui") echo "checked";?> value="oui">oui<br/>

              <input type="radio" name="admin" class="radio"
            <?php if (isset($admin) && $admin=="non") echo "checked";?> value="non">non<br/>

              <input type="submit" name="submit" value="Valider">
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>

  <div id="idsupp" class="modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <header class="container">
          <a href="#" class="closebtn">×</a>
          <h4>Supprimer un utilisateur</h4>
        </header>
        <div class="container">
          <form id="form-modal" action="back/validation-val1s.php" method="POST">
            <label>Voulez-vous supprimer cet utilisateur? </label><br/><br/>
              <div class="cnt">
              <input type="radio" name="supp" class="radio"
            <?php if (isset($supp) && $supp=="oui") echo "checked";?> value="oui">oui<br/>

              <input type="radio" name="supp" class="radio"
            <?php if (isset($supp) && $supp=="non") echo "checked";?> value="non">non<br/>

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
          <form id="form-modal" action="back/validation-val1s.php" method="POST">
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
