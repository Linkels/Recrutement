 <?php
 require "../include/connectBDD.php";
   $$note = isset($_POST['note']) ? $_POST['note'] : NULL;
   $id_etudiant = isset($_POST['id_etudiant']) ? $_POST['id_etudiant'] : NULL;

   $req = $bdd->prepare('INSERT INTO note(note, id_etudiant)
     VALUES(:note, :id_etudiant)');
   $req->execute(array(
     'note' => $note,
     'id_etudiant' => $id_etudiant
   ));
   header('Location: folio.php');
 ?>
