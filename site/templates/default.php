<?php snippet('head') ?>
<?php snippet('header') ?>

<div id="smooth-wrapper">
    <div id="smooth-content">

        <main class="main" id="main">
                
            <?php foreach ($page->blocks()->toBlocks() as $block): ?>
                <?= $block ?>
            <?php endforeach ?>
                    
        </main>

<?php snippet('footer') ?>