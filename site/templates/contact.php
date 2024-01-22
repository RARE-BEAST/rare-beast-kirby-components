<?php snippet('header') ?>
<main class="main" id="main">

    <?php foreach ($page->blocks()->toBlocks() as $block): ?>
        <?= $block ?>
    <?php endforeach ?>
    
    <?php snippet('form-contact'); ?>

</main>

<?php snippet('footer') ?>