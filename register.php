<!DOCTYPE html>
<html>
    <head>
        <title>Registration</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/connexion.css"/>

</head>
<body>
  <?php include "header.php" ?>

<form method="POST" action="validation-registration.php">
      <fieldset class="float-left">
        <legend>Enregistrez-vous ici pour accéder à votre compte</legend>

  <div class="container">
    <label for="nom"><b>Nom</b></label>
    <input type="text" placeholder="Nom d'utilisateur" name="nom" required>

    <label for="prenom"><b>Prénom</b></label>
    <input type="text" placeholder="Prénom" name="prenom" required>

    <label for="ulogin"><b>Identifiant<span>*</span></b></label>
    <input type="text" placeholder="Identifiant" name="ulogin" required>

    <label for="motdepassec"><b>Mot de passe<span>*</span></b></label>
    <input type="password" placeholder="Mot de passe" name="motdepassec" required>
        <div class="items">
            <label class="remember">
      <input type="checkbox" checked="checked" name="remember">Se souvenir de moi
    <button type="submit">Se connecter</button>

      <div class="inscription"><span>*</span> Déjà inscrit? <a href="connexion.php">Se connecter</a>
      </div>

    </div>
</form>


</body>

</html>
