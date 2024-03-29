<?php
$bg = $block->background()->value();
$fg = $block->foreground()->value();
$padding_top = $block->padding_top()->value();
$padding_bottom = $block->padding_bottom()->value();
$wrapper = $block->wrapper()->value();


$image = $block->image()->toFile();
$ratio = $block->ratio()->or('auto')->value();

$video = $block->video_link()->value();
$placeholder = $block->placeholder()->toFile();

$spline = $block->spline_link()->value();

$contents = json_decode($block->content()->content(), true);

$alignment = $block->align_content()->value();
$mobile = $block->layout_mobile()->value();
$desktop = $block->layout_desktop()->value();
$gap = $block->gap()->value();
$media_size = $block->media_width()->value();
?>

<?php if (!empty($contents) && ($image || $video || $spline)) : ?>
<section class="section background--<?= $bg ?> foreground--<?= $fg ?>" style="--padding-top: <?= $padding_top ?>rem; --padding-bottom: <?= $padding_bottom ?>rem;">
  <div class="media-content wrapper wrapper--<?= $wrapper ?> layout-mobile--<?= $mobile ?> layout-desktop--<?= $desktop ?> media--<?= $media_size ?>" style="gap: <?= $gap ?>rem;">
    <div class="media-content__image js-fade-in">

    <?php if ($image) : ?>

    <?php if($image->extension() == 'svg'): ?>
      <div class="svg svg--<?= $ratio ?>">
        <?= $image->read() ?>
      </div>
    <?php else: 
      snippet('responsive-image-loader', ['image' => $image, 'ratio' => $ratio]);
    endif; ?>


    <?php elseif ($video): ?>

      <div class="video <?= 'video--' . $ratio ?>">
          <video muted autoplay loop playsinline poster="<?= $placeholder->url() ?>">
              <source src="<?php echo $video; ?>" type="video/mp4">
          </video>
      </div>

    <?php elseif ($spline) : ?>
      
      <spline-viewer url="<?= $spline ?>" loading="lazy"></spline-viewer>
              
    <?php endif; ?>

    </div>

    <div class="media-content__content align-y--<?= $alignment ?>">
      <div class="content__inner">
        <?php foreach($contents as $content): ?>

            <?php if($content['type'] == 'headline'): ?>
        
                <<?= $content['content']['level'] ?> class="<?= $content['content']['level'] ?> js-fade-in">
                    <?= $content['content']['text'] ?>
                </<?= $content['content']['level'] ?>>
            
            <?php elseif($content['type'] == 'subheadline'): ?>
        
                <<?= $content['content']['level'] ?> class="subheadline h4 js-fade-in">
                    <?= $content['content']['text'] ?>
                </<?= $content['content']['level'] ?>>
            
            <?php elseif($content['type'] == 'copy'): ?>
                <div class="body js-fade-in"><?= $content['content']['text'] ?></div>

            <?php elseif($content['type'] == 'button'): ?>
                <a
                class="btn btn--<?= $content['content']['btn_style'] ?> js-fade-in"
                href="<?= url($content['content']['btn_url']) ?>"
                target="<?= $content['content']['btn_target'] ?>"
                aria-label="<?= $content['content']['btn_aria_label'] ?>">
                    <?= $content['content']['btn_title'] ?>
                </a>

            <?php elseif($content['type'] == 'cta'): ?>
                <a 
                class="cta cta--<?= $content['content']['cta_style'] ?> js-fade-in" 
                href="<?= url($content['content']['cta_url']) ?>"
                target="<?= $content['content']['cta_target'] ?>"
                aria-label="<?= $content['content']['cta_aria_label'] ?>">
                    <?= $content['content']['cta_title'] ?>
                </a>

            <?php endif; ?>
        <?php endforeach; ?>
        </div>
    </div>
  </div>
</section>
<?php endif; ?>