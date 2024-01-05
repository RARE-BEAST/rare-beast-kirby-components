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
$ratio = $block->ratio()->or('auto')->value();

?>

<section class="section background--<?= $bg ?> foreground--<?= $fg ?>" style="--padding-top: <?= $padding_top ?>rem; --padding-bottom: <?= $padding_bottom ?>rem;">
  <div class="single-image wrapper wrapper--<?= $wrapper ?> align-y--<?= $alignment ?>">
    <div class="single-image__inner"<?= $has_max_width ? ' style="--max-width: ' . $max_width . 'rem;"' : '' ?>>

      <?php if ($image) :
        snippet('responsive-image-loader', ['image' => $image, 'ratio' => $ratio]);
      endif; ?>

    </div>
  </div>
</section>