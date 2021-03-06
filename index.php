<?php session_start();
?>
  <!DOCTYPE html>
<html lang="fr">

<head>
  <title>Simplon Charleville _ candidature</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="img/favicon.ico" />

  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

  <!--  pour le css natif -->
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/style_index.css">
  <link rel="stylesheet" href="css/footer.css">
</head>

<body>
  <!--pour inclure le header-->
  <?php
  include 'include/header.php';
  ?>

<!--début du contenu "main"-->
  <div id="main">

    <!--pour l'ensemble des blocs-->
      <div id="gp_blocs">

        <!--pour le premier bloc rouge à gauche-->
        <div id="bloc_1" class="animated zoomInLeft">
            <h1 class="titre-bloc1">
              Promo
            </h1>
            <h3 class="titre-inter-bloc1">
              Date ultime pour candidater:
            </h3>
            <h4 class="date-bloc1">01/01/2019
            </h4>
            <center><hr/></center>
            <h3 class="titre-inter-bloc1 deux">
              Date de la formation:
            </h3>
            <h4 class="date-bloc1">
              Du 01/01/2019 au
              01/01/2019
            </h4>
        </div>

        <!-- pour le deuxième bloc blanc à droite-->
        <div id="bloc_2" class="animated fadeInRight">
          <h1 class="titre-bloc2">
            Bienvenue au formulaire pour poser votre candidature à la promo
          </h1>
          <p class="text-bloc2">Vous vous apprêtez à candidater à la formation Développeur·se Web
            de Simplon Charleville-Mézières - labellisée Grande Ecole du Numérique - qui se déroulera
            à Charleville du tant au tant (7 mois et demi - 840 heures),  dont 1 mois de stage et 15
            jours de prairie. </p>
          <p class="text-bloc2">Cette formation sera gratuite pour les apprenant·e·s sélectionné·e·s
            grâce à un financement de la région Grand Est.</p>
            <br/>
          <p class="text-bloc2">Lieu de la formation: Simplon.co Charleville-Mézières - Campus Moulin
            Leblanc 08300 Charleville-Mézières</p>
          <p class="text-bloc2 message">➔ Avant toute chose, lisez bien cette page, vous y trouverez de nombreuses informations.</p>
        </div>

        <!---2ème ligne--->
        <div id="bloc_3" class="animated fadeInLeft">
          <h1 class="titre-bloc3">
            Comment candidater?
          </h1>
          <p class="text-bloc3">Vous pouvez conserver le lien vers votre formulaire pour le mettre à jour si
            besoin jusqu'à la date limité de candidature.</p>
          <p class="text-bloc3">Dans le cadre du RGPD, merci de ne pas indiquer dans ce formulaire toutes données qualifiées de sensibles
            (santé, religion, appartenance politique, appartenance syndicale, philosophique ou sexuelle).</p>
            <br/>
          <p class="text-bloc3">Vous allez commencer le formulaire de candidature, prenez votre temps pour répondre aux questions,
            gardez bien en tête que cette candidature est un marathon et non un sprint ! </p>
            <br/>
          <p class="text-bloc3">Exprimez-vous le plus naturellement possible : il ne s'agit pas d'un examen.</p>
          <p class="text-bloc3">La rédaction doit être claire et structurée (espaces, tirets et numérotations) de façon à ce que
            l’ensemble des informations soit compréhensibles dès la première lecture.<br/>
            Faites des phrases courtes et concrètes : il ne s’agit pas d’impressionner par la complexité de vos réponses, mais par
            la spontanéité, la sincérité et la créativité !</p>
            <br/>
          <p class="text-bloc3">Imaginez être face à une personne qui ne connaît ni votre parcours, ni votre expérience, ni votre objectif
            professionnel : que diriez-vous pour la convaincre de la pertinence de votre candidature en seulement 3 minutes ?</p>
            <br/>
          <p class="text-bloc3">Relisez-vous et/ou faites-vous relire plusieurs fois.</p>
      </div>

