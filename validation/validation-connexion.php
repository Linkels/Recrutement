<?php

include ('connectBDD.php');

$ulogin = isset($_POST['ulogin']) ? $_POST['ulogin'] : NULL;
$motdepassec = isset($_POST['motdepassec']) ? $_POST['motdepassec'] : NULL;

$sql = ("UPDATE utilisateur SET ulogin= '".$ulogin."', motdepassec= '".$motdepassec."' WHERE ulogin='".$_POST['ulogin']."' ");


$resilta= $bdd->prepare($sql);
$resilta->execute();

header('location:formulaire/form_candidature_1.php');
?>
