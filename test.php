<?php
    // pour supprimer les caractères inutiles remplis par  l'utilisateur
    $prenom = $nom = $date_naissance = $adresse = $code_postal = $ville = $nationalite = $email = $tel = $statut = $diplome = $photo = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $prenom = test_input($_POST["prenom"]);
      $nom = test_input($_POST["nom"]);
      $date_naissance = test_input($_POST["date_naissance"]);
      $adresse = test_input($_POST["adresse"]);
      $code_postal = test_input($_POST["code_postal"]);
      $ville = test_input($_POST["ville"]);
      $nationalite = test_input($_POST["nationalite"]);
      $email = test_input($_POST["email"]);
      $tel = test_input($_POST["tel"]);
      $statut = test_input($_POST["statut"]);
      $diplome = test_input($_POST["diplome"]);
      $photo = test_input($_POST["photo"]);
    }

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    // pour signifier qu'il faut remplir tous les champs
    $fieldErr = "";
    $prenom = $nom = $date_naissance = $adresse = $code_postal = $ville = $nationalite = $email = $tel = $statut = $diplome = $photo = "";


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (isset($_POST["prenom"], $_POST["nom"], $_POST["date_naissance"], $_POST["adresse"], $_POST["code_postal"], $_POST["ville"], $_POST["nationalite"], $_POST["email"], $_POST["tel"], $_POST["statut"], $_POST["diplome"], $_POST["photo"])) {
        $prenom = test_input($_POST["prenom"]);
        $nom = test_input($_POST["nom"]);
        $date_naissance = test_input($_POST["date_naissance"]);
        $adresse = test_input($_POST["adresse"]);
        $code_postal = test_input($_POST["code_postal"]);
        $ville = test_input($_POST["ville"]);
        $nationalite = test_input($_POST["nationalite"]);
        $email = test_input($_POST["email"]);
        $tel = test_input($_POST["tel"]);
        $statut = test_input($_POST["statut"]);
        $diplome = test_input($_POST["diplome"]);
        $photo = test_input($_POST["photo"]);
      }else {
        $fieldErr = "Tous les champs doivent être remplis";
      }
}
?>

<form id="form" action="validation-temp-form1.php" method="POST">

      <fieldset class="float-left">
        <legend> Etat Civil <span class="clr">*</span></legend>

          <label>Prénom</label><span class="error">* <?= $fieldErr;?></span><br/>
          <input type="text" name="prenom" value="<?= $prenom;?>" maxlength="20" required><br/>


          <label>Nom</label><span class="error">* <?= $fieldErr;?></span><br/>
          <input type="text" name="nom" value="<?= $nom;?>" maxlength="20" required><br/>


          <label>Date de naissance</label><span class="error">* <?= $fieldErr;?></span><br/>
          <input type="date" name="date_naissance" value="<?= $date_naissance;?>" required><br/>


          <label>Adresse</label><span class="error">* <?= $fieldErr;?></span><br/>
          <input type="text" name="adresse" value="<?= $adresse;?>" required><br/>


          <label>Code postal</label><span class="error">* <?= $fieldErr;?></span><br/>
          <select name="code_postal" required><br/>
            <option value="php">PHP</option>
          </select><br/><br/>


          <label>Ville</label><span class="error">* <?= $fieldErr;?></span><br/>
          <input type="text" name="ville" value="<?= $ville;?>" disabled><br/>



        <label>Nationalité</label><span class="error">* <?= $fieldErr;?></span><br/>
        <select name="nationalite" required><br/>
            <option value="php">PHP</option>
        </select><br/><br/>


        <label>Email</label><span class="error">* <?= $fieldErr;?></span><br/>
        <input type="email" name="email" value="<?= $email;?>" required><br/>


        <label>Numéro de téléphone où l'on peut vous joindre</label><span class="error">* <?= $fieldErr;?></span><br/>
        <input type="tel" name="tel" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}" value="<?= $tel;?>" required><br/>

  </fieldset>

