<?php 
$accordions = $block->content()->get('accordions');
$bg = "background";
$fg = "foreground";
$padding_top = "padding-top";
$padding_bottom = "padding-bottom";
$wrapper = "wrapper";
?>

<?php if (!empty($accordions)) : ?>

<section class="section background--<?php echo $bg; ?> foreground--<?php echo $fg; ?>" style="--padding-top: <?php echo $padding_top; ?>rem; --padding-bottom: <?php echo $padding_bottom; ?>rem;">
    <div class="accordions wrapper wrapper--<?php echo $wrapper; ?>">

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
                  <?= $accordion['content'] ?>
              </div>
          </div>
      <?php endforeach; ?>
      </div>
      
  </div>
</section>

<?php endif; ?>