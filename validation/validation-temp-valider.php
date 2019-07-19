<?php

include ('connectBDD.php');

$valider = isset($_POST['langlais']) ? $_POST['valider'] : NULL;



$sql = ("UPDATE etudiant SET valider= '".$valider."' WHERE idd='".$_POST['idb']."' ");


$resilta= $bdd->prepare($sql);
$resilta->execute();



header('formulaire/location:formu_valider.php?val='.$_POST['idb'])
?>
