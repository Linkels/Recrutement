<?php

include ('connectBDD.php');

$superheros = isset($_POST['superheros']) ? $_POST['superheros'] : NULL;
$hacks = isset($_POST['hacks']) ? $_POST['hacks'] : NULL;
$intformat = isset($_POST['intformat']) ? $_POST['intformat'] : NULL;
$motivation = isset($_POST['motivation']) ? $_POST['motivation'] : NULL;
$dansunan = isset($_POST['dansunan']) ? $_POST['dansunan'] : NULL;

$data = [$superheros, $hacks, $intformat, $motivation, $dansunan];

$sql = ("UPDATE etudiant SET superheros= '".$superheros."', hacks= '".$hacks."', intformat= '".$intformat."', motivation= '".$motivation."', dansunan= '".$dansunan."' WHERE idhor='".$_POST['idd']."' ");


$resilta= $bdd->prepare($sql);
$resilta->execute();


header('location:form_candidature_3.php?val='.$_POST['idd'])
?>
