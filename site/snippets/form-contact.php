<?php
// NOTE: This snippet is in communication with the CONTACT CONTROLLER,
// which is located at site/controllers/contact.php. Go there to edit
// form configuration, error messages, and email settings.
?>

<button class="js-contact-open">Contact</button>

<!-- 1. The dialog container -->
<div id="js-contact" class="contact__modal--container" aria-labelledby="contact-us" aria-hidden="true">

    <!-- 2. The dialog overlay -->
    <div class="contact__modal--overlay" data-a11y-dialog-hide></div>

    <!-- 3. The actual dialog -->
    <div class="contact__modal--dialog" role="document">

        <!-- 4. The close button -->
        <button class="js-contact-close modal__close" type="button" data-a11y-dialog-hide aria-label="Close"></button>

        <!-- 5. The dialog title -->
        <!-- <h1 id="contact-dialog-title">Contact</h1> -->

        <!-- 6. Dialog content -->
        <?php if($success): ?>
            <div class="alert success">
                <p><?= $success ?></p>
            </div>
        <?php else: ?>
            
            <!-- Your form goes here -->
            <?php if (isset($alert['error'])): ?>
                <div><?= $alert['error'] ?></div>
            <?php endif ?>
            
            <form method="post" action="<?= $page->url() ?>">
                <div class="honeypot">
                    <label for="website">Website <abbr title="required">*</abbr></label>
                    <input type="url" id="website" name="website" tabindex="-1">
                </div>
                <div class="field">
                    <label for="name">
                        Name <abbr title="required">*</abbr>
                    </label>
                    <input type="text" id="name" name="name" value="<?= esc($data['name'] ?? '', 'attr') ?>" required>
                    <?= isset($alert['name']) ? '<span class="alert error">' . esc($alert['name']) . '</span>' : '' ?>
                </div>
                <div class="field">
                    <label for="email">
                        Email <abbr title="required">*</abbr>
                    </label>
                    <input type="email" id="email" name="email" value="<?= esc($data['email'] ?? '', 'attr') ?>" required>
                    <?= isset($alert['email']) ? '<span class="alert error">' . esc($alert['email']) . '</span>' : '' ?>
                </div>
                <div class="field">
                    <label for="text">
                        Text <abbr title="required">*</abbr>
                    </label>
                    <textarea id="text" name="text" required>
                        <?= esc($data['text'] ?? '') ?>
                    </textarea>
                    <?= isset($alert['text']) ? '<span class="alert error">' . esc($alert['text']) . '</span>' : '' ?>
                </div>
                <input type="submit" name="submit" value="Submit">
            </form>
        <?php endif ?>
    </div>
</div>
    