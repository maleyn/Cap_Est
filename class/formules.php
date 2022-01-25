<?php 

include_once("class/formule.php");

class Formules {
    
    private array $formules = [];

    public function ajouter(Formule $formule) {

        array_push($this->formules, $formule);
    }

    public function affichageFormules() {
        foreach ($this->formules as $formule) {

            echo "<article class='formule'>";
            echo "<a id='" . $formule->id() . "'" . "class='vignetteformule' href='#'>";
            echo "<img src='" . $formule->image_formule() . "'" . " alt=''>";
            echo "<div>";
            echo "<h4>" . $formule->titre_formule() . "</h4>";
            echo "<p>" . $formule->detail_formule() . "</p>";
            echo "<p>" . $formule->detail_more_formule() . "</p>";
            echo "<p>" . $formule->display_price() . " €" . "</p>";
            echo "</div>";
            echo "</a>";
            echo "</article>";
            
        }

    }

}