<?php
session_start();
if (isset($_SESSION['id_etudiant']) AND isset($_SESSION['pseudo_etudiant']))
{

      include ('include/connectBDD.php');

      $req = $bdd->prepare("SELECT * FROM etudiant WHERE id_etudiant = :id_etudiant");
      $req->execute(array(
          'id_etudiant' => $_SESSION['id_etudiant']));
      $resultat = $req->fetch();
      $req-> closeCursor();

?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/admin.css">
  <link rel="stylesheet" href="css/formu_fin.css">


  <title></title>
</head>

<body>
  <?php

  include 'include/header.php';
  include 'include/connectBDD.php';

  ?>


  <div id="bloc_1" class="animated zoomInLeft">
    <h2> Vous avez déjà validé votre formulaire. </h2>
    <center>
      <hr />
    </center>
    <h3 > Voici les différentes informations que vous nous avez transmises : </h3>
    <center>

      <table id="tableau-gestion" >
        <caption>Récapitulatif du formulaire</caption>
            <br><tr>
              <th>Questions</th>
              <th style="background:black;">Réponses du Candidat</th>
            </tr>
            <tr>
              <td>Prénom</td>
              <td><?php echo $resultat['prenom_etudiant']; ?></td>
            </tr>
            <tr>
              <td>Nom</td>
              <td><?php echo $resultat['nom_etudiant']; ?></td>
            </tr>

            <tr>
              <td>Date de naissance</td>
              <td><?php echo $resultat['datenaissance_etudiant']; ?></td>
            </tr>

            <tr>
              <td>Adresse</td>
              <td><?php echo $resultat['adresse_etudiant']; ?></td>
            </tr>

            <tr>
              <td>Code postal</td>
              <td><?php echo $resultat['codepostal_etudiant']; ?></td>
            </tr>

            <tr>
              <td>Ville</td>
              <td><?php echo $resultat['ville_etudiant']; ?></td>
            </tr>

            <tr>
              <td>Nationalité</td>
              <td><?php echo $resultat['nationalite_etudiant']; ?></td>
            </tr>

            <tr>
              <td>E-mail</td>
              <td><?php echo $resultat['mail_etudiant']; ?></td>
            </tr>

            <tr>
              <td>Téléphone</td>
              <td><?php echo $resultat['telephone_etudiant']; ?></td>
            </tr>

            <tr>
              <td>Votre statut actuel </td>
              <td><?php echo $resultat['statut_etudiant']; ?></td>
            </tr>

            <tr>
              <td>Quel est le dernier diplôme que vous ayez obtenu?</td>
              <td><?php echo $resultat['diplome_etudiant']; ?></td>
            </tr>

            <tr>
              <td>Êtes-vous disponible à temps plein dès la pré-rentrée, le 01 janvier 2020 ?</td>
              <td><?php echo $resultat['disponibilite_etudiant']; ?></td>
            </tr>

            <tr>
              <td>Votre photo</td>
              <td><?php echo $resultat['photo_etudiant']; ?></td>
            </tr>

            <tr>
              <td>Si vous étiez un super-héros / une super-héroïne, qui seriez-vous et pourquoi?</td>
              <td><?php echo $resultat['qhero_etudiant']; ?></td>
            </tr>

            <tr>
              <td>Racontez-nous un de vos "hacks" (pas forcément technique ou informatique):</</td>
              <td><?php echo $resultat['qhack_etudiant']; ?></td>
            </tr>

            <tr>
              <td>Dites-nous pourquoi vous souhaitez intégrer la formation :</td>
              <td><?php echo $resultat['qformation_etudiant']; ?></td>
            </tr>

            <tr>
              <td>Racontez-nous votre parcours et détaillez-nous votre motivation en vous exprimant avec votre style,
              mais ne vous limitez pas à un texte tapé à la va-vite. Aussi, n'hésitez pas à faire une vidéo, un site
              ou toute autre chose qui démontrera votre envie, votre motivation et vos compétences!</td>
              <td><?php echo $resultat['qparcours_etudiant']; ?></td>
            </tr>

            <tr>
              <td>Dans un an, avec vos nouveaux superpouvoirs de code informatique, que souhaiteriez-vous faire dans votre vie ?</td>
              <td><?php echo $resultat['qpouvoir_etudiant']; ?></td>
            </tr>


            <tr>
              <td>Lien Sololearn</td>
              <td><?php echo $resultat['sololearn_etudiant']; ?></td>
            </tr>

            <tr>
              <td>Lien CodeAcademy</td>
              <td><?php echo $resultat['codeacademy_etudiant']; ?></td>
            </tr>

            <tr>
              <td>Autre Plateforme ou site que vous avez déjà réalisé(s) !</td>
              <td><?php echo $resultat['autreplateforme_etudiant']; ?></td>
            </tr>

            <tr>
              <td>Votre niveau d'anglais</td>
              <td><?php echo $resultat['anglais_etudiant']; ?></td>
            </tr>



            <?php
            /*
            $sql->closeCursor;*/
            ?>

      </table>

      <form id="form" action="back/validation-reset-valider.php" method="POST">

      <input class="btn-valid" type="submit" name="submit" value="  Souhaitez-vous modifier vos informations ? ">

</form>


    </center>
  </div>




  <?php

  include 'include/footer.php';

  ?>
</body>

</html>

<?php

}
else {
  ?>
    <!DOCTYPE html>
    <html>
        <head>
            <title>Connexion</title>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="css/reset.css"/>
            <link rel="stylesheet" href="css/connexion.css"/>

    </head>
    <body>
      <?php

      include "include/header.php";

      ?>
        <section>
          <p class="message">
            Vous n'êtes pas connecté, pour recommencer:
          </p>

      <a href='connexion.php'>
        <button  class="btn-transit">Nouvel essai</button>
      </a>
    </body>
    </html>
  <?php
}
