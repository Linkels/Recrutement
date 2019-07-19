<?php

include ('connectBDD.php');

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$ulogin = $_POST['ulogin'];
$motdepassec = $_POST['motdepassec'];
$motdepassec_hash = PASSWORD_HASH($_POST['motdepassec'], PASSWORD_DEFAULT);

$sql = $bdd->prepare ("INSERT INTO utilisateur (nom, prenom, ulogin, motdepassec)
    VALUES (:nom, :prenom, :ulogin, :motdepassec_hash)");
$sql->execute(array(
  'nom' => $nom,
  'prenom' => $prenom,
  'ulogin' => $ulogin,
  'motdepassec_hash' => $motdepassec_hash
));


header('formulaire/location:form_candidature_1.php');

?>
