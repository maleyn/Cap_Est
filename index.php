<?php include('header.php'); ?>


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
      <article class="formule">
        <a id="moussaillon" class="vignetteformule" href="#">
          <img src="images/steak_frite_ld.jpg" alt="steak_frite">
          <div>
            <h4>Formule Moussaillon</h4>
            <p>Plat + dessert</p>
            <p>(jusqu'à 12ans)</p>
            <p>10,50 €</p>
          </div>
        </a>
      </article>
      <article class="formule">
        <a id="capjour" class="vignetteformule" href="#">
          <img src="images/poisson_grillé_ld.jpg" alt="poisson_grillé">
          <div>
            <h4>Formule Cap Jour</h4>
            <p>Plat du Jour</p>
            <p>Entrée et/ou plat et/ou dessert</p>
            <p>A partir de 9,50 €</p>
          </div>
        </a>
      </article>
      <article class="formule">
        <a id="express" class="vignetteformule" href="#">
          <img src="images/tartare_saumon_ld.jpg" alt=" tartare_saumon">
          <div>
            <h4>Formule Cap Express</h4>
            <p>Entrée + plat ou Entrée + dessert</p>
            <p>Ou entrée + plat + dessert</p>
            <p>A partir de 16,50 €</p>
          </div>
        </a>
      </article>
      <article class="formule">
        <a id="tradition" class="vignetteformule" href="#">
          <img src="images/saumon_ld.jpg" alt="saumon">
          <div>
            <h4>Formule Cap Tradition</h4>
            <p>Entrée + plat ou Entrée + dessert</p>
            <p>Ou entrée + plat + dessert</p>
            <p>A partir de 18,50 €</p>
          </div>
        </a>
      </article>
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
        <article class="card">
          <a href="bloglien1.php"><img src="images/photo_instagram1_ld.jpg" alt="photo_instagram1" loading="lazy"
              style="width:100%"></a>
          <div class="card_container">
            <h4>02 Nov 2021 par John Doe</h4>
            <h5>Nouveau menu ! Venez découvrir</h5>
            <div class="lienblog">
              <a href="bloglien2.php">En savoir plus</a>
              <label for="comment1">2 <i class="fas fa-comments"></i></label>
              <input id="comment1" type="checkbox" role="button" aria-pressed="true">
              <div class="boitecomment">
                <h6>John doe le 16/09/2021</h6>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Molestiae eum ratione suscipit nisi sint officia omnis ullam nihil. Atque, quaerat!
                </p>
                <h6>John Doe le 14/09/2021</h6>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Molestiae eum ratione suscipit nisi sint officia omnis ullam nihil. Atque, quaerat!
                </p>
              </div>
            </div>
          </div>
        </article>
        <article class="card">
          <a href="bloglien2.php"><img src="images/photo_instagram2_ld.jpg" alt="photo_instagram2" loading="lazy"
              style="width:100%"></a>
          <div class="card_container">
            <h4>25 Oct 2021 par John Doe</h4>
            <h5>Un grand chef nous rend visite</h5>
            <div class="lienblog">
              <a href="bloglien2.php">En savoir plus</a>
              <label for="comment2">2 <i class="fas fa-comments"></i></label>
              <input id="comment2" type="checkbox" role="button" aria-pressed="true">
              <div class="boitecomment">
                <h6>John doe le 16/09/2021</h6>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Molestiae eum ratione suscipit nisi sint officia omnis ullam nihil. Atque, quaerat!
                </p>
                <h6>John Doe le 14/09/2021</h6>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Molestiae eum ratione suscipit nisi sint officia omnis ullam nihil. Atque, quaerat!
                </p>
              </div>
            </div>
          </div>
        </article>
        <article class="card">
          <a href="bloglien3.php"><img src="images/photo_instagram3_ld.jpg" alt="photo_instagram3" loading="lazy"
              style="width:100%"></a>
          <div class="card_container">
            <h4>15 Oct 2021 par John Doe</h4>
            <h5>La carte change !</h5>
            <div class="lienblog">
              <a href="bloglien2.php">En savoir plus</a>
              <label for="comment3">2 <i class="fas fa-comments"></i></label>
              <input id="comment3" type="checkbox" role="button" aria-pressed="true">
              <div class="boitecomment">
                <h6>John doe le 16/09/2021</h6>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Molestiae eum ratione suscipit nisi sint officia omnis ullam nihil. Atque, quaerat!
                </p>
                <h6>John Doe le 14/09/2021</h6>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Molestiae eum ratione suscipit nisi sint officia omnis ullam nihil. Atque, quaerat!
                </p>
              </div>
            </div>
          </div>
        </article>
        <article class="card">
          <a href="bloglien4.php"><img src="images/photo_instagram4_ld.jpg" alt="photo_instagram4" loading="lazy"
              style="width:100%"></a>
          <div class="card_container">
            <h4>3 Oct 2021 par John Doe</h4>
            <h5>Découvrez la nouvelle terrasse !</h5>
            <div class="lienblog">
              <a href="bloglien2.php">En savoir plus</a>
              <label for="comment4">2 <i class="fas fa-comments"></i></label>
              <input id="comment4" type="checkbox" role="button" aria-pressed="true">
              <div class="boitecomment">
                <h6>John doe le 16/09/2021</h6>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Molestiae eum ratione suscipit nisi sint officia omnis ullam nihil. Atque, quaerat!
                </p>
                <h6>John Doe le 14/09/2021</h6>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Molestiae eum ratione suscipit nisi sint officia omnis ullam nihil. Atque, quaerat!
                </p>
              </div>
            </div>
          </div>
        </article>
        <article class="card">
          <a href="bloglien5.php"><img src="images/photo_instagram5_ld.jpg" alt="photo_instagram5" loading="lazy"
              style="width:100%"></a>
          <div class="card_container">
            <h4>15 Sep 2021 par John Doe</h4>
            <h5>Le site internet évolue !</h5>
            <div class="lienblog">
              <a href="bloglien2.php">En savoir plus</a>
              <label for="comment5">2 <i class="fas fa-comments"></i></label>
              <input id="comment5" type="checkbox" role="button" aria-pressed="true">
              <div class="boitecomment">
                <h6>John doe le 16/09/2021</h6>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Molestiae eum ratione suscipit nisi sint officia omnis ullam nihil. Atque, quaerat!
                </p>
                <h6>John Doe le 14/09/2021</h6>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Molestiae eum ratione suscipit nisi sint officia omnis ullam nihil. Atque, quaerat!
                </p>
              </div>
            </div>
          </div>
        </article>
        <article class="card">
          <a href="bloglien6.php"><img src="images/photo_instagram6_ld.jpg" alt="photo_instagram6" loading="lazy"
              style="width:100%"></a>
          <div class="card_container">
            <h4>2 Sep 2021 par John Doe</h4>
            <h5>Le menu moussaillon en détails !</h5>
            <div class="lienblog">
              <a href="bloglien2.php">En savoir plus</a>
              <label for="comment6">2 <i class="fas fa-comments"></i></label>
              <input id="comment6" type="checkbox" role="button" aria-pressed="true">
              <div class="boitecomment">
                <h6>John doe le 16/09/2021</h6>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Molestiae eum ratione suscipit nisi sint officia omnis ullam nihil. Atque, quaerat!
                </p>
                <h6>John Doe le 14/09/2021</h6>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Molestiae eum ratione suscipit nisi sint officia omnis ullam nihil. Atque, quaerat!
                </p>
              </div>
            </div>
          </div>
        </article>
      </div>
      <!-- bouton de navigation du blog  -->
      <nav id="navigationblog">
        <a class="boutonrond" href="#">1</a><span>-</span>
        <a class="boutonrond" href="#">2</a><span>-</span>
        <a class="boutonrond" href="#">3</a>
      </nav>
      <!-- bouton blog version mobile et tablette-->
      <div id="boutonblog2" class="boutons">
        <a class="boutonphoto" href="blog.php">BLOG</a>
      </div>
    </div>
    <!-- bouton blog version pc  -->
    <div id="boutonblog" class="boutons">
      <a class="boutonphoto" href="blog.php">BLOG</a>
    </div>
  </section>
</main>
<?php include('footer.php'); ?>