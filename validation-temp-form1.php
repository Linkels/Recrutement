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

echo $nom;

$sql = $bdd->prepare ("INSERT INTO etudiant (nom, prenom, datenai, adresse_perso, codep, ville, nationalite, email, numtels, situactu, lastdipl, disponib, liphoto)
    VALUES (:nom, :prenom, :datenai, :adresse_perso, :codep, :ville, :nationalite, :email, :numtels, :situactu, :lastdipl, :disponib, :liphoto)");
$sql->execute(array(
  'prenom' => $prenom,
  'nom' => $nom,
  'datenai' => $date_naissance,
  'adresse_perso' => $adresse,
  'codep' => $code_postal,
  'ville' => $ville,
  'nationalite' => $nationalite,
  'email' => $email,
  'numtels' => $tel,
  'situactu' => $statut,
  'lastdipl' => $diplome,
  'disponib' => $disponib,
  'liphoto' => $photo
));


/*$skl=$bdd->prepare("SELECT * FROM etudiant ORDER BY idhor DESC LIMIT 1");
$skl->execute();

$res=$skl->fetch();

$id1=$res['idhor'];*/


header('location:form_candidature_2.php');
?>
