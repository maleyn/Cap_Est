<?php

include_once("blogs.php");


$blogs = new Blogs;

$blogs->ajouter_blog(new Blog(1, "John Doe", "2 Decembre 2021", "Nouveau menu ! Venez découvrir"));
$blogs->ajouter_blog(new Blog(2, "Mike Phil", "25 Novembre 2021", "Un grand chef nous rend visite"));
$blogs->ajouter_blog(new Blog(3, "Bob Hans", "15 Octobre 2021", "La carte change !"));
$blogs->ajouter_blog(new Blog(4, "Jack Stevens", "3 Octobre 2021", "Découvrez la nouvelle terrasse !"));
$blogs->ajouter_blog(new Blog(5, "Robert Romichet", "15 Septembre 2021", "Le site internet évolue !"));
$blogs->ajouter_blog(new Blog(6, "Marie Estebech", "2 Septembre 2021", "Le menu moussaillon en détails !"));