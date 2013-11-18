<nav>
    <div class="row-xs-4">
        <ul class="nav nav-justified nav-stacked">
            <?php
            foreach ($styles as $unStyle):
                $menu = "<li class='active'><a class='navPrincipal' href='navigation/index/" . $this->nettoyer($unStyle['styl_id']) . "'> " . $this->nettoyer($unStyle['styl_libelle']) . " <span class='badge'>" . $this->nettoyer($unStyle['nbContenuStyle']) . "</span></a></li>";
                if (isset($style['STYL_ID'])) {
                    if ($unStyle['styl_id'] == $style['STYL_ID']) {
                        $menu = str_replace("navPrincipal", "navPrincipalActive", $menu);
                        echo $menu;
                    } else {
                        echo $menu;
                    }
                } else {
                    echo $menu;
                } endforeach;
            ?>
        </ul>
    </div>
</nav><br />
