<?php
session_start();
if (isset($_SESSION['id_etudiant']) AND isset($_SESSION['pseudo_etudiant']))
{

  include ('../include/connectBDD.php');


  $sql = $bdd->prepare ("UPDATE etudiant SET inscriptionvalide_etudiant=:inscriptionvalide_etudiant WHERE id_etudiant=:id_etudiant");
  $sql->execute(array(
    ':inscriptionvalide_etudiant' => 1,
    ':id_etudiant' => $_SESSION['id_etudiant']
  ));
  $sql-> closeCursor();


  echo "<a href='../form_candidature_1.php'> Vous pouvez à nouveau modifier votre formulaire, merci de cliquer ici</a>";


}
else {
  echo " il y a un soucis, vous n'êtes pas connecté, merci de vous reconnecter à cette page : <a href='connexion.php'> en cliquant ici </a>";
}
