<?php

include ('../include/connectBDD.php');

$pseudo_etudiant = isset($_POST['pseudo_etudiant']) ? $_POST['pseudo_etudiant'] : NULL;
$mdp_etudiant = isset($_POST['mdp_etudiant']) ? $_POST['mdp_etudiant'] : NULL;

$req = $bdd->prepare('SELECT id_etudiant, mdp_etudiant FROM etudiant WHERE pseudo_etudiant = :pseudo_etudiant');
$req->execute(array(
    'pseudo_etudiant' => $pseudo_etudiant));
$resultat = $req->fetch();
$req-> closeCursor();

$isPasswordCorrect = password_verify($_POST['mdp_etudiant'], $resultat['mdp_etudiant']);

if (!$resultat)
{
  ?>
  <!DOCTYPE html>
  <html>
      <head>
          <title>Connexion</title>
          <meta charset="utf-8" />
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="../css/reset.css"/>
          <link rel="stylesheet" href="../css/connexion.css"/>

  </head>
  <body>
    <?php

    include "../include/header.php";

    ?>
      <section>
        <p class="message">
          Oups, pas de réception...C'est un problème
        </p>

    <a href='../connexion.php'>
      <button  class="btn-transit">Je me connecte</button>
    </a>
  </body>
  </html>
<?php
}
else{

  if ($isPasswordCorrect) {
      session_start();
      $_SESSION['id_etudiant'] = $resultat['id_etudiant'];
      $_SESSION['pseudo_etudiant'] = $pseudo_etudiant;
      header('location:done-or-not.php');
  }
  else {
    ?>
    <!DOCTYPE html>
    <html>
        <head>
            <title>Connexion</title>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="../css/reset.css"/>
            <link rel="stylesheet" href="../css/connexion.css"/>

    </head>
    <body>
      <?php

      include "../include/header.php";

      ?>
        <section>
          <p class="message">
            Mauvais identifiant ou mot de passe !
          </p>

      <a href='../connexion.php'>
        <button  class="btn-transit">Je me connecte</button>
      </a>
    </body>
    </html>
<?php
  }
}


?>
