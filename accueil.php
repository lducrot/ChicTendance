<?php
try {
    // Connexion à la base de données desert
    $bdd = new PDO("mysql:host=localhost;dbname=chicTendance;charset=utf8", "userCT", "ct", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e) {
    $messageErreur = $e->getMessage().'('.$e->getFile().', ligne '.$e->getLine().')';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Accueil</title>
        
    </head>
        <?php include("header.php"); ?>
    <body> 
    <ul class="breadcrumb">
         <li><a class="filAriane" href="accueil.php">Accueil</a></li>
    </ul>
        <?php if (isset($messageErreur)) echo $messageErreur; ?>
        
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-11">
        <center>
 
        <table class="imgAccueil">
            <tr>
                <td rowspan="2">
                    <img class="imgAccueilRobeSoiree" src="Contenu/images/robe_soiree_bleueFonce.jpg" />
                </td>
                <td>
                    <img class="imgAccueilRobeMariee" src="Contenu/images/robe_mariee_4.jpg" />
                </td>
            </tr>
            <tr>
                <td>
                    <img class="imgAccueilRobeCocktail" src="Contenu/images/robe_cocktail_rouge.jpg" />
                </td>
            </tr>
        </table>
        <p>Chic Tendance vous présente ces plus belles créations en robes de soirées, robes de mariée et robes de cocktails ! Grâce à elles vous êtes sûr d'être à la pointe de la mode. Il y en a assez pour satisfaire tout les goûts, alors n'hésitez plus !</p>


        </center> 
        </div>
    </div>
    
           
          
        
        
    </body>
    <?php include("footer.html"); ?>
</html>
