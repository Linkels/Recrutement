<!DOCTYPE html>
<html>
    <head>
        <title>Registration</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/connexion.css"/>

</head>
<body>
  <?php include "include/header.php" ?>

<form method="POST" action="back/validation-registration.php">
      <fieldset class="float-left">
        <legend>Inscrivez-vous ici  </legend>

  <div class="container">
    <label for="nom"><b>Nom</b></label>
    <input type="text" placeholder="Nom" name="nom_etudiant" required>

    <label for="prenom"><b>Prénom</b></label>
    <input type="text" placeholder="Prénom" name="prenom_etudiant" required>

    <label for="ulogin"><b>Pseudo<span>*</span></b></label>
    <input type="text" placeholder="Identifiant" name="pseudo_etudiant" required>

    <label for="motdepassec"><b>Mot de passe<span>*</span></b></label>
    <input type="password" placeholder="Mot de passe" name="mdp_etudiant" required>

    <label for="motdepassec"><b>Email<span>*</span></b></label>
    <input type="text" placeholder="E-Mail" name="mail_etudiant" required>

    <button type="submit">S'inscrire</button>

      <div class="inscription"><span>*</span> Déjà inscrit? <a href="connexion.php">Se connecter</a>
      </div>

    </div>
</form>

</body>

</html>
