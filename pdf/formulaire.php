  
  <form id="form" action="valiny.php" method="POST">
    <fieldset class="float-left">
      <legend>Etat Civil<span class="clr">*</span></legend>

        <label>Prénom</label><br/>
        <input type="text" name="prenom" maxlength="20" ><br/>


        <label>Nom</label><br/>
        <input type="text" name="nom" maxlength="20" ><br/>


        <label>Date de naissance</label><br/>
        <input type="date" name="date_naissance" value="jj/mm/aaaa" ><br/>


        <label>Adresse</label><br/>
        <input type="text" name="adresse" ><br/>
        <label>Code postal</label><br/>
        <select name="code_postal" ><br/>
          <option value="php">PHP</option>
        </select><br/><br/>
        <label>Ville</label><br/>
        <input type="text" name="ville"><br/>


      <label>Nationalité</label><br/>
      <select name="nationalite" ><br/>
          <option value="php">PHP</option>
      </select><br/><br/>

      <label>Email</label><br/>
      <input type="email" name="email" ><br/>
      <label>Numéro de téléphone où l'on peut vous joindre</label><br/>
      <input type="tel" name="tel"><br/>
    </fieldset>

<!--2ème champ de formulaire-->

    <fieldset class="champ2">
      <legend>Votre statut<span class="clr">*</span></legend>

      <label>Vote statut actuel</label><br/>
      <select type="datalist" name="statut" ><br/>
        <option value="php">PHP</option>
      </select><br/><br/>

      <label>Quel est le dernier diplôme que vous ayez obtenu?</label><br/>
      <input type="text" name="diplome" ><br/>

        <label>Insérez ici votre photo</label><br/>
        <input type="file" name="photo" ><br/>
        

    <!---- DEUXIEME ETAPE ------->
      <legend>Motivation <span class="clr">*</span></legend>

        <label>Si vous étiez un super-héros / une super-héroïne, qui seriez-vous et pourquoi?</label><br/>
        <textarea name="heros" rows="7" cols="100" ></textarea><br/>


        <label>Racontez-nous un de vos "hacks" (pas forcément technique ou informatique):</label><br/>
        <textarea name="hack" rows="7" cols="100" ></textarea><br/>


        <label>Dites-nous pourquoi vous souhaitez intégrer la formation :</label><br/>
        <textarea name="pourquoi" rows="7" cols="100" ></textarea><br/>


        <label>Racontez-nous votre parcours et détaillez-nous votre motivation en vous exprimant avec votre style,
        mais ne vous limitez pas à un texte tapé à la va_vite. Aussi, n'hésitez pas à faire une vidéo, un site
        ou toute autre chose qui démontrera votre envie, votre motivation et vos compétences!</label><br/>
        <textarea name="parcours" rows="7" cols="100" ></textarea><br/>

        <label>Dans un an, avec vos nouveaux superpouvoirs de code informatique, que souhaiteriez-vous faire dans votre vie?</label><br/>
        <textarea name="futur" rows="7" cols="100" ></textarea><br/>

    <!-------- TROISIEME ETAPE -------------------->
    <legend>Pré-requis <span class="clr">*</span></legend>

        <label>Pré-requis #1 : PHP - Lessons Sololearn (OBLIGATOIRE) / Déposer ci-dessous le lien de votre profil Sololearn :</label><br/>
        <input type="text" name="php"  ><br/>


        <label>Pré-requis #2 : HTML et CSS - Badges Codecademy (OBLIGATOIRE) / Déposer ici le lien de votre profil public Codecademy :</label><br/>
        <input type="text" name="html_css"  ><br/>


        <label>Si vous avez des profils supplémentaires sur d'autres plate-formes  similaires, comme Openclassrooms ou Codeschool, copiez ici le(s) lien(s) vers ce(s) profil(s) public(s) (FACULTATIF)</label><br/>
        <input type="text" name="autresp"><br/>


        <label>Quel est votre niveau d'anglais (lu / écrit)? Pas  de panique, cette question est posée à titre indicatif</label><br/>
        <select type="datalist" name="anglais" ><br/>
          <option value="php">PHP</option>
        </select><br/><br/>

    </fieldset>


    <center><button>Envoyer</button></center>


  </form>

