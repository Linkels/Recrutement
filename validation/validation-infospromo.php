<?php

include ('connectBDD.php');

$nompromo = $_POST['nompromo'];
$datecandidature = $_POST['datecandidature'];
$datedebutpromo = $_POST['datedebutpromo'];
$datefinpromo = $_POST['datefinpromo'];

$sql = $bdd->prepare ("INSERT INTO infospromo (nompromo, datecandidature, datedebutpromo, datefinpromo)
    VALUES (:nompromo, :datecandidature, :datedebutpromo, :datefinpromo)");
$sql->execute(array(
  'nompromo' => $nompromo,
  'datecandidature' => $datecandidature,
  'datedebutpromo' => $datedebutpromo,
  'datefinpromo' => $datefinpromo
));


header('formulaire/location:admin-validation.php');
?>
