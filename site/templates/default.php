<?php snippet('header') ?>

<main class="main">
    <div id="lenis-smooth-scroll">
        
    <?php foreach ($page->blocks()->toBlocks() as $block): ?>
        <?= $block ?>
    <?php endforeach ?>
            
    </div>
</main>

<?php snippet('footer') ?>