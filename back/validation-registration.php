<?php

include ('../include/connectBDD.php');

$pseudo_etudiant = $_POST['pseudo_etudiant'];
$mdp_etudiant = $_POST['mdp_etudiant'];
$mdp_etudiant_hash = PASSWORD_HASH($_POST['mdp_etudiant'], PASSWORD_DEFAULT);
$nom_etudiant = $_POST['nom_etudiant'];
$prenom_etudiant = $_POST['prenom_etudiant'];
$mail_etudiant = $_POST['mail_etudiant'];


          $req = $bdd->prepare("SELECT pseudo_etudiant FROM etudiant WHERE pseudo_etudiant = :pseudo_etudiant");
          $req->execute(array(
              'pseudo_etudiant' => $pseudo_etudiant ));
          $resultat = $req->fetch();
          $req-> closeCursor();
          if (strtolower($pseudo_etudiant) == strtolower($resultat['pseudo_etudiant']))
           {
               echo " Ce nom d'utilisateur est déjà utilisé. <br>";
               echo " <a href='../register.php'> Merci d'utiliser un autre pseudo ! </a>";
           }
           else {
             $req = $bdd->prepare("SELECT mail_etudiant FROM etudiant WHERE mail_etudiant = :mail_etudiant");
             $req->execute(array(
                 'mail_etudiant' => $mail_etudiant ));
             $resultat = $req->fetch();
             $req-> closeCursor();
             if (strtolower($mail_etudiant) == strtolower($resultat['mail_etudiant']))
              {
                  echo " Ce mail est déjà utilisé. <br>";
                  echo " <a href='../register.php'> Merci d'utiliser un autre mail ! </a>";
              }
              else{

                  $sql = $bdd->prepare ("INSERT INTO etudiant (pseudo_etudiant,mdp_etudiant,nom_etudiant,prenom_etudiant,mail_etudiant,	inscriptionvalide_etudiant	)
                      VALUES (:pseudo_etudiant, :mdp_etudiant_hash, :nom_etudiant, :prenom_etudiant, :mail_etudiant, :inscriptionvalide_etudiant)");
                  $sql->execute(array(
                    'pseudo_etudiant' => $pseudo_etudiant,
                    'mdp_etudiant_hash' => $mdp_etudiant_hash,
                    'nom_etudiant' => $nom_etudiant,
                    'prenom_etudiant' => $prenom_etudiant,
                    'mail_etudiant' => $mail_etudiant,
                    'inscriptionvalide_etudiant' => 1
                  ));
                  $sql-> closeCursor();
                  header('location:../transit.php');
              }
          }

?>
