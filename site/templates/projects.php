<?php snippet('header') ?>

<main class="main">
    <h1 class="page-title"><?= $page->title() ?></h1>
    
    <ul class="projects">

        <?php foreach ($page->children()->listed() as $project): ?>
            
            <li class="project">
                <a href="<?= $project->url() ?>" class="project__url">
                    <?= $project->title() ?>
                </a>
            </li>
        
        <?php endforeach; ?>

    </ul>

</main>

<?php snippet('footer') ?>