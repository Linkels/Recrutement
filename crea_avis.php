
 <?php
   require "connectBDD.php";
   $avis = isset($_POST['avis']) ? $_POST['avis'] : NULL;
   $note = isset($_POST['note']) ? $_POST['note'] : NULL;

   $req = $bdd->prepare('INSERT INTO jury_admin(avis, note)
     VALUES(:avis, :note)');
   $req->execute(array(
     'avis' => $avis,
     'note' => $note
   ));
   header('Location: jury_admin.php');
 ?>
