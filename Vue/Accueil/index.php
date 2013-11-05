
<?php $this->titre = "Chic Tendance"; ?>

<nav>
    <div class="row-xs-4">
        <ul class="nav nav-justified nav-stacked">
            <?php foreach ($styles as $style): ?>
                <li class="active"><a class="navPrincipal" href="<?= "style/index/" . $this->nettoyer($style['styl_id']) ?>"><?= $this->nettoyer($style['styl_libelle']) . " <span class='badge'>" . $this->nettoyer($style['nbContenuStyle']) ."</span>" ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</nav>
<br />      

<ul class="breadcrumb">
    <li><a class="filAriane" href="index.php">Accueil</a></li>
</ul>
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

