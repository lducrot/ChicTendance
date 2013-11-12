<nav>
    <div class="row-xs-4">
        <ul class="nav nav-justified nav-stacked">
            <?php foreach ($styles as $style): ?>
                <li class="active"><a class="navPrincipal" href="<?= "navigation/index/" . $this->nettoyer($style['styl_id']) ?>"><?= $this->nettoyer($style['styl_libelle']) . " <span class='badge'>" . $this->nettoyer($style['nbContenuStyle']) ."</span>" ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</nav><br />
