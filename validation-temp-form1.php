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


$sql = $bdd->prepare ("INSERT INTO etudiant (nom, prenom, datenai, adresse_perso, codep, ville, nationalite, email, numtels, situactu, lastdipl, disponib, liphoto, date_insc)
    VALUES (:nom, :prenom, :datenai, :adresse_perso, :codep, :ville, :nationalite, :email, :numtels, :situactu, :lastdipl, :disponib, :liphoto, NOW())");
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

// File upload path
$targetDir = "/img";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["envoyer"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $photo =  $_POST['liphoto'];

    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        echo "Anarana fichier : ".$_FILES["file"]["name"]."<br>";

        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){


           $sql  = $bdd->prepare("INSERT INTO etudiant (photo)
           VALUES ('".$photo."')");
}}}
           $sql->execute();

$skl = $bdd->prepare('SELECT * FROM etudiant ORDER BY idhor DESC');
$skl->execute();
$res=$skl->fetch();

$id=$res['idhor'];



header('location:form_candidature_2.php?val='.$res['idhor']);
?>
