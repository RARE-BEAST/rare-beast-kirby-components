<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title><?= $site->title() ?></title>
    <?= css('assets/style.css') ?>
</head>


<body>
    <header class="header">
        <a href="<?= $site->url() ?>" class="logo">Great Logo!</a>
        <!-- <?php snippet('menu') ?> -->
    </header>
