<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link rel="stylesheet" href="css/jury_tech.css">
  <title></title>
</head>

<body>
  <?php include "header.php" ?>

  <center>
    <h1>CANDIDAT 1 - JURY ADMIN</h1>
  </center>
  <div>
    <div id="bloc_1" class="animated zoomInLeft">
      <h1 class="titre-bloc1">
        <img src="img\logo.png" alt="">
      </h1>
      <center>
        <hr />
      </center>
      <h3 class="titre-inter-bloc1">
        <ul>
          <li>Nom :</li>
          <li>Prénom :</li>
          <li>Date de naissance :</li>
          <li>Adresse :</li>
          <li>Nationalité :</li>
          <li>Email :</li>
          <li>N° de téléphone :</li>
          <li>Dernier diplôme obtenu :</li>
          <li>Disponibilité :</li>
          <li>Statut :</li>
        </ul>
      </h3>
    </div>
    <div id="bloc_1" class="animated zoomInLeft">
      <h1 class="titre-bloc1">
        
      </h1>
      <center>
        <hr />
      </center>
      <h3 class="titre-inter-bloc1">
        <ul>
          <li>Lien Lessons Sololearn :</li>
          <li>Lien Badges Codeacademy :</li>
          <li>Autre lien :</li>
          <li>Niveau anglais lu/écrit :</li>
        </ul>
      </h3>
    </div>

    <div id="bloc_1" class="animated zoomInLeft">
      <h1 class="titre-bloc1">
          Avis
      </h1>
      <center>
        <hr />
      </center>
      <h3 class="titre-inter-bloc1">
        <ul>    <div class="fake"><center>
              <textarea></textarea>
            <div class="slidecontainer" style="width: 500px;">
              <p class="zero">0</p> <p class="other" style="padding-left: 48px;">-1</p> <p class="other" style="padding-left: 38px;">&nbsp1</p>
               <p class="other" style="padding-left: 38px;">+1</p> <p class="other" style="padding-left: 45px;">-2</p> <p class="other" style="padding-left: 40px;">&nbsp2</p>
               <p class="other" style="padding-left: 40px;">+2</p>
              <p class="other"style="padding-left: 40px;">-3</p> <p class="other" style="padding-left: 40px;">&nbsp3</p>
          <input type="range" min="1" max="9" value="5" class="slider" id="myRange">
        </div>
          <div class="bouton">
            <p>
              <a href="index.php">Valider</a>
            </p>
          </div>
        </ul>
      </h3>
    </div>

</div>



  <?php include "footer.php" ?>
</body>

</html>
