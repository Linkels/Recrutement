<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link rel="stylesheet" href="css/jury.css">
  <title>JURY ADMIN</title>
</head>

<body>
  <?php include "include/header.php" ?>
  <?php include "connectBDD.php" ?>


  <center>
    <h1>CANDIDAT - JURY ADMIN</h1>
  </center>
  <div>
    <div id="bloc_1" class="animated zoomInLeft">
      <h1 class="titre-bloc1">
        <img src="" width="10%" alt="">
      </h1>
      <center>
        <hr />
      </center>
      <h3 class="titre-inter-bloc1">
        <ul>
          <li>Nom :</li>
          <li>Prénom : </li>
          <li>Date de naissance : </li>
          <li>Adresse : </li>
          <li>Nationalité : <?php echo $donnees["nationalite"]; ?></li>
          <li>Email : <?php echo $donnees["email"]; ?></li>
          <li>N° de téléphone : <?php echo $donnees["numtels"]; ?></li>
          <li>Dernier diplôme obtenu : <?php echo $donnees["lastdipl"]; ?></li>
          <li>Disponibilité : <?php echo $donnees["disponib"]; ?></li>
          <li>Statut : <?php echo $donnees["situactu"]; ?></li>
        </ul>
      </h3>
    </div>

    <?php


    ?>


    <div id="bloc_1" class="animated zoomInLeft">
      <h1 class="titre-bloc1">
        Avis
      </h1>
      <center>
        <hr />
      </center>
      <h3 class="titre-inter-bloc1">
        <ul>
          <form class="fake" action="crea_avis.php" method="post">
            <center>
              <input type="text" name="avis" placeholder="avis">
              <div class="slidecontainer" style="width: 500px;">
                <p class="zero">0</p>
                <p class="other" style="padding-left: 48px;">-1</p>
                <p class="other" style="padding-left: 38px;">&nbsp1</p>
                <p class="other" style="padding-left: 38px;">+1</p>
                <p class="other" style="padding-left: 45px;">-2</p>
                <p class="other" style="padding-left: 40px;">&nbsp2</p>
                <p class="other" style="padding-left: 40px;">+2</p>
                <p class="other" style="padding-left: 40px;">-3</p>
                <p class="other" style="padding-left: 40px;">&nbsp3</p>
                <div class="col-75">

                  <input type="range" name="note" min="1" class="slider" max="9" step=0 value=0 oninput="valora.value=parseInt(notes.value)" />
                  <output name="valora"> </output>
                </div>
              </div>

              <button class="btn" type="submit" name="submit">Save</button>
          </form>



        </ul>
      </h3>
    </div>

  </div>
  <script>
    $(function() {
      $('.range').next().text('--'); // Valeur par défaut
      $('.range').on('input', function() {
        var $set = $(this).val();
        $(this).next().text($set);
      });
    });
  </script>

</body>

</html>