<!--pour le 4ème bloc à fond noir à droite-->
      <div id="bloc_4" class="animated flipInY">
        <h1 class="titre-bloc4">
          SIMPLON, en deux mots
        </h1>
        <div class="fond-noir">
          <p class="text-bloc4">Simplon.co est un réseau de fabriques numériques et inclusives en France et à l’étranger.
          Nous avons formé plus de 4200 apprenant·e·s aux métiers du numérique depuis 2013.</p>
            <br/>
          <p class="text-bloc4">Nous sommes une entreprise sociale et solidaire. Nous voulons faire du numérique un
          véritable levier d’inclusion et révéler des talents parmi des publics peu représentés dans le secteur.</p>
        </div>
      </div>

<!--pour le 5ème bloc en rouge juste en-dessous-->
    <div id="bloc_5" class="animated zoomInRight">
      <h1 class="titre-bloc5">
        Obligatoire
      </h1>
      <h3 class="titre-inter-bloc5">
        Public :
      </h3>
      <h4 class="info-bloc5">
        Demandeur.se.s d’emploi inscrit.e.s à PÔLE EMPLOI
      </h4>
      <center><hr/></center>
    </div>

<!--pour le 6ème bloc blanc au milieu--->
    <div id="bloc_6" class="animated bounceInUp">
    <div class="list-gche">
      <h3 class="titre-bloc6">
        Le but de cette formation :
      </h3>
          <ul>
            <br/>
            <li class="text-bloc6">Acquérir les compétences de Développeur·se Web junior</li>
            <li class="text-bloc6">Bénéficier d'un accompagnement à l'insertion professionnelle</li>
            <li class="text-bloc6">S’orienter vers un métier d'avenir</li>
            <br/>
            <li class="text-bloc6"><span class="tx-udl">Certification</span> > Passage du Titre professionnel RNCP 5927. Niv. III. - Spécialisation web</li>
          </ul>
          <br/>
        </div>
        <div class="list-dte">
          <h3 class="titre-bloc6">Les profils recherchés :</h3>
          <br/>
          <ul>
            <li class="text-bloc6">Être demandeur·se d'emploi inscrit.e.s à PÔLE EMPLOI (Obligatoire)</li>
            <li class="text-bloc6">Savoir lire et écrire (au clavier notamment)</li>
            <li class="text-bloc6">Aimer travailler en équipe</li>
            <li class="text-bloc6">Faculté d’adaptation</li>
            <li class="text-bloc6">Autonomie, patience, persévérance, détermination, débrouillardise, rigueur</li>
            <li class="text-bloc6">Avoir une réelle appétence pour le numérique</li>
          </ul>
        </div>
        <div class="list-competences">
          <h3 class="titre-bloc6">Les compétences visées :</h3>
            <ul>
              <li class="text-bloc6">Maquetter une application</li>
              <li class="text-bloc6">Concevoir une base de données</li>
              <li class="text-bloc6">Mettre en place une base de données</li>
              <li class="text-bloc6">Développer une interface utilisateur</li>
              <li class="text-bloc6">Développer des composants d'accès aux données</li>
              <li class="text-bloc6">Développer des pages web en lien avec une base de données</li>
              <li class="text-bloc6">Mettre en oeuvre une solution de gestion de contenu ou e-commerce</li>
              <li class="text-bloc6">Développer une application simple de mobilité numérique</li>
            </ul>

      </div>
    </div>

