<?php
$bg = $site->nav_bg_color()->value();
$fg = $site->nav_fg_color()->value();
$nav_font_size = $site->nav_font_size()->value();
$nav_links = $site->nav_links()->toStructure();
$mobile_menu_links = $site->mobile_menu_links()->toStructure();
$logo = $site->nav_logo()->toFile();
$logo_fill_color = $site->logo_fill_color()->value();
$menu_toggle_color = $site->menu_toggle_color()->value();
?>

<header class="header js-header">
    <a href="#main" class="skip-link h3">Skip to main content.</a>

    <div class="header__bg js-header-bg" style="background-color: <?= $bg ?>;"></div>
    
    <nav class="navigation" style="color: <?= $fg ?>; --nav-font-size: <?= $nav_font_size ?>rem; --logo-fill: <?= $logo_fill_color ?>;" aria-label="Main Navigation">

        <ul class="navigation__links">
        <?php foreach($nav_links as $link): ?>
            <li class="link">
                <a href="<?= $link->link()->toPage()->url() ?>">
                    <?= $link->text()->isEmpty() ? $link->link()->toPage()->title() : $link->text() ?>
                </a>
            </li>
        <?php endforeach ?>
        </ul>

        <div class="navigation__logo">
            <a href="<?= $site->url() ?>" class="logo">
                <?php if($logo->extension() == 'svg'): ?>
                    <?= $logo->read() ?>
                <?php else: ?>
                    <img src="<?= $logo->url() ?>" alt="<?= $logo->alt() ?>">
                <?php endif; ?>
            </a>
        </div>
    
    </nav>

    <div class="navigation__menu-toggle" style="--menu-toggle-color: <?= $menu_toggle_color ?>;">
        <div class="toggle js-menu-toggle" aria-label="Toggle Navigation" role="button" tabindex="0" data-a11y-dialog-show>
            <?php snippet('menu-toggle') ?>
        </div>
    </div>

    <div class="slide-in-menu js-slide-in-menu" role="dialog" aria-modal="true" aria-hidden="true">
        <div class="slide-in-menu__inner">
            
            <ul class="links">
            <?php foreach($nav_links as $link): ?>
                <li class="link h1">
                    <a href="<?= $link->link()->toPage()->url() ?>">
                        <?= $link->text()->isEmpty() ? $link->link()->toPage()->title() : $link->text() ?>
                    </a>
                </li>
                <?php endforeach ?>
            </ul>
            
            <button class="slide-in-menu__close" data-a11y-dialog-hide>Close menu</button>
        </div>
    </div>
    
</header>
