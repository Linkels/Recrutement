<?php

include ('connectBDD.php');

$pseudo_etudiant = isset($_POST['pseudo_etudiant']) ? $_POST['pseudo_etudiant'] : NULL;
$mdp_etudiant = isset($_POST['mdp_etudiant']) ? $_POST['mdp_etudiant'] : NULL;

$req = $bdd->prepare('SELECT id_etudiant, mdp_etudiant FROM etudiant WHERE pseudo_etudiant = :pseudo_etudiant');
$req->execute(array(
    'pseudo_etudiant' => $pseudo_etudiant));
$resultat = $req->fetch();

$isPasswordCorrect = password_verify($_POST['mdp_etudiant'], $resultat['mdp_etudiant']);

if (!$resultat)
{
    echo "J'ai rien reçu, j'ai un pb";

}
else{

  if ($isPasswordCorrect) {
      session_start();
      $_SESSION['id_etudiant'] = $resultat['id_etudiant'];
      $_SESSION['pseudo_etudiant'] = $pseudo_etudiant;
      header('location:formulaire/form_candidature_1.php');
  }
  else {
      echo 'Mauvais identifiant ou mot de passe !';
      echo 'cliquer ici à nouveau pour tenter de se connecter !';
  }
}



//header('location:formulaire/form_candidature_1.php');
