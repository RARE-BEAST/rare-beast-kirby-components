<!DOCTYPE html>
<html lang="en">
<head>
    
<meta charset="UTF-8">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="mobile-web-app-capable" content="yes">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">


<!-- FAVICONS -->
<link rel="icon" type="<?= option('favicon.shortcut icon.type') ?>" href="<?= url(option('favicon.shortcut icon.url')) ?>">
<link rel="alternate icon" type="<?= option('favicon.alternate icon.type') ?>" href="<?= url(option('favicon.alternate icon.url')) ?>">
<link rel="apple-touch-icon" type="<?= option('favicon.apple-touch-icon.type') ?>" href="<?= url(option('favicon.apple-touch-icon.url')) ?>">


<!-- PAGE-LEVEL TITLE & META DESCRIPTION -->
<?php if($page->seo_title()->isNotEmpty()): ?>
<title><?= $page->seo_title()->html() ?></title>
<?php endif; ?>
<?php if($page->meta_description()->isNotEmpty()): ?>
<meta name="description" content="<?= $page->meta_description()->html() ?>">
<?php endif; ?>


<!-- PAGE-LEVEL SEO: NOINDEX & NOFOLLOW  -->
<?php
// Initialize an empty array to hold our robot directives
$robotDirectives = [];

// Check if the page should not be indexed
if ($page->noindex()->toBool() === true) {
    // If so, add 'noindex' to our array of directives
    $robotDirectives[] = 'noindex';
}

// Check if links on the page should not be followed
if ($page->nofollow()->toBool() === true) {
    // If so, add 'nofollow' to our array of directives
    $robotDirectives[] = 'nofollow';
}

// If we have any directives, output them in a single meta tag
if (!empty($robotDirectives)) {
    // Convert our array of directives into a comma-separated string
    $contentValue = implode(',', $robotDirectives);

    // Output the meta tag with our directives
    echo '<meta name="robots" content="' . $contentValue . '">';
}
?>


<!-- OPEN GRAPH / FACEBOOK -->
<?php if(!empty($page->url())): ?>
<meta property="og:url" content="<?= $page->url() ?>">
<?php endif; ?>
<?php if($page->seo_title()->isNotEmpty()): ?>
<meta property="og:title" content="<?= $page->seo_title()->html() ?>">
<?php endif; ?>
<?php if($page->meta_description()->isNotEmpty()): ?>
<meta property="og:description" content="<?= $page->meta_description()->html() ?>">
<?php endif; ?>
<?php if($page->og_image()->toFile()): ?>
<meta property="og:image" content="<?= $page->og_image()->toFile()->url() ?>">
<?php endif; ?>

<!-- Twitter -->
<?php if(!empty($page->url())): ?>
<meta property="twitter:url" content="<?= $page->url() ?>">
<?php endif; ?>
<?php if($page->seo_title()->isNotEmpty()): ?>
<meta property="twitter:title" content="<?= $page->seo_title()->html() ?>">
<?php endif; ?>
<?php if($page->meta_description()->isNotEmpty()): ?>
<meta property="twitter:description" content="<?= $page->meta_description()->html() ?>">
<?php endif; ?>
<?php if($page->twitter_image()->toFile()): ?>
<meta property="twitter:image" content="<?= $page->twitter_image()->toFile()->url() ?>">
<?php endif; ?>

<!-- Canonical URL -->
<link rel="canonical" href="<?= $site->url() ?>">


<!-- GLOBAL SETTINGS -->
<?php
$nav_bar_height = $site->nav_height()->value();
$page_width = site()->page_width()->value();
$base_size = site()->base_size()->value();
$type_scale = site()->type_scale()->value();
if ($type_scale == 'custom'):
$type_custom = site()->type_custom();
endif;
?>


<!-- BRAND PALETTE -->
<?php
$background_1 = site()->background_1()->value();
$background_2 = site()->background_2()->value();
$background_3 = site()->background_3()->value();
$foreground_light = site()->foreground_light()->value();
$foreground_dark = site()->foreground_dark()->value();
$accent_1 = site()->accent_1()->value();
$accent_2 = site()->accent_2()->value();
$accent_3 = site()->accent_3()->value();
$accent_4 = site()->accent_4()->value();
?>

