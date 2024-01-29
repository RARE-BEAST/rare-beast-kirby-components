<?php
$bg = $site->nav_bg_color()->value();
$fg = $site->nav_fg_color()->value();
$height = $site->nav_height()->value();
$font_size = $site->nav_font_size()->value();
$nav_links = $site->nav_links()->toStructure();
$logo = $site->nav_logo()->toFile();
$logo_fill_color = $site->logo_fill_color()->value();
?>

<header class="header" style="background-color: <?= $bg ?>; color: <?= $fg ?>; --height: <?= $height ?>rem; --font-size: <?= $font_size ?>rem;">
    
    <a href="#main" class="skip-link h3">Skip to main content.</a>
    
    <nav class="navigation" aria-label="Main Navigation">
        
        <ul class="navigation__links">
        <?php foreach($nav_links as $link): ?>
            <li class="link">
                <a href="<?= $link->link()->toPage()->url() ?>">
                    <?= $link->text()->isEmpty() ? $link->link()->toPage()->title() : $link->text() ?>
                </a>
            </li>
        <?php endforeach ?>
        </ul>

        <div class="navigation__logo" style="--logo-fill: <?= $logo_fill_color ?>;">
            <a href="<?= $site->url() ?>" class="logo">
                <?php if($logo->extension() == 'svg'): ?>
                    <?= $logo->read() ?>
                <?php else: ?>
                    <img src="<?= $logo->url() ?>" alt="<?= $logo->alt() ?>">
                <?php endif; ?>
            </a>
        </div>
    
    </nav>

</header>
