<?php

require_once("commentaires.php");

$commentaires = new Commentaires;

$commentaires->ajouter_commentaires(new Commentaire(1, "John Doe", "03/12/2021", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae eum ratione suscipit nisi sint officia omnis ullam nihil. Atque, quaerat! "));
$commentaires->ajouter_commentaires(new Commentaire(1, "Mick Grignon", "2/12/2021", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae eum ratione suscipit nisi sint officia omnis ullam nihil. Atque, quaerat! "));

$commentaires->ajouter_commentaires(new Commentaire(2, "John Doe", "27/11/2021", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae eum ratione suscipit nisi sint officia omnis ullam nihil. Atque, quaerat! "));
$commentaires->ajouter_commentaires(new Commentaire(2, "Mick Grignon", "25/11/2021", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae eum ratione suscipit nisi sint officia omnis ullam nihil. Atque, quaerat! "));

$commentaires->ajouter_commentaires(new Commentaire(3, "John Doe", "17/10/2021", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae eum ratione suscipit nisi sint officia omnis ullam nihil. Atque, quaerat! "));
$commentaires->ajouter_commentaires(new Commentaire(3, "Mick Grignon", "16/10/2021", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae eum ratione suscipit nisi sint officia omnis ullam nihil. Atque, quaerat! "));

$commentaires->ajouter_commentaires(new Commentaire(4, "John Doe", "07/10/2021", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae eum ratione suscipit nisi sint officia omnis ullam nihil. Atque, quaerat! "));
$commentaires->ajouter_commentaires(new Commentaire(4, "Mick Grignon", "05/10/2021", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae eum ratione suscipit nisi sint officia omnis ullam nihil. Atque, quaerat! "));

$commentaires->ajouter_commentaires(new Commentaire(5, "John Doe", "17/09/2021", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae eum ratione suscipit nisi sint officia omnis ullam nihil. Atque, quaerat! "));
$commentaires->ajouter_commentaires(new Commentaire(5, "Mick Grignon", "20/09/2021", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae eum ratione suscipit nisi sint officia omnis ullam nihil. Atque, quaerat! "));

$commentaires->ajouter_commentaires(new Commentaire(6, "John Doe", "02/09/2021", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae eum ratione suscipit nisi sint officia omnis ullam nihil. Atque, quaerat! "));
$commentaires->ajouter_commentaires(new Commentaire(6, "Mick Grignon", "03/09/2021", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae eum ratione suscipit nisi sint officia omnis ullam nihil. Atque, quaerat! "));



