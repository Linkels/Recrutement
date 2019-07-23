<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <title>Simplon Charleville _ administration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../img/favicon.ico" />

  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  <!--  pour le css natif -->
  <link rel="stylesheet" href="../css/header.css">
  <link rel="stylesheet" href="../css/admin-pages.css">
</head>

<body id="haut">

  <?php

  include '../include/header.php';

  include '../include/connectBDD.php';

?>


   <div class="page-dialog animated slidingInUp ">
       <div class="page-content">
         <header class="container">
          <h4>Attribuer les droits "jury" à un utilisateur</h4>
        </header>
        <div class="container">
          <form id="form-page" action="back/validation-jury.php?vall="<?php $id02; ?> method="POST">
             <input type="hidden" name="idd" value="<?= $id02;?>"><br>
            <label>Quels droits "jury" voulez-vous donner à
              <?php
                $current_id=$_GET['id'];
                $req=$bdd->query("SELECT * from user WHERE id_user= '".$current_id."'");
                $res=$req->fetch();

                echo $res['prenom_user'].' '.strtoupper($res['nom_user']);
              ?>?
           </label><br/><br/>
              <div class="cnt-page">
              <input type="radio" name="jury" class="radio"
            <?php if (isset($jury) && $jury=="jury_admin") echo "checked";?> value="jury_admin">Jury administration<br/>

              <input type="radio" name="jury" class="radio"
            <?php if (isset($jury) && $jury=="jury_motiv") echo "checked";?> value="jury_motiv">Jury motivation<br/>

            <input type="radio" name="jury" class="radio"
          <?php if (isset($jury) && $jury=="jury_tech") echo "checked";?> value="jury_tech">Jury technique<br/>
          </div>
              <input class="btn-page" type="submit" name="submit" value="Valider">


          </form>
        <!--</div>-->
      </div>
    </div>
</body>
</html>
