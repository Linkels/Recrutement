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
         ?>
         <!DOCTYPE html>
         <html>
             <head>
                 <title>Connexion</title>
                 <meta charset="utf-8" />
                 <meta name="viewport" content="width=device-width, initial-scale=1">
                 <link rel="stylesheet" href="../css/reset.css"/>
                 <link rel="stylesheet" href="../css/connexion.css"/>

         </head>
         <body>
           <?php

           include "include/header.php";

           ?>
             <section>
               <p class="message">
                 Oups, on a un problème de validation de formulaire...On recommence:
               </p>

           <a href='connexion.php'>
             <button  class="btn-transit">Je me connecte</button>
           </a>
         </body>
         </html>
<?php
      }
    }
}


?>
