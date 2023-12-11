<?php snippet('header') ?>

<main class="main">
    <h1 class="page-title"><?= $page->title() ?></h1>
    
    <?php foreach ($page->text()->toBlocks() as $block): ?>
        <section id="<?= $block->id() ?>" class="block block-<?= $block->type() ?>">
        <?= $block ?>
        </section>
    <?php endforeach ?>

</main>

<?php snippet('footer') ?>