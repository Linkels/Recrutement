<?php

include ('connectBDD.php');

$prerequis1 = isset($_POST['prerequis1']) ? $_POST['prerequis1'] : NULL;
$prerequis2 = isset($_POST['prerequis2']) ? $_POST['prerequis2'] : NULL;
$profilsuppl = isset($_POST['profilsuppl']) ? $_POST['profilsuppl'] : NULL;
$langlais = isset($_POST['langlais']) ? $_POST['langlais'] : NULL;



$sql = ("UPDATE etudiant SET prerequis1= '".$prerequis1."', prerequis2= '".$prerequis2."', profilsuppl= '".$profilsuppl."', $langlais= '".langlais."' WHERE idd='".$_POST['idb']."' ");


$resilta= $bdd->prepare($sql);
$resilta->execute();



header('location:formu_valider.php?val='.$_POST['idb'])
?>
