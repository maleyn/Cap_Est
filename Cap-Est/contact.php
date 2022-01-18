<?php include('header.php'); ?>
  <!-- formulaire de contact -->
  <main class="container marge-top fondgrisfonce">
    <div id="infos">
      <h3>Restaurant CAP EST</h3>
      <p><a href="#"><i class="fas fa-map-signs"></i><span>3, rue du Cap - 56000 VANNES</span></a></p>
      <p><a href="tel:+330299999999"><i class="fas fa-phone"></i>Tél : 02 99 99 99 99</a></p>
    </div>
    <div id="contact">
      <h3>Laissez-nous un message</h3>
      <p id="champs">* Champs obligatoire</p>
      <form action="envoyerform.php" method="post">
        <p>
          <input type="radio" name="civilite" id="civilite" value="M" checked>
          <label for="civilite" class="petit">M.</label>
          <input type="radio" name="civilite" id="civilitee" value="Mme">
          <label for="civilitee">Mme</label>
        </p>
        <p>
          <label for="nom">Votre Nom</label>
          <input type="text" name="nom" id="nom" placeholder="tapez votre nom" required>
        </p>
        <p>
          <label for="prenom">Votre Prénom *</label>
          <input type="text" name="prenom" id="prenom" placeholder="tapez votre prénom">
        </p>
        <p>
          <label for="email">Votre Email *</label>
          <input type="email" name="email" id="email" placeholder="tapez votre Email" required>
        </p>
        <p>
          <label id="votremessage" for="message">Votre Message</label></p>
        <p>
          <textarea name="message" rows="5" id="message" placeholder="votre message"></textarea>
        </p>
        <p>
          <input type="checkbox" name="consentement" id="consentement_checkbox" required>
          <label id="consentement" for="consentement">J'autorise ce site à conserver mes données personnelles transmise via ce formulaire. Aucune exploitation commerciale ne sera faite des données conservées. Voir notre <a href="#">politique de gestion des données personnelles</a></label>
        </p>
        <p><input type="submit" value="Envoyer" class="boutonform"><input type="reset" value="Annuler"
            class="boutonform"></p>
      </form>
    </div>
  </main>
<?php include('footer.php'); ?>