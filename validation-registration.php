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
