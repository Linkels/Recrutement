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
  <?php include "include/header.php" ?>

<form method="POST" action="back/validation-connexion.php">
      <fieldset class="float-left">
        <legend>Identifiez-vous ici</legend>

  <div class="container">
    <label for="ulogin"><b>Identifiant<span>*</span></b></label>
    <input type="text" placeholder="Identifiant" name="pseudo_etudiant" required>

    <label for="motdepassec"><b>Mot de passe<span>*</span></b></label>
    <input type="password" placeholder="Mot de passe" name="mdp_etudiant" required>
        <div class="items">
          <div class="psw">
            <a href="register.php">Mot de passe oublié?</a>
          </div>
        </div>
    <button type="submit">Se connecter</button>

      <div class="inscription"><span>*</span> Pas inscrit? <a href="register.php">S'inscrire</a>
      </div>

    </div>
</form>


</body>

</html>
