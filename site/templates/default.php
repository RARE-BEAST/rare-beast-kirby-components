<?php snippet('header') ?>

<main class="main">
    <h1 class="page-title"><?= $page->title() ?></h1>
    
    <?php foreach ($page->blocks()->toBlocks() as $block): ?>
        <!-- <section class="<?= $block->type() ?> section" id="<?= $block->id() ?>"> -->
        <?= $block ?>
        <!-- </section> -->
    <?php endforeach ?>

</main>

<?php snippet('footer') ?>