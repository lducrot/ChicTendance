<?php
function getGenre() {
    $bdd = getBdd();
    $genres = $bdd->query("SELECT * FROM t_style ORDER BY styl_id");
    return $genres;
}

function getBdd() {
    $bdd = new PDO("mysql:host=localhost;dbname=chicTendance;charset=utf8", "userCT", "ct", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $bdd;
}

function getStyle($idStyle) {
    $bdd = getBdd();
    $style = $bdd->prepare("SELECT * FROM t_style WHERE styl_id=?");
    $style->execute(array($idStyle));
    $ligneStyle = $style->fetch();
    $nomStyle = $ligneStyle['STYL_LIBELLE'];
    return $nomStyle;
}

function getNombreRobe($idStyle) {
    $bdd = getBdd();
    $style = $bdd->prepare("SELECT COUNT(*) as 'Nombre de robes' FROM t_robe_de_soiree WHERE styl_id=?");
    $style->execute(array($idStyle));
    $ligneStyle = $style->fetch();
    $nomStyle = $ligneStyle['STYL_LIBELLE'];
    return $nomStyle;
}

