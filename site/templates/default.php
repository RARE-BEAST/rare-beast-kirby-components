<?php snippet('header') ?>

<main class="main">
    <h1 class="page-title"><?= $page->title() ?></h1>
    
    <?php foreach ($page->blocks()->toBlocks() as $block): ?>
        <?= $block ?>
    <?php endforeach ?>

</main>

<?php snippet('footer') ?>