<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $site->title() ?></title>
    <?= css('assets/style.css') ?>
</head>


<body>
    <header class="header">
        <a href="<?= $site->url() ?>" class="logo">Great Logo!</a>
        <?php snippet('menu') ?>
    </header>
