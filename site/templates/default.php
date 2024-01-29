<?php snippet('head') ?>
<?php snippet('header') ?>

<main class="main" id="main">
        
    <?php foreach ($page->blocks()->toBlocks() as $block): ?>
        <?= $block ?>
    <?php endforeach ?>
            
</main>

<?php snippet('footer') ?>