<?php
// Ensure $image and $ratio are set, with 'auto' as the default ratio
$image = $image ?? null;
$ratio = $ratio ?? 'auto';
$lazyLoading = $lazyLoading ?? true;

// Fetch the srcsets configuration
$srcsets = kirby()->option('thumbs.srcsets');

// Initialize the srcset attribute
$srcsetAttribute = '';

// Generate the srcset attribute based on the srcsets configuration
foreach ($srcsets[$ratio] as $srcset => $options) {
    $width = $options['width'];
    $srcsetAttribute .= (isset($options['height']) 
        ? $image->crop($width, $options['height']) 
        : $image->resize($width)
    )->url() . ' ' . $srcset . ', ';
}

// Remove trailing comma and space from the srcset attribute
$srcsetAttribute = rtrim($srcsetAttribute, ', ');

?>

<img
    alt="<?= $image->alt() ?>"
    src="<?= $image->url() ?>"
    srcset="<?= $srcsetAttribute ?>"
    sizes="(min-width: 1920px) 1920px,
            (min-width: 1800px) 1800px,
            (min-width: 1200px) 25vw,
            (min-width: 900px) 33vw,
            (min-width: 600px) 50vw,
            100vw"
    width="<?= $image->width() ?>"
    height="<?= $image->height() ?>"
    <?php if ($lazyLoading) echo 'loading="lazy"'; ?>
>