<?php

require_once("blog.php");
require_once("commentaires.php");

class Blogs {

    private array $blogs = [];

    public function ajouter_blog(Blog $blog) {
        array_push($this->blogs, $blog);
    }

    public function display_blog($commentaires) {
        foreach($this->blogs as $blog) {
           
            echo "<article class='card' id='article" . $blog->display_id() . "'>";
            echo "<a href='bloglien" . $blog->display_id() . ".php'>";
            echo "<img src='/Cap_Est/images/photo_instagram" . $blog->display_id() . "_ld.jpg'" . " alt='photo_instagram" . $blog->display_id() . "' style='width:100%'></a>";
            echo "<h4>Le " . $blog->display_date() . " par " . $blog->display_author() . "</h4>";
            echo "<h5>" . $blog->display_title() . "</h5>";
            echo "<div class='lienblog'>";
            echo "<a href='bloglien" . $blog->display_id() . ".php'>" . "En savoir plus</a>";
            $commentaires->display_comments($blog->display_id());
            echo "</div>";
            echo "</article>";

        }
    }

}

