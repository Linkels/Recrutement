<?php
session_start();
if (isset($_SESSION['id_etudiant']) AND isset($_SESSION['pseudo_etudiant']))
{
    include ('../include/connectBDD.php');

    $req = $bdd->prepare('SELECT * FROM etudiant WHERE pseudo_etudiant = :pseudo_etudiant');
    $req->execute(array(
        'pseudo_etudiant' => $_SESSION['pseudo_etudiant']));
    $resultat = $req->fetch();
    $req-> closeCursor();
    if ($resultat)
    {
       if ($resultat['inscriptionvalide_etudiant'] == 0){
         header('location:../formu_already_done.php');
       }
       else if($resultat['inscriptionvalide_etudiant'] == 1){
         header('location:../form_candidature_1.php');
       }
       else {
        echo "bon la il y a un problème car c'est pas 0 ou 1" ;
      }
    }
}


?>
