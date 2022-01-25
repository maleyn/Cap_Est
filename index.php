<?php include('./layout/header.php'); ?>
<?php require_once("./class/variables_formule.php");?>
<?php require_once("./class/variables_blog.php"); ?>
<?php require_once("./class/variables_commentaire.php"); ?>

<main id="contenu">
  <section id="ecran_accueil">

    <!-- photo de fond 1er ecran -->
    <div id="photoback1"></div>
    <!-- bouton 1ere page -->
    <figure id="logo">
      <img src="images/logo-cap-est2.svg" alt="logo_cap-est">
    </figure>
    <div class="boutons boutonaccueil">
      <a class="boutonreservation" href="#">Réservation</a>
      <a class="boutoncarte" href="#">la carte</a>
    </div>
  </section>
  <!-- 2ième section -->
  <section id="presentation" class="container padding">
    <div>
      <h3>A propos de</h3>
      <h4>CAP EST</h4><small>Café Restaurant</small>
    </div>
    <article>
      <h5>Ambiance chaleureuse et conviviale !</h5><br>
      <p>
        Prenez le large et partez avec nous pour un voyage gustatif et une ambiance chaleureuse.<br><br>
        Vous pourrez mettre le Cap sur la carte, au fil des saisons et à la découverte d'une cuisine actuelle sans
        oublier quelques saveurs d'antan, <b>faite maison</b>.<br><br>
        Nous sommes également en mesure de vous proposer des buffets, cocktails dînatoires et repas à thème en fonction
        de vos envies dans une salle privatisée à l'étage.
      </p>
    </article>
  </section>
  <!-- formule et bouton carte du restaurant -->
  <section id="menu_restaurant" class="padding ">
    <h3>AU MENU<br><small>Nos Formules</small></h3>
    <div id="articles" class="container">
      <!-- les formules  -->
      <?php 
        // affichage des formules grace aux class
        $formules->affichageFormules();
      ?>
    </div>
    <div class="boutons">
      <a href="#" class="boutoncarte">LA CARTE</a>
    </div>
  </section>
  <!-- presentation des cuisinier et blog -->
  <section id="cuisinier_blog" class="container padding">
    <div id="cuistos">
      <h3>Les cuisiniers</h3>
      <div id="cuisinier">
        <article class="card">
          <img srcset="images/cuisinier-chef2-ld.jpg 300w,images/cuisinier-chef2.jpg 400w"
            sizes="(max-width: 992px) 300px, 400px" src="images/cuisinier-chef.jpg" style="width:100%" alt="chef_paul">
          <div>
            <h4><b>Paul</b></h4>
            <h5>Chef</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Perferendis harum enim voluptate tempore quasi quis facilis a nisi repellat,
              um exercitationem tenetur dolore,
              magni cumque incidunt ullam maxime saepe! Exercitationem.</p>
          </div>
        </article>
        <article class="card">
          <img srcset="images/cuisinier-sous-chef-ld.jpg 300w,images/cuisinier-sous-chef.jpg 400w"
            sizes="(max-width: 992px) 300px, 400px" src="images/cuisinier-sous-chef.jpg" style="width:100%"
            alt="sous_chef_marie">
          <div>
            <h4><b>Marie</b></h4>
            <h5>Sous-Chef</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Perferendis harum enim voluptate tempore quasi quis facilis a nisi repellat,
              um exercitationem tenetur dolore,
              magni cumque incidunt ullam maxime saepe! Exercitationem.</p>
          </div>
        </article>
      </div>
    </div>
    <!-- blog qui apparait seulement en version pc -->
    <div id="blog" class="container">
    
      <h3>Actualités</h3>
      <div id="actualite">
      <?php $blogs->display_blog($commentaires); ?>
      </div>
      <!-- bouton de navigation du blog  -->
      <nav id="navigationblog">
        <a class="boutonrond" href="#">1</a><span>-</span>
        <a class="boutonrond" href="#">2</a><span>-</span>
        <a class="boutonrond" href="#">3</a>
      </nav>
      <!-- bouton blog version mobile et tablette-->
      <div id="boutonblog2" class="boutons">
        <a class="boutonphoto" href="./layout/blog.php">BLOG</a>
      </div>
    </div>
    <!-- bouton blog version pc  -->
    <div id="boutonblog" class="boutons">
      <a class="boutonphoto" href="./layout/blog.php">BLOG</a>
    </div>
  </section>
  
</main>
<?php include('./layout/footer.php'); ?>