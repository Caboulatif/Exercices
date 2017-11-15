<?php

// Connexion à la BDD :
include_once('./model/ConnexionSql.php');

// Recuperation d'inormation dans l'url

$marque = isset($_GET["marque"]) ? $_GET["marque"] : "all"  ;
$energie = isset($_GET["energie"]) ? $_GET["energie"] : "all"  ;
$ordreprix = isset($_GET["ordreprix"]) ? $_GET["ordreprix"] : "ASC"  ;

// Appel du model (requete SQL)
include_once('./model/AnnoncesSql.php');

$annonces = get_annonces($marque, $energie, $ordreprix);

// Appel de la view (template)
include_once('./view/AnnoncesView.php');



?>
