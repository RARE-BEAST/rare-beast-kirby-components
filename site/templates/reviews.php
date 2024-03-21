<?php snippet('head') ?>
<?php snippet('header') ?>

<div id="smooth-wrapper">
    <div id="smooth-content">

        <main class="main" id="main">
                
            <ul>

            <?php foreach ($page->children() as $review): ?>

                <li>
                    <h2><?= $review->title() ?></h2>
                    <a href="<?= $review->url() ?>">Read review summary</a>
                </li>

            <?php endforeach ?>

            </ul>
                    
        </main>

<?php snippet('footer') ?>