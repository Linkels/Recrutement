<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link rel="stylesheet" href="css/formu_fin.css">
  <link rel="stylesheet" href="css/footer.css">
  <title></title>
</head>

<body>
  <?php

  include 'header.php';


  include 'connectBDD.php';

  ?>
  <center><hr class="ligne-prog"></center>
  <div id="progress-bar">
    <div class="cercle etape-1">1</div>
    <div class="cercle etape-1">2</div>
    <div class="cercle etape-1">3</div>
    <div class="etape-d"><i class="far fa-check-circle fa-3x bgd"></i></div>
  </div>

  <div id="bloc_1" class="animated zoomInLeft">
    <h1 class="titre-bloc1">
      VALIDATION
    </h1>
    <center>
      <hr />
    </center>
    <h3 class="titre-inter-bloc1"> Vous vous apprêtez à valider votre inscription à la formation Simplon<br>
      Vous ne pourrez plus revenir en arrière une fois le formulaire envoyé à nos serveurs.
    </h3>
    <center>
      <div class="bouton">
        <p>
        <a href="#">Retour arrière</a>
        </p>
      </div>
      <form id="form" action="validation-temp-valider.php" method="POST">

      <input type="checkbox" name="valider" class="checkbox"
      <?php if (isset($valider) && $valider=="oui") echo "checked";?> value="oui">Oui<br/>
</form>

<input type="submit" name="submit" value="Passez aux questions suivantes">

    </center>
  </div>




  <?php

  include 'footer.php';

  ?>
</body>

</html>
