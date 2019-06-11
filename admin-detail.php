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

<body id="haut">
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
      <h1>Bienvenue <?= $row['user'];?> au détail du formulaire de candidature de <?= $prenom . $nom;?>
      </h1>
    </div>

<!--début menu gestion-->
  <div class="vertical-menu">
    <a href="admin-utilisateur.php">Utilisateurs</a>
    <a href="admin-candidat.php">Candidats</a>
    <a href="admin-session.php">Sessions</a>
    <a href="admin-infospromo.php">Infos Promo</a>
  </div>

<!--début détail formulaire de candidature-->
  <form>
    <fieldset>
      <legend> Etat Civil </legend>

        <label>Prénom</label><br/>
        <input type="text" name="prenom" value="<?= $prenom;?>" readonly ><br/>


        <label>Nom</label><br/>
        <input type="text" name="nom" value="<?= $nom;?>" readonly><br/>


        <label>Date de naissance</label><br/>
        <input type="date" name="date_naissance" value="<?= $date_naissance;?>" readonly><br/>


        <label>Adresse</label><br/>
        <input type="text" name="adresse" value="<?= $adresse;?>" readonly><br/>


        <label>Code postal</label><br/>
        <input type="text" name="code_postal" value="<?= $code_postal;?>" readonly><br/>


        <label>Ville</label><br/>
        <input type="text" name="ville" value="<?= $ville;?>" readonly><br/>

        <label>Nationalité</label><br/>
        <input type="text" name="nationalite" value="<?= $nationalite;?>" readonly><br/>


        <label>Email</label><br/>
        <input type="email" name="email" value="<?= $email;?>" readonly><br/>


        <label>N° de téléphone</label><br/>
        <input type="tel" name="tel" value="<?= $tel;?>" readonly><br/>
      </fieldset>

      <fieldset>
        <legend>Statut</legend>

        <label>Statut actuel</label><br/>
        <input type="text" name="satut" value="<?= $statut;?>" readonly><br/>

        <label>Dernier diplôme obtenu</label><br/>
        <input type="text" name="diplome" value="<?= $diplome;?>" readonly><br/>

        <label>Disponibilité dès la pré-rentrée? </label><br/>
        <input type="text" name="disponib" value="<?= $disponib;?>" readonly><br/>
      </fieldset>

      <fieldset>
        <legend>Motivation</legend>

          <label>Quel super-héros et pourquoi?</label><br/>
          <input type="text" name="superheros" value="<?= $superheros;?>" readonly><br/>

          <label>Ses "hacks":</label><br/>
          <input type="text" name="hacks" value="<?= $hacks;?>" readonly><br/>

          <label>Pourquoi intégrer la formation?</label><br/>
          <input type="text" name="intformat" value="<?= $intformat;?>" readonly><br/>

          <label>Sa motivation:</label><br/>
          <input type="text" name="motivation" value="<?= $motivation;?>" readonly><br/>

          <label>Son avenir dans un an:</label><br/>
          <input type="text" name="dansunan" value="<?= $dansunan;?>" readonly><br/>

      </fieldset>

      <fieldset>
        <legend> Pré-requis</legend>

          <label>Pré-requis #1 : PHP - Lessons Sololearn:</label><br/>
          <input type="text" name="prerequis1" value="<?= $prerequis1;?>" readonly><br/>


          <label>Pré-requis #2 : HTML et CSS - Badges Codecademy:</label><br/>
          <input type="text" name="prerequis2" value="<?= $prerequis2;?>" readonly><br/>


          <label>Profils supplémentaires sur d'autres plate-formes:</label><br/>
          <input type="text" name="profilsuppl" value="<?= $profilsuppl;?>" readonly><br/>


          <label>Niveau d'anglais:</label><br/>
          <input type="text" name="nivangl" value="<?= $nivangl;?>" readonly><br/>

        </fieldset>

        <fieldset>
          <legend> Avis Jury</legend>

          <label>Commentaire jury N°1:</label><br/>
          <input type="text" name="comment1" value="<?= $comment1;?>" readonly><br/>

          <label>Note jury N°1:</label><br/>
          <input type="text" name="note1" value="<?= $note1;?>" readonly><br/>

          <label>Commentaire jury N°2:</label><br/>
          <input type="text" name="comment2" value="<?= $comment2;?>" readonly><br/>

          <label>Note jury N°2:</label><br/>
          <input type="text" name="note2" value="<?= $note2;?>" readonly><br/>

          <label>Commentaire jury N°3:</label><br/>
          <input type="text" name="comment3" value="<?= $comment3;?>" readonly><br/>

          <label>Note jury N°3:</label><br/>
          <input type="text" name="note3" value="<?= $note3;?>" readonly><br/>

        </fieldset>

          <center>
            <button><a href="admin-candidat.php">Revenir au tableau de gestion des candidats</a></button>
          </center>

    </form>

<!--//////////////////////////////  BACK TO TOP BTN  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

  <div><a id="cRetour" class="cInvisible" href="#haut"></a></div>

  </div>

<!--//////////////////////////////  SCRIPTS  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

  <script src="js/main.js"></script>

</body>
</html>
