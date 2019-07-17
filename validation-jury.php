<?php

include ('connectBDD.php');
/*
$jury_admin = $_POST['jury_admin'];
$jury_motiv = $_POST['jury_motiv'];
$jury_tech = $_POST['jury_tech'];
*/

$jury = $_POST['jury'];


/*echo "Jury : ".$jury." - ID :  ".$_POST['idd'];*/
echo " ID :  ".$_POST['idd'];
/*
$sql = ("UPDATE utilisateur SET jury_admin= '".$jury_admin."', jury_motiv= '".$jury_motiv."', jury_tech= '".$jury_tech."' WHERE iduser='".$_POST['idd']."' ");
*/

$sql = ("UPDATE utilisateur SET jury_admin= '".$jury_admin."', jury_motiv= '".$jury_motiv."', jury_tech= '".$jury."' WHERE iduser=$_POST['idd'] ");

$resilta= $bdd->prepare($sql);
$resilta->execute();



//header('location:admin-validation.php');
?>