<style>
:root {
    --nav-bar-height: <?= $nav_bar_height ?>rem;
    --background-1: <?= $background_1 ?>;
    --background-2: <?= $background_2 ?>;
    --background-3: <?= $background_3 ?>;
    --foreground-light: <?= $foreground_light ?>;
    --foreground-dark: <?= $foreground_dark ?>;
    --accent-1: <?= $accent_1 ?>;
    --accent-2: <?= $accent_2 ?>;
    --accent-3: <?= $accent_3 ?>;
    --accent-4: <?= $accent_4 ?>;
    --page-width: <?= $page_width ?>px;
    --base-size-percent: <?= ($base_size / 16) * 100 ?>%;
    --rem: <?= $base_size ?>px;
    --type-scale: <?= $type_scale; ?>;
    <?php if ($type_scale == 'minor-second'): ?>
    --h0: 1.383rem;
    --h1: 1.296rem;
    --h2: 1.215rem;
    --h3: 1.138rem
    --h4: 1.138rem;
    --body: 1rem;
    --h5: 0.937rem;
    --h6: 0.878rem;
    <?php elseif ($type_scale == 'major-second'): ?>
    --h0: 1.802rem;
    --h1: 1.602rem;
    --h2: 1.424rem;
    --h3: 1.266rem
    --h4: 1.125rem;
    --body: 1rem;
    --h5: 0.889rem;
    --h6: 0.79rem;  
    <?php elseif ($type_scale == 'minor-third'): ?>
    --h0: 2.488rem;
    --h1: 2.074rem;
    --h2: 1.728rem;
    --h3: 1.44rem;
    --h4: 1.2rem;
    --body: 1rem;
    --h5: 0.833rem;
    --h6: 0.694rem; 
    <?php elseif ($type_scale == 'major-third'): ?>
    --h0: 3.052rem;
    --h1: 2.441rem;
    --h2: 1.953rem;
    --h3: 1.563rem;
    --h4: 1.25rem;
    --body: 1rem;
    --h5: 0.8rem;
    --h6: 0.64rem;
    <?php elseif ($type_scale == 'perfect-fourth'): ?>
    --h0: 4.209rem;
    --h1: 3.157rem;
    --h2: 2.369rem;
    --h3: 1.777rem;
    --h4: 1.333rem;
    --body: 1rem;
    --h5: 0.75rem;
    --h6: 0.563rem;
    <?php elseif ($type_scale == 'augmented-fourth'): ?>
    --h0: 5.653rem;
    --h1: 3.998rem;
    --h2: 2.827rem;
    --h3: 1.999rem;
    --h4: 1.414rem;
    --body: 1rem;
    --h5: 0.707rem;
    --h6: 0.5rem;
    <?php elseif ($type_scale == 'perfect-fifth'): ?>
    --h0: 7.594rem;
    --h1: 5.063rem;
    --h2: 3.375rem;
    --h3: 2.25rem;
    --h4: 1.5rem;
    --body: 1rem;
    --h5: 0.667rem;
    --h6: 0.444rem;
    <?php elseif ($type_scale == 'golden-ratio'): ?>
    --h0: 11.089rem;
    --h1: 6.854rem;
    --h2: 4.235rem;
    --h3: 2.618rem;
    --h4: 1.618rem;
    --body: 1rem;
    --h5: 0.618rem;
    --h6: 0.382rem;
    <?php elseif ($type_scale == 'custom'): ?>
    --h0: <?= $type_custom->toStructure()->first()->h0()->value() ?>rem;
    --h1: <?= $type_custom->toStructure()->first()->h1()->value() ?>rem;
    --h2: <?= $type_custom->toStructure()->first()->h2()->value() ?>rem;
    --h3: <?= $type_custom->toStructure()->first()->h3()->value() ?>rem;
    --h4: <?= $type_custom->toStructure()->first()->h4()->value() ?>rem;
    --body: <?= $type_custom->toStructure()->first()->body()->value() ?>rem;
    --h5: <?= $type_custom->toStructure()->first()->h5()->value() ?>rem;
    --h6: <?= $type_custom->toStructure()->first()->h6()->value() ?>rem;
    <?php endif; ?>
}
</style>

<?php $typography = 'typography-' . $type_scale; ?>

<!-- STYLESHEETS -->
<?= css('assets/style.css') ?>

</head>

<body class="<?= $typography ?> page page--<?= $page->title()->slug() ?>">
    <div class="fade-container">