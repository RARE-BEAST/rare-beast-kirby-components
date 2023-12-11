<?php if($block->summary()->isNotEmpty()): ?>
    
    <details class="accordion-details">
        <summary class="accordion-summary">
            <?= $block->summary() ?>
        </summary>
        <div class="accordion-text">
            <?= $block->details() ?>
        </div>
    </details>

<?php endif; ?>