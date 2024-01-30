<?php 
$bg = $block->background()->value();
$fg = $block->foreground()->value();
$padding_top = $block->padding_top()->value();
$padding_bottom = $block->padding_bottom()->value();
$wrapper = $block->wrapper()->value();

$accordions = $block->content()->get('accordions');
?>

<?php if (!empty($accordions)) : ?>

<section class="section background--<?= $bg ?> foreground--<?= $fg ?>" style="--padding-top: <?= $padding_top ?>rem; --padding-bottom: <?= $padding_bottom ?>rem;">
    <div class="accordions wrapper wrapper--<?= $wrapper; ?> js-fade-in">

      <div class="accordions__content">
      <?php foreach ($accordions->value() as $accordion) : ?>
          <div class="js-accordion accordion">
              <div class="accordion__title js-accordion-trigger">
                  <h3 class="h3"><?= $accordion['title'] ?></h3>
                  <div class="accordion__trigger js-accordion-icon">
                      <span></span>
                      <span></span>
                  </div>
              </div>
              <div class="accordion__content js-accordion-content">
                <div class="accordion__content--inner">
                    <?= $accordion['content'] ?>
                </div>
              </div>
          </div>
      <?php endforeach; ?>
      </div>
      
  </div>
</section>

<?php endif; ?>