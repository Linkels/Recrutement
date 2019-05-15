<?php
try
{
   $conn = new PDO('mysql:host=localhost;dbname=Recrutement', 'angie', 'wachtwoord');
}
catch(Exception $e)
{
    echo 'Erreur : '.$e->getMessage().'<br />';
    echo 'N° : '.$e->getCode().'<br />';
}
?>
