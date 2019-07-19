<?php

include ('connectBDD.php');

$pseudo_etudiant = $_POST['pseudo_etudiant'];
$mdp_etudiant = $_POST['mdp_etudiant'];
$mdp_etudiant_hash = PASSWORD_HASH($_POST['mdp_etudiant'], PASSWORD_DEFAULT);
$nom_etudiant = $_POST['nom_etudiant'];
$prenom_etudiant = $_POST['prenom_etudiant'];
$mail_etudiant = $_POST['mail_etudiant'];

$sql = $bdd->prepare ("INSERT INTO etudiant (pseudo_etudiant,mdp_etudiant,nom_etudiant,prenom_etudiant,mail_etudiant,	inscriptionvalide_etudiant	)
    VALUES (:pseudo_etudiant, :mdp_etudiant_hash, :nom_etudiant, :prenom_etudiant, :mail_etudiant, :inscriptionvalide_etudiant)");
$sql->execute(array(
  'pseudo_etudiant' => $pseudo_etudiant,
  'mdp_etudiant_hash' => $mdp_etudiant_hash,
  'nom_etudiant' => $nom_etudiant,
  'prenom_etudiant' => $prenom_etudiant,
  'mail_etudiant' => $mail_etudiant,
  'inscriptionvalide_etudiant' => 1
));


header('location:test.php');

?>

<!--header('formulaire/location:form_candidature_1.php');-->