<!--2ème champ de formulaire-->

  <fieldset class="champ2">
    <legend>Votre statut<span class="clr">*</span></legend>

    <label>Votre statut actuel</label><span class="error">* <?= $fieldErr;?></span><br/><br/>
    <input type="radio" name="statut" class="radio"
    <?php if (isset($statut) && $statut=="Etudiant.e") echo "checked";?> value="Etudiant.e">Etudiant.e (Vous ne pouvez pas postuler à notre formation)<br/>

    <input type="radio" name="statut" class="radio"
    <?php if (isset($statut) && $statut=="Salarié.e") echo "checked";?> value="Salarié.e">Salarié.e (Vous ne pouvez pas postuler à notre formation)<br/>

    <input type="radio" name="statut" class="radio"
    <?php if (isset($statut) && $statut=="Demandeur.se") echo "checked";?> value="Demandeur.se">Demandeur.se d'emploi indemnisé.e par Pôle Emploi<br/>

    <input type="radio" name="statut" class="radio"
    <?php if (isset($statut) && $statut=="Demandeur.se_non") echo "checked";?> value="Demandeur.se_non">Demandeur.se d'emploi non indemnisé.e par Pôle Emploi<br/>

    <input type="radio" name="statut" class="radio"
    <?php if (isset($statut) && $statut=="RSA") echo "checked";?> value="RSA">Allocataire RSA<br/>

    <input type="radio" name="statut" class="radio"
    <?php if (isset($statut) && $statut=="ASS") echo "checked";?> value="ASS">Allocataire ASS<br/>

    <input type="radio" name="statut" class="radio"
    <?php if (isset($statut) && $statut=="ASH") echo "checked";?> value="ASH">Allocataire ASH<br/>

    <input type="radio" name="statut" class="radio"
    <?php if (isset($statut) && $statut=="Réfugié.e") echo "checked";?> value="Réfugié.e">Réfugié.e<br/>

    <input type="radio" name="statut" class="radio"
    <?php if (isset($statut) && $statut=="Autre") echo "checked";?> value="Autre">Autre<br/>

    <br/><br/>

    <label>Quel est le dernier diplôme que vous ayez obtenu?</label><span class="error">* <?= $fieldErr;?></span><br/><br/>
    <input type="radio" name="diplome" class="radio"
    <?php if (isset($statut) && $statut=="sans") echo "checked";?> value="sans">Sans diplôme<br/>

    <input type="radio" name="diplome" class="radio"
    <?php if (isset($statut) && $statut=="brevet") echo "checked";?> value="brevet">Diplôme National du Brevet (brevet des collèges)<br/>

    <input type="radio" name="diplome" class="radio"
    <?php if (isset($statut) && $statut=="CAP") echo "checked";?> value="CAP">CAP<br/>

    <input type="radio" name="diplome" class="radio"
    <?php if (isset($statut) && $statut=="BEP") echo "checked";?> value="BEP">BEP<br/>

    <input type="radio" name="diplome" class="radio"
    <?php if (isset($statut) && $statut=="bac") echo "checked";?> value="bac">Bac (dont équivalence bac)<br/>

    <input type="radio" name="diplome" class="radio"
    <?php if (isset($statut) && $statut=="bac+2") echo "checked";?> value="bac+2">Bac +2<br/>

    <input type="radio" name="diplome" class="radio"
    <?php if (isset($statut) && $statut=="licence") echo "checked";?> value="licence">Licence<br/>

    <input type="radio" name="diplome" class="radio"
    <?php if (isset($statut) && $statut=="master") echo "checked";?> value="master">Master<br/>

    <input type="radio" name="diplome" class="radio"
    <?php if (isset($statut) && $statut=="doctorat") echo "checked";?> value="doctorat">Doctorat<br/>

    <input type="radio" name="diplome" class="radio"
    <?php if (isset($statut) && $statut=="autre") echo "checked";?> value="autre">Autre<br/><br/><br/>

    <label>Êtes-vous disponible à temps plein dès la pré-rentrée, le 18 février 2019 ? </label><span class="error">* <?= $fieldErr;?></span><br/><br/>
    <input type="radio" name="dispo" class="radio"
    <?php if (isset($dispo) && $dispo=="oui") echo "checked";?> value="oui">oui<br/>

    <input type="radio" name="dispo" class="radio"
    <?php if (isset($dispo) && $dispo=="non") echo "checked";?> value="non">non<br/>

    <br/><br/>

    <label>Insérez ici votre photo</label><span class="error">* <?= $fieldErr;?></span><br/><br/>
    <input type="file" name="photo" value="<?= $photo;?>" required><br/>


      <!--<input type="submit" value="Valider cette photo"><br/><br/>-->

  </fieldset>
</form>
