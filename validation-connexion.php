<?php

include ('connectBDD.php');

$ulogin = isset($_POST['ulogin']) ? $_POST['ulogin'] : NULL;
$motdepassec = isset($_POST['motdepassec']) ? $_POST['motdepassec'] : NULL;

$sql = ("UPDATE utilisateur SET ulogin= '".$ulogin."', motdepassec= '".$motdepassec."' WHERE ulogin='".$_POST['ulogin']."' ");


$resilta= $bdd->prepare($sql);
$resilta->execute();

// pour rediriger vers la bonne page en fonction du statut de l'utilisateur

$ja = jury_admin("B");
if ($ja = "1") {
  header('location:jury_admin.php');
} else {
  header('location:form_candidature_1.php');
}

$jm = jury_motiv("B");
if ($jm = "1") {
  header('location:jury_motivation.php');
} else {
  header('location:form_candidature_1.php');
}

$jt = jury_ech("B");
if ($jt = "1") {
  header('location:jury_tech.php');
} else {
  header('location:form_candidature_1.php');
}

$ad = admin("B");
if ($ja = "1") {
  header('location:admin.php');
} else {
  header('location:form_candidature_1.php');
}

?>
