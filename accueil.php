<?php
try {
    // Connexion à la base de données desert
    $bdd = new PDO("mysql:host=localhost;dbname=chicTendance;charset=utf8", "userCT", "ct", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $stmtGenre = $bdd->query("SELECT * FROM t_style ORDER BY styl_id");
    $stmtStyle = $bdd->prepare("SELECT * FROM t_style WHERE styl_id=?");
}
catch (Exception $e) {
    $messageErreur = $e->getMessage().'('.$e->getFile().', ligne '.$e->getLine().')';
}

require 'vueAccueil.php';
?>