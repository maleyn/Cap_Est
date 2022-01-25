<?php include('./header.php'); ?>
<?php require_once("../class/variables_blog.php"); ?>
<?php require_once("../class/variables_commentaire.php"); ?>


<main class="container marge-top">
    <section id="blog" class="fondblog">
        <h3>Actualités</h3>
        <div id="actualite">
            <?php $blogs->display_blog($commentaires); ?>
        </div>
        <!-- bouton de navigation du blog -->
        <nav id="navigationblog">
            <a class="boutonrond" href="#">1</a><span>-</span>
            <a class="boutonrond" href="#">2</a><span>-</span>
            <a class="boutonrond" href="#">3</a>
        </nav>
    </section>
</main>
<?php include('./footer.php'); ?>