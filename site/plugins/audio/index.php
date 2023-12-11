<?php

Kirby::plugin('rarebeast/audio', [
    'blueprints' => [
        'blocks/audio' => __DIR__ . '/blueprints/blocks/audio.yml',
        'files/audio'  => __DIR__ . '/blueprints/files/audio.yml',
        'files/poster' => __DIR__ . '/blueprints/files/poster.yml',
    ],
    'snippets' => [
        'blocks/audio' => __DIR__ . '/snippets/blocks/audio.php',
    ],
]);

?>