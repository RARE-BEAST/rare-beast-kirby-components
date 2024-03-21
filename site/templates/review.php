<?php snippet('head') ?>
<?php snippet('header') ?>

<div id="smooth-wrapper">
    <div id="smooth-content">

        <main>
            <article class="review">
            <header>
                <h1><?= $page->title() ?></h1>
                <time>Published <?= $page->date()->toDate('d F Y') ?></time>
            </header>
        
            <h2><?= $page->title() ?></h2>
            <?= $page->summary() ?>
        
            <?php if ($page->cover()->isNotEmpty()): ?>
            <img src="<?= $page->cover() ?>" alt="">
            <?php endif ?>
            </article>
        </main>

<?php snippet('footer') ?>