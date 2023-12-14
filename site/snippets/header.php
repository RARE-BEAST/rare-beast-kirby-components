<!DOCTYPE html>
<html lang="en">
<head>
    
<meta charset="UTF-8">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="mobile-web-app-capable" content="yes">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">


<!-- PAGE-LEVEL TITLE & META DESCRIPTION -->
<title><?= $page->seo_title()->html() ?></title>
<meta name="description" content="<?= $page->meta_description()->html() ?>">


<!-- PAGE-LEVEL SEO: NOINDEX & NOFOLLOW  -->
<?php if ($page->noindex()->toBool() === true) : ?>
<meta name="robots" content="noindex">
<meta name="googlebot" content="noindex">
<?php endif; ?>

<?php if ($page->nofollow()->toBool() === true) : ?>
<meta name="robots" content="nofollow">
<?php endif; ?>


<!-- GLOBAL TYPOGRAPHY SETTINGS -->
<?php
$page_width = site()->page_width()->value();
$base_size = site()->base_size()->value();
$type_scale = site()->type_scale()->value();
if ($type_scale == 'custom'):
$type_custom = site()->type_custom();
endif;
?>

<style>
:root {
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

<body class="<?= $typography ?>">
    <header class="header">
        <a href="<?= $site->url() ?>" class="logo">Great Logo!</a>
        <!-- <?php snippet('menu') ?> -->
    </header>