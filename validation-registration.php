<?php

include ('connectBDD.php');

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$ulogin = $_POST['ulogin'];
$motdepassec = $_POST['motdepassec'];

$sql = $bdd->prepare ("INSERT INTO utilisateur (nom, prenom, ulogin, motdepassec)
    VALUES (:nom, :prenom, :ulogin, :motdepassec)");
$sql->execute(array(
  'nom' => $nom,
  'prenom' => $prenom,
  'ulogin' => $ulogin,
  'motdepassec' => $motdepassec
));


header('location:form_candidature_1.php');
?>
