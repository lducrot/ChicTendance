<?php
require 'Modele.php';

try {
$genres = getGenre();
require 'vueAccueil.php';
}
catch(Exception $e) {
    $msgErreur = $e->getMessage();
    require 'erreur.php';
}
?>