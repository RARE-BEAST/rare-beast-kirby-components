<?php

Kirby::plugin('rare-beast/block-factory', [
    'blueprints' => [
        'blocks/accordions' => __DIR__ . '/blueprints/blocks/accordions.yml',
        'blocks/audio' => __DIR__ . '/blueprints/blocks/audio.yml',
        'blocks/button' => __DIR__ . '/blueprints/blocks/button.yml',
        'blocks/column-content' => __DIR__ . '/blueprints/blocks/column-content.yml',
        'blocks/content' => __DIR__ . '/blueprints/blocks/content.yml',
        'blocks/copy' => __DIR__ . '/blueprints/blocks/copy.yml',
        'blocks/cta' => __DIR__ . '/blueprints/blocks/cta.yml',
        'blocks/form' => __DIR__ . '/blueprints/blocks/form.yml',
        'blocks/headline' => __DIR__ . '/blueprints/blocks/headline.yml',
        'blocks/hero' => __DIR__ . '/blueprints/blocks/hero.yml',
        'blocks/image-slider' => __DIR__ . '/blueprints/blocks/image-slider.yml',
        'blocks/marquee' => __DIR__ . '/blueprints/blocks/marquee.yml',
        'blocks/media' => __DIR__ . '/blueprints/blocks/media.yml',
        'blocks/media-content' => __DIR__ . '/blueprints/blocks/media-content.yml',
        'blocks/split-media' => __DIR__ . '/blueprints/blocks/split-media.yml',
        'blocks/subheadline' => __DIR__ . '/blueprints/blocks/subheadline.yml',
    ],
    'snippets' => [
        'blocks/accordions' => __DIR__ . '/snippets/blocks/accordions.php',
        'blocks/audio' => __DIR__ . '/snippets/blocks/audio.php',
        'blocks/column-content' => __DIR__ . '/snippets/blocks/column-content.php',
        'blocks/content' => __DIR__ . '/snippets/blocks/content.php',
        'blocks/form' => __DIR__ . '/snippets/blocks/form.php',
        'blocks/hero' => __DIR__ . '/snippets/blocks/hero.php',
        'blocks/image-slider' => __DIR__ . '/snippets/blocks/image-slider.php',
        'blocks/marquee' => __DIR__ . '/snippets/blocks/marquee.php',
        'blocks/media' => __DIR__ . '/snippets/blocks/media.php',
        'blocks/media-content' => __DIR__ . '/snippets/blocks/media-content.php',
        'blocks/split-media' => __DIR__ . '/snippets/blocks/split-media.php',
    ],
    'translations' => [
        'en' => [
            'field.blocks.accordions' => 'Accordions',
            'field.blocks.audio' => 'Audio',
            'field.blocks.button' => 'Button',
            'field.blocks.column-content' => 'Column Content',
            'field.blocks.content' => 'Content',
            'field.blocks.copy' => 'Copy',
            'field.blocks.cta' => 'Call to Action',
            'field.blocks.form' => 'Form',
            'field.blocks.headline' => 'Headline',
            'field.blocks.hero' => 'Hero',
            'field.blocks.image-slider' => 'Image Slider',
            'field.blocks.marquee' => 'Marquee',
            'field.blocks.media' => 'Media',
            'field.blocks.media-content' => 'Media and Content',
            'field.blocks.split-media' => 'Split Media',
            'field.blocks.subheadline' => 'Subheadline',
        ]
    ],
    'fieldMethods' => [
        // 'desktopRatioOptions' => function ($field) {
        //     if ($field->parent()->video_url()->isNotEmpty()) {
        //         return [
        //             'square' => 'Square (1:1)',
        //             'portrait' => 'Portrait (5:7)',
        //             'landscape' => 'Landscape (16:9)',
        //         ];
        //     } else {
        //         return [
        //             'unset' => 'Auto',
        //             'square' => 'Square (1:1)',
        //             'portrait' => 'Portrait (5:7)',
        //             'landscape' => 'Landscape (16:9)',
        //         ];
        //     }
        // }
    ]
])

?>