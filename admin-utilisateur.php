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

  <table id="tableau-gestion" >
    <caption>Tableau de gestion des utilisateurs</caption>
        <tr>
          <th>Nom</th>
          <th>Prénom</th>
          <th>Identifiant</th>
          <th>e-mail</th>
          <th style="background:black;">Jury</th>
          <th style="background:black;">Administrateur</th>
          <th style="background:black;">Supprimer</th>
        </tr>
        <tr>
          <td><?= $row['nom'];?></td>
          <td><?= $row['prenom'];?></td>
          <td><?= $row['ulogin'];?></td>
          <td><?= $row['mail'];?></td>
          <td><a href="#idjury"><i class="fas fa-user-edit fa-lg"></i></a></td>
          <td><a href="#idadmin"><i class="fas fa-user-edit fa-lg"></i></a></td>
          <td><a href="#idsupp"><i class="fas fa-trash-restore fa-lg"></i></a></td>
        </tr>
        <tr>
          <td><?= $row['nom'];?></td>
          <td><?= $row['prenom'];?></td>
          <td><?= $row['ulogin'];?></td>
          <td><?= $row['mail'];?></td>
          <td><i class="fas fa-user-edit fa-lg"></i></td>
          <td><i class="fas fa-user-edit fa-lg"></i></td>
          <td><i class="fas fa-trash-restore fa-lg"></i></td>
        </tr>
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
          <form id="form-modal" action="validation-val1s.php" method="POST">
            <label>Voulez-vous donner les droits "jury" à cet utilisateur? </label><br/><br/>
              <div class="cnt">
              <input type="radio" name="jury" class="radio"
            <?php if (isset($jury) && $jury=="oui") echo "checked";?> value="oui">oui<br/>

              <input type="radio" name="jury" class="radio"
            <?php if (isset($jury) && $jury=="non") echo "checked";?> value="non">non<br/>

              <input type="submit" name="submit" value="Valider">
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>

  <div id="idadmin" class="modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <header class="container">
          <a href="#" class="closebtn">×</a>
          <h4>Donner les droits "administrateur"</h4>
        </header>
        <div class="container">
          <form id="form-modal" action="validation-val1s.php" method="POST">
            <label>Voulez-vous donner les droits "jury" à cet utilisateur? </label><br/><br/>
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
          <form id="form-modal" action="validation-val1s.php" method="POST">
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

</div>


</body>
</html>
