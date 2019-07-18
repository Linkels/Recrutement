<?php
// File upload path
$targetDir = "./img";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

//echo "ID Genre: ".$_POST['i_genre']." et Designation : ".$_POST['l_genre'];

if(isset($_POST["envoyer"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $photo =  $_POST['photo'];

    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        echo "Anarana fichier : ".$_FILES["file"]["name"]."<br>";

        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database

           /* $conn = $db->query("INSERT into films (liphoto, datefin) VALUES ('".$fileName."', NOW())");*/
/**************************************************(DEBUT) AJOUT FILM ************************************************************************/
          /*$sql  = $conn->query("INSERT INTO `films` (`titre`, `categorie`, `liphoto`,  `datyfin`)
           VALUES ('".$titre."', '".$categorie."', '".$targetFilePath."', NOW())");*/


            //>>>>> $sql  = $conn->query("INSERT INTO `films` (`titre`, `categorie`, `id_genre`, `cat_csa`, `duree`, `infos`, `id_act`, `acteur`, `id_real`, `realisateur`, `avis`, `liphoto`,  `datyfin`)
           //>>>>>> VALUES ('".$titre."', '".$desgenre."', '".$idgen."', '".$csa."', '".$duree."', '".$info."', '".$idact."', '".$desact."', '".$idreal."', '".$desreal."', '".$avis."', '".$targetFilePath."', NOW())");

           //>>> echo "Query found : ".$sql."<br>";


/**************************************************(FIN) AJOUT FILM ************************************************************************/

/**************************************************(17 Mai 2019  - DEBUT) AJOUT FILM ************************************************************************/
          /*$sql  = $conn->query("INSERT INTO `films` (`titre`, `categorie`, `liphoto`,  `datyfin`)
           VALUES ('".$titre."', '".$categorie."', '".$targetFilePath."', NOW())");*/


           $sql  = $conn->prepare("INSERT INTO films (photo)
           VALUES ('".$photo."')");

           $sql->execute();
           ?>
