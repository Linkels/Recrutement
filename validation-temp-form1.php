<?php



include ('connectBDD.php');

$prenom = isset($_POST['prenom']) ? $_POST['prenom'] : NULL;
$nom = isset($_POST['nom']) ? $_POST['nom'] : NULL;
$date_naissance = isset($_POST['date_naissance']) ? $_POST['date_naissance'] : NULL;
$adresse = isset($_POST['adresse']) ? $_POST['adresse'] : NULL;
$code_postal = isset($_POST['code_postal']) ? $_POST['code_postal'] : NULL;
$ville = isset($_POST['ville']) ? $_POST['ville'] : NULL;
$nationalite = isset($_POST['nationalite']) ? $_POST['nationalite'] : NULL;
$email = isset($_POST['email']) ? $_POST['email'] : NULL;
$tel = isset($_POST['tel']) ? $_POST['tel'] : NULL;

$statut = isset($_POST['statut']) ? $_POST['statut'] : NULL;
$diplome = isset($_POST['diplome']) ? $_POST['diplome'] : NULL;
$disponib = isset($_POST['disponib']) ? $_POST['disponib'] : NULL;
$photo = isset($_POST['photo']) ? $_POST['photo'] : NULL;


$sql = $bdd->prepare ("INSERT INTO etudiant (nom, prenom, datenai, adresse_perso, codep, ville, nationalite, email, numtels, profilsuppl, lastdipl, disponib, liphoto)
    VALUES ('$nom', '$prenom', '$date_naissance', '$adresse', '$code_postal', '$ville', '$nationalite', '$email', '$tel', '$statut', '$diplome', '$disponib', '$photo')");

    $sql->execute();

header('location:form_candidature_2.php')
?>