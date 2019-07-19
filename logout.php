<?php
session_start();

// Suppression des variables de session et de la session
$_SESSION = array();
session_destroy();

echo "<a href='index.php'> Vous êtes maintenant déconnecté - merci de revenir sur la page d'accueil en cliquant ici : </a>";
?>
