
 <?php
   include '../include/connectBDD.php';
   $Avis_Admin = isset($_POST['Avis_Admin']) ? $_POST['Avis_Admin'] : NULL;
   $Note_Admin = isset($_POST['Note_Admin']) ? $_POST['Note_Admin'] : NULL;

   $req = $bdd->prepare('INSERT INTO etudiant(Avis_Admin, Note_Admin)
     VALUES(:avis, :note)');
   $req->execute(array(
     'Avis_Admin' => $Avis_Admin,
     'Note_Admin' => $Note_Admin
   ));
   header('Location: jury_admin.php');
 ?>
