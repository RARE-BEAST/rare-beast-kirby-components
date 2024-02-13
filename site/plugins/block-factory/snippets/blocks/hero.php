<?php 
$fg = $block->foreground()->value();
$height = $block->height()->value();
$alignment = $block->align_content()->value();

$contents = json_decode($block->content()->content(), true);
$slides = $block->slides()->toStructure();

$justify_content = $block->justify_content()->value();
$text_align = $block->text_align()->value();
$align_y = $block->align_y()->value();
$max_width = $block->max_width()->value();
$content_padding = $block->content_padding()->value();
$content_background = $block->content_background()->value();

$include_overlay = $block->include_overlay()->toBool();
$image_overlay = $block->image_overlay()->value();

$mobile_pagination = $block->mobile_pagination()->value();
$mobile_navigation = $block->mobile_navigation()->value();
$mobile_slide_count = $block->mobile_slides_per_view()->value();
$mobile_slide_margin = $block->mobile_space_between()->value();

$desktop_pagination = $block->desktop_pagination()->value();
$desktop_navigation = $block->desktop_navigation()->value();
$desktop_slide_count = $block->desktop_slides_per_view()->value();
$desktop_slide_margin = $block->desktop_space_between()->value();

$pagination_type = $block->pagination_style()->value();
$autoplay = $block->autoplay()->value();
$slide_interval = $block->slide_interval()->value();
?>

<?php if ($contents || $slides) : ?>
<section class="section hero foreground--<?= $fg ?> height--<?= $height ?>" style="--justify-content: <?= $justify_content ?>;">
    <div class="hero__background">

    <?php if (count($slides) < 2): foreach ($slides as $slide) :
        $image = $slide->image()->toFile();
        $video = $slide->video_link()->value();
    ?>

    <?php if ($include_overlay) : ?>
    <div class="hero__background--overlay" style="--background-color: <?= $image_overlay ?>;"></div>
    <?php endif; ?>

    <?php if ($video): ?>
        <video class="video js-video" muted autoplay loop playsinline poster="<?= $image ? $image->url() : '' ?>">
            <source src="<?= $video ?>" type="video/mp4">
        </video>
    <?php endif; ?>

    <?php if ($image): ?>
        <?php snippet('responsive-image-loader', ['image' => $image, 'ratio' => 'auto', 'lazyLoading' => false]); ?>
    <?php endif; ?>

    <?php endforeach; endif; ?>

    <?php if (count($slides) > 1): ?>
    
    <div class="swiper js-image-slider"
        data-mobile-slide-margin="<?= $mobile_slide_margin ?>" 
        data-mobile-slides-per-view="<?= $mobile_slide_count ?>" 
        data-desktop-slide-margin="<?= $desktop_slide_margin ?>" 
        data-desktop-slides-per-view="<?= $desktop_slide_count ?>"
        data-pagination-type="<?= $pagination_type ?>"
        data-autoplay="<?= $autoplay ?>"
        data-slide-interval="<?= $slide_interval ?>"
    >
        <div class="swiper-wrapper">

        <?php foreach ($slides as $slide) :
            $image = $slide->image()->toFile();
            $video = $slide->video_link()->value();
        ?>

            <div class="swiper-slide">

                <div class="image">
                    <?php if ($video): ?>

                    <video class="video js-video" muted autoplay loop playsinline poster="<?= $image ? $image->url() : '' ?>">
                        <source src="<?= $video ?>" type="video/mp4">
                    </video>
            
                    <?php else: ?>
                    <?php snippet('responsive-image-loader', ['image' => $image, 'ratio' => 'auto', 'lazyLoading' => false]); ?>
            
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; ?>
        
        </div>
    </div>

    <?php if ($include_overlay) : ?>
    <div class="hero__background--overlay" style="--background-color: <?= $image_overlay ?>;"></div>
    <?php endif; ?>

    <div class="swiper-pagination" data-mobile-pagination="<?= $mobile_pagination ?>" data-desktop-pagination="<?= $desktop_pagination ?>"></div>

    <div class="swiper-navigation" data-mobile-navigation="<?= $mobile_navigation ?>" data-desktop-navigation="<?= $desktop_navigation ?>">
        <div class="swiper-button-prev" role="navigation"></div>
        <div class="swiper-button-next" role="navigation"></div>
    </div>
    <?php endif; ?>

    </div>

    <?php if ($contents) : ?>

    <div class="hero__content align-y--<?= $align_y ?>" style="--max-width: <?= $max_width ?>rem; --background-color: <?= $content_background ?>; --padding: <?= $content_padding ?>rem; --text-align: <?= $text_align ?>;">
        <div class="hero__content--inner">
        
            <?php foreach($contents as $content): ?>
                <?php if($content['type'] == 'headline'): ?>
            
                    <<?= $content['content']['level'] ?> class="hero__content--headline">
                        <?= $content['content']['text'] ?>
                    </<?= $content['content']['level'] ?>>
                
                <?php elseif($content['type'] == 'subheadline'): ?>
            
                    <span class="subheadline h4 hero__content--subheadline">
                        <?= $content['content']['text'] ?>
                    </span>
                
                <?php elseif($content['type'] == 'copy'): ?>
                    <p class="copy hero__content--copy"><?= $content['content']['text'] ?></p>
    
                <?php elseif($content['type'] == 'button'): ?>
                    <a
                    class="btn btn--<?= $content['content']['btn_style'] ?> hero__content--btn"
                    href="<?= $content['content']['btn_url'] ?>"
                    target="<?= $content['content']['btn_target'] ?>"
                    aria-label="<?= $content['content']['btn_aria_label'] ?>">
                        <?= $content['content']['btn_title'] ?>
                    </a>
    
                <?php elseif($content['type'] == 'cta'): ?>
                    <a 
                    class="cta cta--<?= $content['content']['cta_style'] ?> hero__content--cta" 
                    href="<?= $content['content']['cta_url'] ?>"
                    target="<?= $content['content']['cta_target'] ?>"
                    aria-label="<?= $content['content']['cta_aria_label'] ?>">
                        <?= $content['content']['cta_title'] ?>
                    </a>

                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
    
    <?php endif; ?>
</section>
<?php endif; ?>