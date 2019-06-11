<?php

include ('connectBDD.php');

$sql = $bdd->prepare("SELECT * FROM etudiant WHERE idhor=".$_POST['id2']);
$sql->execute();
$id3 = $_POST['id2'];

$superheros = isset($_POST['superheros']) ? $_POST['superheros'] : NULL;
$hacks = isset($_POST['hacks']) ? $_POST['hacks'] : NULL;
$intformat = isset($_POST['intformat']) ? $_POST['intformat'] : NULL;
$motivation = isset($_POST['motivation']) ? $_POST['motivation'] : NULL;
$dansunan = isset($_POST['dansunan']) ? $_POST['dansunan'] : NULL;



$sql = $bdd->prepare ("UPDATE etudiant SET superheros='$superheros', hacks='$hacks', intformat='$intformat', motivation='$motivation', dansunan='$dansunan'
  WHERE  idhor='$id3'");



header('location:form_candidature_3.php')
?>
