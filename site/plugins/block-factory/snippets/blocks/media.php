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

$video = $block->video_link()->value();
$placeholder = $block->placeholder()->toFile();

?>

<section class="section background--<?= $bg ?> foreground--<?= $fg ?>" style="--padding-top: <?= $padding_top ?>rem; --padding-bottom: <?= $padding_bottom ?>rem;">
  <div class="media wrapper wrapper--<?= $wrapper ?> align-x--<?= $alignment ?>">
    <div class="media__inner"<?= $has_max_width ? ' style="--max-width: ' . $max_width . 'rem;"' : '' ?>>

      <?php if ($image) :

        snippet('responsive-image-loader', ['image' => $image, 'ratio' => $ratio]);
      
      elseif ($video): 
        $video_crop = 'video--' . $ratio;
      ?>
        <div class="video <?= $video_crop ?>">
            <video class="js-video" muted autoplay loop playsinline poster="<?= $placeholder->url() ?>">
                <source src="<?php echo $video; ?>" type="video/mp4">
            </video>
        </div>
                
      <?php endif; ?>

    </div>
  </div>
</section>