<?php
$bg = $block->background()->value();
$fg = $block->foreground()->value();
$padding_top = $block->padding_top()->value();
$padding_bottom = $block->padding_bottom()->value();

$wrapper = $block->wrapper()->value();
$has_max_width = $block->include_max_width()->toBool();
$max_width = $block->max_width()->value();
$alignment = $block->alignment()->value();

$image = $block->image()->toFile();

if (!$image) {
  return;
}

$ratio = $block->ratio()->or('auto')->value();

// Get the srcsets from the config file
$srcsets = kirby()->option('thumbs.srcsets');

// Generate the srcset attribute
$srcsetAttribute = '';
foreach ($srcsets[$ratio] as $srcset => $options) {
    $width = $options['width'];
    $height = $options['height'] ?? null;

    if (isset($options['height'])) {
        $srcsetAttribute .= $image->crop($width, $height)->url() . ' ' . $srcset . ', ';
    } else {
        $srcsetAttribute .= $image->resize($width)->url() . ' ' . $srcset . ', ';
    }
}
$srcsetAttribute = rtrim($srcsetAttribute, ', ');
?>

<section class="section background--<?= $bg ?> foreground--<?= $fg ?>" style="--padding-top: <?= $padding_top ?>rem; --padding-bottom: <?= $padding_bottom ?>rem;">
  <div class="single-image wrapper wrapper--<?= $wrapper ?> align-y--<?= $alignment ?>">
    <div class="single-image__inner"<?= $has_max_width ? ' style="--max-width: ' . $max_width . 'rem;"' : '' ?>>

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
        loading="lazy"
      >

    </div>
  </div>
</section>