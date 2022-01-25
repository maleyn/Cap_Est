<?php

require_once("formules.php");

$formules = new Formules;

$formules->ajouter(new Formule("images/steak_frite_ld.jpg", "moussaillon", "Formule moussaillon", "Plat + dessert", "(Jusqu'à 12ans)", "10,50"));
$formules->ajouter(new Formule("images/poisson_grillé_ld.jpg","capjour", "Formule cap jour", "Plat du jour", "Entrée et/ou Plat et/ou Dessert", "9,50"));
$formules->ajouter(new Formule("images/tartare_saumon_ld.jpg", "express", "Formule cap express", "Entrée + Plat ou Entrée + Dessert", "ou Entrée + Plat + Dessert", "16,50"));
$formules->ajouter(new Formule("images/saumon_ld.jpg", "tradition", "Formule cap tradition", "Entrée + Plat ou Entrée + Dessert", "ou Entrée + Plat + Dessert ", "18,50"));






