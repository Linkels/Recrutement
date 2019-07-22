<?php
if (isset($_SESSION['id_etudiant']) AND isset($_SESSION['pseudo_etudiant']))
{ ?>
<link rel="stylesheet" href="css/header.css">
<div class="nav">
  <input type="checkbox" id="nav-check">
  <div class="nav-header">
    <div class="nav-title">
      <img src="img/logo.png" width="35%" alt="">
    </div>
  </div>
  <div class="nav-btn">
    <label for="nav-check">
      <span></span>
      <span></span>
      <span></span>
    </label>
  </div>

  <div class="nav-links">
    <a href="index.php">Accueil</a>
    <a href="logout.php">Se  déconnectez : <?php echo $_SESSION['pseudo_etudiant'];?></a>
  </div>
</div>

<?php
}else { ?>
  <link rel="stylesheet" href="css/header.css">
  <div class="nav">
    <input type="checkbox" id="nav-check">
    <div class="nav-header">
      <div class="nav-title">
        <img src="img/logo.png" width="35%" alt="">
      </div>
    </div>
    <div class="nav-btn">
      <label for="nav-check">
        <span></span>
        <span></span>
        <span></span>
      </label>
    </div>

    <div class="nav-links">
      <a href="index.php">Accueil</a>
      <a href="connexion.php">Se Connecter</a>
    </div>
  </div>
<?php
}
?>
