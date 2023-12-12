<?php

Kirby::plugin('rare-beast/block-factory', [
    'blueprints' => [
        'blocks/accordions' => __DIR__ . '/blueprints/blocks/accordions.yml',
        'blocks/audio' => __DIR__ . '/blueprints/blocks/audio.yml',
        'blocks/column-content' => __DIR__ . '/blueprints/blocks/column-content.yml',
        'blocks/content' => __DIR__ . '/blueprints/blocks/content.yml',
        'blocks/form' => __DIR__ . '/blueprints/blocks/form.yml',
        'blocks/hero' => __DIR__ . '/blueprints/blocks/hero.yml',
        'blocks/marquee' => __DIR__ . '/blueprints/blocks/marquee.yml',
        'blocks/media' => __DIR__ . '/blueprints/blocks/media.yml',
        'blocks/media-content' => __DIR__ . '/blueprints/blocks/media-content.yml',
        'blocks/media-slider' => __DIR__ . '/blueprints/blocks/media-slider.yml',
        'blocks/split-media' => __DIR__ . '/blueprints/blocks/split-media.yml',
    ],
    'snippets' => [
        'blocks/accordions' => __DIR__ . '/snippets/blocks/accordions.php',
        'blocks/audio' => __DIR__ . '/snippets/blocks/audio.php',
        'blocks/column-content' => __DIR__ . '/snippets/blocks/column-content.php',
        'blocks/content' => __DIR__ . '/snippets/blocks/content.php',
        'blocks/form' => __DIR__ . '/snippets/blocks/form.php',
        'blocks/hero' => __DIR__ . '/snippets/blocks/hero.php',
        'blocks/marquee' => __DIR__ . '/snippets/blocks/marquee.php',
        'blocks/media' => __DIR__ . '/snippets/blocks/media.php',
        'blocks/media-content' => __DIR__ . '/snippets/blocks/media-content.php',
        'blocks/media-slider' => __DIR__ . '/snippets/blocks/media-slider.php',
        'blocks/split-media' => __DIR__ . '/snippets/blocks/split-media.php',
    ],
    'translations' => [
        'en' => [
            'field.blocks.accordions' => 'Accordions',
            'field.blocks.audio' => 'Audio',
            'field.blocks.column-content' => 'Column Content',
            'field.blocks.content' => 'Content',
            'field.blocks.form' => 'Form',
            'field.blocks.hero' => 'Hero',
            'field.blocks.marquee' => 'Marquee',
            'field.blocks.media' => 'Media',
            'field.blocks.media-content' => 'Media and Content',
            'field.blocks.media-slider' => 'Media Slider',
            'field.blocks.split-media' => 'Split Media',
        ]
    ]
])

?>