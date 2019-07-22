<?php
session_start();
if (isset($_SESSION['id_etudiant']) AND isset($_SESSION['pseudo_etudiant']))
{

  include ('../include/connectBDD.php');

  $nom_etudiant = isset($_POST['nom_etudiant']) ? $_POST['nom_etudiant'] : NULL;
  $prenom_etudiant = isset($_POST['prenom_etudiant']) ? $_POST['prenom_etudiant'] : NULL;
  $mail_etudiant = isset($_POST['mail_etudiant']) ? $_POST['mail_etudiant'] : NULL;
  $datenaissance_etudiant = isset($_POST['datenaissance_etudiant']) ? $_POST['datenaissance_etudiant'] : NULL;
  $adresse_etudiant = isset($_POST['adresse_etudiant']) ? $_POST['adresse_etudiant'] : NULL;
  $codepostal_etudiant = isset($_POST['codepostal_etudiant']) ? $_POST['codepostal_etudiant'] : NULL;
  $ville_etudiant = isset($_POST['ville_etudiant']) ? $_POST['ville_etudiant'] : NULL;
  $nationalite_etudiant = isset($_POST['nationalite_etudiant']) ? $_POST['nationalite_etudiant'] : NULL;
  $telephone_etudiant = isset($_POST['telephone_etudiant']) ? $_POST['telephone_etudiant'] : NULL;
  $statut_etudiant = isset($_POST['statut_etudiant']) ? $_POST['statut_etudiant'] : NULL;
  $diplome_etudiant = isset($_POST['diplome_etudiant']) ? $_POST['diplome_etudiant'] : NULL;
  $disponibilite_etudiant = isset($_POST['disponibilite_etudiant']) ? $_POST['disponibilite_etudiant'] : NULL;

  $sql = $bdd->prepare ("UPDATE etudiant SET nom_etudiant=:nom_etudiant, prenom_etudiant=:prenom_etudiant, mail_etudiant=:mail_etudiant,  datenaissance_etudiant=:datenaissance_etudiant, adresse_etudiant=:adresse_etudiant, codepostal_etudiant=:codepostal_etudiant, ville_etudiant=:ville_etudiant, nationalite_etudiant=:nationalite_etudiant, telephone_etudiant=:telephone_etudiant, statut_etudiant=:statut_etudiant, diplome_etudiant=:diplome_etudiant, disponibilite_etudiant=:disponibilite_etudiant WHERE id_etudiant=:id_etudiant");

  $sql->execute(array(
    ':nom_etudiant' => $nom_etudiant,
    ':prenom_etudiant' => $prenom_etudiant,
    ':mail_etudiant' => $mail_etudiant,
    ':datenaissance_etudiant' => $datenaissance_etudiant,
    ':adresse_etudiant' => $adresse_etudiant,
    ':codepostal_etudiant' => $codepostal_etudiant,
    ':ville_etudiant' => $ville_etudiant,
    ':nationalite_etudiant' => $nationalite_etudiant,
    ':telephone_etudiant' => $telephone_etudiant,
    ':statut_etudiant' => $statut_etudiant,
    ':diplome_etudiant' => $diplome_etudiant,
    ':disponibilite_etudiant' => $disponibilite_etudiant,
    ':id_etudiant' => $_SESSION['id_etudiant']
  ));

  $sql-> closeCursor();

  header('location:../form_candidature_2.php');

  }
  else {
    echo " il y a un soucis, vous n'êtes pas connecté, merci de vous reconnecter à cette page : <a href='connexion.php'> en cliquant ici </a>";
  }

  ?>
