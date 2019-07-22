<?php

include ('back/connectBDD.php');

$nom_session = $_POST['nom_session'];
$date_session = $_POST['date_session'];
$heure_session = $_POST['heure_session'];
$jury1_session = $_POST['jury1_session'];
$jury2_session = $_POST['jury2_session'];
$jury3_session = $_POST['jury3_session'];
$jury4_session = $_POST['jury4_session'];
$jury5_session = $_POST['jury5_session'];
$jury6_session = $_POST['jury6_session'];
$jury7_session = $_POST['jury7_session'];
$jury8_session = $_POST['jury8_session'];
$jury9_session = $_POST['jury9_session'];

$sql = $bdd->prepare ("INSERT INTO sessions (nom_session, date_session, heure_session, jury1_session, jury2_session, jury3_session, jury4_session, jury5_session, jury6_session, jury7_session, jury8_session, jury9_session)
    VALUES (:nom_session, :date_session, :heure_session, :jury1_session, :jury2_session, :jury3_session, :jury4_session, :jury5_session, :jury6_session, :jury7_session, :jury8_session, :jury9_session)");
$sql->execute(array(
  'nom_session' => $nom_session,
  'date_session' => $date_session,
  'heure_session' => $heure_session,
  'jury1_session' => $jury1_session,
  'jury2_session' => $jury2_session,
  'jury3_session' => $jury3_session,
  'jury4_session' => $jury4_session,
  'jury5_session' => $jury5_session,
  'jury6_session' => $jury6_session,
  'jury7_session' => $jury7_session,
  'jury8_session' => $jury8_session,
  'jury9_session' => $jury9_session
));


header('location:admin-validation.php');
?>
