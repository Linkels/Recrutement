<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Content</title>

<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!--Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
<!--  pour la police des titres  -->
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
<!-- pour les autres textes -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<!--mon CSS -->
    <link rel="stylesheet" href="css/contact.css">


</head>

<body>

  <!--//////////////////////////////  NAVBAR  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

  <header id="haut">
      <nav class="fixed-top" id="link_nav">
       <a href="index.php" id="logo">CINE<strong>MET</strong></a>
       <div id="Navbar">
           <a class="liens" href="allo_films.php">FILMS </a>
           <a class="liens"href="contact.php"> LOGIN </a>
       </div>
       <div class="m-nav-toggle">
           <span class="m-toggle-icon"></span>
       </div>
     </nav>
  </header>

  <!--//////////////////////////////  FORMULAIRE  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->


<!--je me connecte à la base de données -->
  <?php
  require_once 'connectbdd.php';
  ?>

  <?php

    // Vérifie si le formulaire a été envoyé
    if (isset($_POST["valider"])) {
        // Si un champ est vide, on affiche une erreur
        if ($_POST["nom"] == "" || $_POST["prenom"] == "" || $_POST["mail"] == "" || $_POST["message"] == "" ) {
           echo "Erreur";
        }
        else { // Sinon, si tout est bon ça fonctionnera
          $rescontact = $bdd->prepare("INSERT INTO Contact (nom_contact, prenom_contact, mail_contact, message_contact) VALUES (?, ?, ?, ?)");
          $rescontact->execute(array($_POST["nom"], $_POST["prenom"], $_POST["mail"], $_POST["message"]));
          echo "Envoyé";
        }
    }
    ?>
    <form id="form-contact" method="post" action="contact.php">
      <div class="content">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Nom</label>
            <input type="text" name="nom" class="form-control" id="inputEmail4" placeholder="Nom" required>
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Prénom</label>
            <input type="text" name="prenom" class="form-control" id="inputPassword4" placeholder="Prénom" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress">Mail</label>
          <input type="mail" name="mail" class="form-control" id="inputAddress" placeholder="Mail" required>
        </div>
          <div class="mb-3">
            <label for="textarea">Message</label>
              <textarea class="form-control" name="message" id="textarea" placeholder="Message" required></textarea>
          </div>
          <center>
            <button id="btn_contact" type="submit" name="valider" class="btn btn-dark btn-lg btn-block">Envoyer</button>
          </center>
      </div>
    </form>


    <!-- Pour la navbar -->

    <!-- mon JS pour la navbar -->

    <script>
    $(document).ready(function(){
        $('.sidenav').sidenav();
      });

    </script>
    <script src="https://code.jquery.com/jquery-3.4.0.slim.min.js"
        integrity="sha256-ZaXnYkHGqIhqTbJ6MB4l9Frs/r7U4jlx7ir8PJYBqbI=" crossorigin="anonymous"></script>
    <script src="js/siema.min.js"></script>
    <script src="js/allo_films.js"></script>
