<?php
session_start();
if (isset($_SESSION['id_etudiant']) AND isset($_SESSION['pseudo_etudiant']))
{

  include ('../include/connectBDD.php');

  $qhero_etudiant = isset($_POST['qhero_etudiant']) ? $_POST['qhero_etudiant'] : NULL;
  $qhack_etudiant = isset($_POST['qhack_etudiant']) ? $_POST['qhack_etudiant'] : NULL;
  $qformation_etudiant = isset($_POST['qformation_etudiant']) ? $_POST['qformation_etudiant'] : NULL;
  $qparcours_etudiant = isset($_POST['qparcours_etudiant']) ? $_POST['qparcours_etudiant'] : NULL;
  $qpouvoir_etudiant = isset($_POST['qpouvoir_etudiant']) ? $_POST['qpouvoir_etudiant'] : NULL;

  $sql = $bdd->prepare ("UPDATE etudiant SET qhero_etudiant=:qhero_etudiant, qhack_etudiant=:qhack_etudiant, qformation_etudiant=:qformation_etudiant,  qparcours_etudiant=:qparcours_etudiant, qpouvoir_etudiant=:qpouvoir_etudiant WHERE id_etudiant=:id_etudiant");

  $sql->execute(array(
    ':qhero_etudiant' => $qhero_etudiant,
    ':qhack_etudiant' => $qhack_etudiant,
    ':qformation_etudiant' => $qformation_etudiant,
    ':qparcours_etudiant' => $qparcours_etudiant,
    ':qpouvoir_etudiant' => $qpouvoir_etudiant,
    ':id_etudiant' => $_SESSION['id_etudiant']
  ));
  $sql-> closeCursor();



  header('location:../form_candidature_3.php');

  }
  else {
    echo " il y a un soucis, vous n'êtes pas connecté, merci de vous reconnecter à cette page : <a href='connexion.php'> en cliquant ici </a>";
  }

  ?>
