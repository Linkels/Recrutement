<!DOCTYPE html>
<html lang="fr">

<head>
  <title>Simplon Charleville _ candidature</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="img/favicon.ico" />

  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

  <!--  pour le css natif -->
  <link rel="stylesheet" href="css/header.css">

  <link rel="stylesheet" href="css/style_index.css">
  <link rel="stylesheet" href="css/footer.css">
</head>
<body>
    <?php include('header.php'); ?>
    <div class="titre">- Connexion -</div>
    <div class="fonony">
      <form action="administration.php" method="POST">
      <!--<form action="verif_login.php" method="POST">-->
        <!--<div class="container">-->
        <div class="lamina">
        <div class="col-25">
          <label for="uname"><b>Login</b></label>
        </div>
        <div class="col-50">
          <input type="text" placeholder="Login .." name="uname" required>
        </div>
        <div class="col-25">
          <label for="psw"><b>Mot de passe</b></label>
        </div>
        <div class="col-75">
          <input type="password" placeholder="Mot de passe .." name="psw" required>
        </div><br><br>


          <!--
          <label>
            <input type="checkbox" checked="checked" name="remember"> Se souvenir de moi
          </label><br><br>
            -->
        </div>

        <button type="submit" name="submit">Se connecter</button><br>
        <!---<div class="container" style="background-color:#f1f1f1">-->
        <div class="lamina">
              <!--<button type="button" class="cancelbtn">Annuler</button>-->
              <span class="psw"><a href="#">Mot de passe oublié !</a></span>
        </div>


      </form>
</div>
<br>


<?php include('footer.php'); ?>

</body>
</html>
