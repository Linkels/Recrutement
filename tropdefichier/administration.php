<?php
session_start();
include ('bdd_connect.php');
//if (isset($_POST['nom']) AND !empty($_POST['nom'])){
    $_SESSION['uname'] = $_POST['uname'];

    
    $sql = $conn->prepare('SELECT * FROM utilisateur WHERE ulogin = :pseudo');
    
    // $sql = $conn->prepare('SELECT * FROM utilisateur WHERE ulogin ='.$_SESSION['uname']);

     $sql->execute(array(
         'pseudo' => $_POST['uname']));
    // $sql->execute();

    // $resul = $sql->fetch();
    if($resul = $sql->fetch()){
    $isPasswordCorrect = password_verify($_POST['psw'], $resul['motdepasse']);

    // echo "Login : ".strtoupper($_SESSION['uname'])." - Nom : ".$resul['nom']." - Prénom :".$resul['prenom']."<br>";


    // if($resul = $sql->fetch()){
        $_SESSION['nom'] = $resul['nom'];
        $_SESSION['prenom'] = $resul['prenom'];
        // echo "Nom : ".strtoupper($_SESSION['nom'])." - "."Prénom : ".$_SESSION['prenom']."<br>";

            ?>
            <!DOCTYPE html>
            <html>
            <head>
                <title>Gestion du site</title>
                <meta charset="utf-8">
                <link rel="stylesheet" href="connexion.css">
                <link rel="stylesheet" href="style/form.css">
                <link rel="stylesheet" href="style/styla.css">
                <!-- link (DEBUT) BOOSTRAP 4.3.1 -->
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
                <!-- link (FIN) BOOSTRAP 4.3.1 -->
                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
                <style>
                    .roww {
                        display: flex;
                    }
                    .column {
                        flex: 40%;
                        text-align: left;
                        margin-top: 0;
                        background-color: blue;
                        
                        columns: 3 270px; 
                        column-rule: 2px dotted lightblue;
                    }
                    .column a, hover{
                        color:#fff;
                    }
                    .column li{
                    list-style: none;
                    }
                    #loko{
                        color: #fff;
                        text-decoration: underline;
                    }
                </style>
            </head>
            <body>
            <?php include('headera.php'); ?>
            <div class="titre">- ADMINISTRATION DU SITE -</div>
            <!--EMPLACEMENT Nom $_SESSION ['nom']d'utilisateur-->
            <div align="center">
            <?php
                            if (isset($_SESSION['nom']) AND isset($_SESSION['prenom']))
                            {
                                echo "Vous êtes ".strtoupper($_SESSION ['nom'])." ".$_SESSION ['prenom']."<br>";
                                ?><a href="lesfilms.php">Se déconnecter </a><?php
                            }else{
                                $_SESSION = array();
                                session_destroy();
                                echo "Vous êtes maintenant déconnecté";
                                header ('location:lesfilms.php');
                            } ?>

            <div class="fonony80" style="background-color:#DFE9FF">
            <div class="roww">
                <div class="column">
                    <div class="mifindra">
                        <h2 id="loko"><?php echo ucfirst('affichage');?></h2><br>
                            <ul>
                                <li><a href="liste_utilisateur.php">Utilisateurs</a></li><br>    
                                <li><a href="liste_films.php">Films</a></li><br>    
                                <li><a href="liste_genres.php">Genres</a></li><br>    
                                <li><a href="liste_acteurs.php">Acteurs</a></li><br>    
                                <li><a href="liste_realisateurs.php">Réalisateurs</a></li><br>    
                            </ul>
                    </div>
                    <div class="mifindra">
                        <ol>
                            <h2 id="loko">Ajout </h2><br>
                            <li><a href="inscription.php">Ajout Utilisateur(s)</a></li><br>    
                            <li><a href="ajoutff.php">Ajout film(s)</a></li><br>   
                            <li><a href="ajout_genre.php">Ajout Genre de film</a></li><br>    
                            <li><a href="ajout_acteur.php">Ajout Acteur(s)</a></li><br>    
                            <li><a href="ajout_realisateur.php">Ajout Réalisateur(s)</a></li><br><br>
                            
                        </ol>
                    </div>
                    <div class="mifindra">
                        <h2 id="loko">Mise à jour</h2><br>
                            <ul>
                                <li><a href="maj_utilisateur.php">Utilisateurs</a></li><br>    
                                <li><a href="maj_films.php">Films</a></li><br>    
                                <li><a href="maj_genres.php">Genres</a></li><br>    
                                <li><a href="maj_acteurs.php">Acteurs</a></li><br>    
                                <li><a href="maj_realisateurs.php">Réalisateurs</a></li><br>    
                        </ul>
                    </div>
                </div>
                
            </div><br><br>
            <!--- EMPLACEMENT Bouton DECONNEXION --->
            </div><br><br>
                <?php include('fotera.php'); ?>
            </body>
            </html>
            <?php
            }else{
                echo "Login et/ou mot de passe INCORRECT !";
            }
            ?>
