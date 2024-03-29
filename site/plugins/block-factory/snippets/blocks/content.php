<?php 
$bg = $block->background()->value();
$fg = $block->foreground()->value();
$padding_top = $block->padding_top()->value();
$padding_bottom = $block->padding_bottom()->value();

$wrapper = $block->wrapper()->value();
$max_width = $block->max_width()->value();
$alignment = $block->align_content()->value();

$contents = json_decode($block->content()->content(), true);
?>

<?php if (!empty($contents)) : ?>
<section class="section background--<?= $bg ?> foreground--<?= $fg ?>" style="--padding-top: <?= $padding_top ?>rem; --padding-bottom: <?= $padding_bottom ?>rem; --max-width: <?= $max_width ?>rem;">
  <div class="content wrapper wrapper--<?= $wrapper ?> align-x--<?= $alignment ?>">
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
                <div class="body js-fade-in"><?= ($content['content']['text']) ?></div>

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
</section>
<?php endif; ?>