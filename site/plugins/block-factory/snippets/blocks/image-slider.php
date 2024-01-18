<?php
$bg = $block->background()->value();
$fg = $block->foreground()->value();
$padding_top = $block->padding_top()->value();
$padding_bottom = $block->padding_bottom()->value();
$wrapper = $block->wrapper()->value();

$slides = $block->slides()->toStructure();

$mobile_ratio = $block->mobile_ratio()->value();
$mobile_pagination = $block->mobile_pagination()->value();
$mobile_navigation = $block->mobile_navigation()->value();
$mobile_slide_count = $block->mobile_slides_per_view()->value();
$mobile_slide_margin = $block->mobile_space_between()->value();

$desktop_ratio = $block->desktop_ratio()->value();
$desktop_pagination = $block->desktop_pagination()->value();
$desktop_navigation = $block->desktop_navigation()->value();
$desktop_slide_count = $block->desktop_slides_per_view()->value();
$desktop_slide_margin = $block->desktop_space_between()->value();

$pagination_type = $block->pagination_style()->value();
?>

<?php if (!empty($slides)) : ?>
<section class="section background--<?= $bg ?> foreground--<?= $fg ?>" style="--padding-top: <?= $padding_top ?>rem; --padding-bottom: <?= $padding_bottom ?>rem;">
  <div class="image-slider wrapper wrapper--<?= $wrapper ?>">
    
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

                        <video muted autoplay loop playsinline poster="<?= $image ? $image->url() : '' ?>">
                            <source src="<?= $video ?>" type="video/mp4">
                        </video>
                
                        <?php else: ?>
                        <?php snippet('responsive-image-loader', ['image' => $image, 'ratio' => 'auto']); ?>
                
                        <?php endif; ?>
                    </div>

                </div>
            <?php endforeach; ?>
            
            </div>
        </div>

        <div class="swiper-pagination" data-mobile-pagination="<?= $mobile_pagination ?>" data-desktop-pagination="<?= $desktop_pagination ?>"></div>

        <div class="swiper-navigation" data-mobile-navigation="<?= $mobile_navigation ?>" data-desktop-navigation="<?= $desktop_navigation ?>">
            <div class="swiper-button-prev" role="navigation"></div>
            <div class="swiper-button-next" role="navigation"></div>
        </div>
        
    </div>
</section>
<?php endif; ?>