<?php
$bg = $block->background()->value();
$fg = $block->foreground()->value();
$padding_top = $block->padding_top()->value();
$padding_bottom = $block->padding_bottom()->value();
$wrapper = $block->wrapper()->value();

$slides = $block->slides()->toStructure();

$mobile_ratio = $block->mobile_ratio()->value();
$mobile_pagination = $block->mobile_pagination()->toBool();
$mobile_navigation = $block->mobile_navigation()->toBool();
$mobile_slide_count = $block->mobile_slides_per_view()->value();
$mobile_slide_margin = $block->mobile_space_between()->value();

$desktop_ratio = $block->desktop_ratio()->value();
$desktop_pagination = $block->desktop_pagination()->toBool();
$desktop_navigation = $block->desktop_navigation()->toBool();
$desktop_slide_count = $block->desktop_slides_per_view()->value();
$desktop_slide_margin = $block->desktop_space_between()->value();

$pagination_type = $block->pagination_style()->value();
?>

<section class="section background--<?= $bg ?> foreground--<?= $fg ?>" style="--padding-top: <?= $padding_top ?>rem; --padding-bottom: <?= $padding_bottom ?>rem;">
  <div class="image-slider wrapper wrapper--<?= $wrapper ?>">
    
  <?php if ($slides) : ?>
        <div class="swiper js-image-slider"
        data-mobile-slide-margin="<?= $mobile_slide_margin ?>" 
        data-mobile-slides-per-view="<?= $mobile_slide_count ?>" 
        data-desktop-slide-margin="<?= $desktop_slide_margin ?>" 
        data-desktop-slides-per-view="<?= $desktop_slide_count ?>"
        data-pagination-type="<?= $pagination_type ?>"
        >
            <div class="swiper-wrapper">

            <?php foreach ($slides as $slide) :
                $image = $slide->image()->toFile();
                $video = $slide->video_link()->value();
            ?>
                <div class="swiper-slide">
                    <div class="image image__mobile--<?= $mobile_ratio ?> image__desktop--<?= $desktop_ratio ?>">
                        <?php if ($video): ?>

                        <video class="video" poster="<?= $image ? $image->url() : '' ?>" controls>
                            <source src="<?= $video ?>" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                
                        <?php else: ?>
                        <?php snippet('responsive-image-loader', ['image' => $image, 'ratio' => 'auto']); ?>
                
                        <?php endif; ?>
                    </div>

                </div>
            <?php endforeach; ?>
            </div>
        </div>

        <?php if ($mobile_pagination || $desktop_pagination) : ?>
        <div class="swiper-pagination"></div>
        <?php endif; ?>

        <?php if ($mobile_navigation || $desktop_navigation) : ?>
        <div class="swiper-navigation">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
        <?php endif; ?>
    <?php endif; ?>

    
  </div>
</section>