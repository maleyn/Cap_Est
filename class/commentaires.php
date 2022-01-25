<?php

require_once("commentaire.php");

class Commentaires {

    private array $commentaires = [];

    public function ajouter_commentaires(Commentaire $commentaire) {
        array_push($this->commentaires, $commentaire);
    }

    public function display_comments($id_article) {

            echo "<label for='comment" . $id_article . "' >2 <i class='fas fa-comments'></i></label>";
            echo "<input id='comment" . $id_article . "' type='checkbox' role='button' aria-pressed='true'>";
            echo "<div class='boitecomment'>";

        foreach($this->commentaires as $commentaire){
            if($commentaire->display_id_com() == $id_article) { 
            
            echo "<h6>" . $commentaire->display_author_com() . " le " . $commentaire->display_date_com() . "</h6>";
            echo "<p>" . $commentaire->display_contents_com() . "</p>";
            
            }

        }
            echo "</div>";

    }

}
