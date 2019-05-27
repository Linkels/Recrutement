<?php
try   {
  $user = "angie";
  $pass = "wachtwoord";
  // Je me connecte à ma bdd
  $bdd = new PDO('mysql:host=localhost;dbname=Recrutement;charset=utf8', $user, $pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  return $bdd;
}catch(Exception $e)
{
  // En cas d'erreur, un message s'affiche et tout s'arrête
        die('Erreur : '.$e->getMessage());
}


?>
