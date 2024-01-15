<?php 
$fg = $block->foreground()->value();
$height = $block->height()->value();
$alignment = $block->align_content()->value();

$contents = json_decode($block->content()->content(), true);
$image = $block->image()->toFile();
$video = $block->video_link()->value();

$align_x = $block->align_x()->value();
$align_y = $block->align_y()->value();
?>

<section class="section hero foreground--<?= $fg ?> height--<?= $height ?>">
    
    <div class="hero__background">
    <?php if ($video): ?>
        <video class="video js-video" muted autoplay loop playsinline poster="<?= $image ? $image->url() : '' ?>">
            <source src="<?= $video ?>" type="video/mp4">
        </video>
    <?php endif; ?>

    <?php if ($image): ?>
        <?php snippet('responsive-image-loader', ['image' => $image, 'ratio' => 'auto', 'lazyLoading' => false]); ?>
    <?php endif; ?>

    </div>

    <?php if ($contents) : ?>

    <div class="hero__content align-x--<?= $align_x ?> align-y--<?= $align_y ?>">
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
                    target="<?= $content['content']['btn_target'] ?>">
                        <?= $content['content']['btn_title'] ?>
                    </a>
    
                <?php elseif($content['type'] == 'cta'): ?>
                    <a 
                    class="cta cta--<?= $content['content']['cta_style'] ?> hero__content--cta" 
                    href="<?= $content['content']['cta_url'] ?>"
                    target="<?= $content['content']['cta_target'] ?>">
                        <?= $content['content']['cta_title'] ?>
                    </a>

                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
    
    <?php endif; ?>
</section>