<!--pour le 7ème bloc rouge à gauche-->
    <div id="bloc_7" class="animated zoomInLeft delay-3s">
      <div class="titraille-bloc7">
      <h1 class="titre-bloc7">
        Important
      </h1>
      <h1 class="titre-bloc7">
        Pré-requis
      </h1>
    </div>
    <center><hr/></center>
      <p class="text-bloc7 un">Vous allez devoir faire vos preuves en matière de code avant de finaliser votre candidature.</p>
      <p class="text-bloc7">Nous vous demandons de vous rendre sur <a href="https://www.codecademy.com/">codecademy.com</a> ou
        <a href="https://www.sololearn.com/">sololearn.com</a> pour réaliser les exercices proposés (plus d'informations dans les prochaines rubriques).</p>
      <br/>
      <p class="text-bloc7">N'hésitez pas à faire un maximum de choses avant d'envoyer votre candidature, plus vous aurez des choses à nous montrer,
        plus vous nous prouverez votre motivation !</p>
      <br/>
      <p class="text-bloc7">Autres pistes ici : Plus d'infos sur <a href="https://simplon.co/comment-candidater/">simplon.co.</a></p>
    </div>

<!--pour le 8ème bloc à fond noir à droite-->
    <div id="bloc_8" class="animated lightSpeedIn delay-3s">
      <h1 class="titre-bloc8">
        Nous contacter
      </h1>
      <div class="fond-noir">
        <p class="text-bloc8">Benoit CARON, médiateur à SIMPLON Charleville</p>
        <p class="text-bloc8">b.caron@ardennes.cci.fr</p>
        <p class="text-bloc8">ou</p>
      </div>
      <button> Nous contacter </button>
    </div>

<!--  pour le dernier bloc blanc en bas -->
    <div id="bloc_9">
      <h1 class="titre-bloc9" >
        Confidentialité
      </h1>
      <p class="text-bloc9">Les informations recueillies sur ce formulaire sont enregistrées dans un fichier informatisé par Simplon.co pour le suivi des
        candidatures à nos formations, ainsi qu'au suivi administratif et pédagogique si vous êtes retenu.e pour suivre nos formations. Elles sont conservées
        pendant 3 ans et sont destinées à la Direction de la Formation, de l'ingénierie et des Partenariats, ainsi qu'aux Directions Territoriales.
      </p>
      <p class="text-bloc9">Conformément à la loi « informatique et libertés », vous pouvez exercer votre droit d'accès aux données vous concernant et les
        faire rectifier en contactant : <br/>
        A l'attention du délégué à la protection des données - Simplon.co - 55 Rue de Vincennes - 93 100 Montreuil et <a href="mailto:rgpd@simplon.co">rgpd@simplon.co.</a>
      </p>
    </div>
</div>

<?php
  $bdd=null;
?>
<!--  pour le bouton de candidature  -->

<div class="btn-flex">
  <button class="btn-candidat">
    <a href="register.php"> Je candidate ! </a>
  </button>
</div>

<!--  pour le slider des partenaires  -->

    <div class="slider">
      <div class="slide-track">
        <div class="slide">
          <img src="img/Partners/01.png" height="100" width="250" alt="" />
        </div>
        <div class="slide">
          <img src="img/Partners/02.jpg" height="100" width="250" alt="" />
        </div>
        <div class="slide">
          <img src="img/Partners/03.png" height="100" width="250" alt="" />
        </div>
        <div class="slide">
          <img src="img/Partners/04.jpg" height="100" width="250" alt="" />
        </div>
        <div class="slide">
          <img src="img/Partners/05.jpg" height="100" width="250" alt="" />
        </div>
        <div class="slide">
          <img src="img/Partners/06.png" height="100" width="250" alt="" />
        </div>
        <div class="slide">
          <img src="img/Partners/p_cci.png" height="100" width="250" alt="" />
        </div>
        <div class="slide">
          <img src="img/Partners/01.png" height="100" width="250" alt="" />
        </div>
        <div class="slide">
          <img src="img/Partners/02.jpg" height="100" width="250" alt="" />
        </div>
        <div class="slide">
          <img src="img/Partners/03.png" height="100" width="250" alt="" />
        </div>
        <div class="slide">
          <img src="img/Partners/04.jpg" height="100" width="250" alt="" />
        </div>
        <div class="slide">
          <img src="img/Partners/05.jpg" height="100" width="250" alt="" />
        </div>
        <div class="slide">
          <img src="img/Partners/06.png" height="100" width="250" alt="" />
        </div>
        <div class="slide">
          <img src="img/Partners/p_cci.png" height="100" width="250" alt="" />
        </div>
      </div>
    </div>

  <!--pour inclure le footer-->
  <?php

  include 'include/footer.php';

  ?>

  <script src="js/main.js"></script>
</body>

</html>
