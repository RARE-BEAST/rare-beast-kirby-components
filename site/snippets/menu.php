<nav class="menu">
    <ul class="menu__items">

        <?php foreach ($site->children()->listed() as $item): ?>

        <li class="menu__item">
            <a href="<?= $item->url() ?>" class="menu__link"><?= $item->title() ?></a>
        </li>
        
        <?php endforeach; ?>

    </ul>
</nav>