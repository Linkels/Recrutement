<!DOCTYPE html>
<html>
    <head>
        <title>Connexion</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/connexion.css"/>

</head>
<body>
  <?php include "header.php" ?>

<form method="post" action="">
      <fieldset class="float-left">
        <legend>Identifiez-vous ici</legend>

  <div class="container">
    <label for="uname"><b>Identifiant<span>*</span></b></label>
    <input type="text" placeholder="E-mail ou nom d'utilisateur" name="user_name" required>

    <label for="psw"><b>Mot de passe<span>*</span></b></label>
    <input type="password" placeholder="Mot de passe" name="psw" required>
        <div class="items">
            <label class="remember">
      <input type="checkbox" checked="checked" name="remember">Se souvenir de moi
            </label><div class="psw"><a href="#">Mot de passe oublié?</a></div></div>
    <button type="submit">Se connecter maintenant</button>

      <div class="inscription"><span>*</span> Pas inscrit? <a>S'inscrire</a></div>

    </div>
</form>


</body>

</html>
