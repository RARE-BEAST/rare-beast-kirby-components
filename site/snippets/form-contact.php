<?php
// NOTE: This snippet is in communication with the CONTACT CONTROLLER,
// which is located at site/controllers/contact.php. Go there to edit
// form configuration, error messages, and email settings.
?>

<button class="js-contact-open">Contact</button>

<!-- Form Dialog Container -->
<div id="js-contact" class="contact__modal--container" aria-labelledby="contact-us" aria-hidden="true">

    <!-- Form Dialog Overlay -->
    <div class="contact__modal--overlay" data-a11y-dialog-hide></div>

    <!-- The Actual Dialog Modal -->
    <div class="contact__modal--dialog" role="document">

        <!-- The Close Button Inside the Modal -->
        <button class="js-contact-close modal__close" type="button" data-a11y-dialog-hide aria-label="Close"></button>

        <!-- Form Intro Text -->
        <h1 class="contact__modal--headline">Contact Us</h1>
        <span class="contact__modal--subheadline">For commissions, appointments, questions, or information, please fill out this brief form.</span>

        <!-- Success Message (appears after submission, in place of form) -->
        <?php if($success): ?>
            <div class="alert success">
                <p><?= $success ?></p>
            </div>
        <?php else: ?>

            <!-- CONTACT FORM -->
            <?php if (isset($alert['error'])): ?>
                <div><?= $alert['error'] ?></div>
            <?php endif ?>
            
            <form class="contact-form" method="post" action="<?= $page->url() ?>">
                <div class="field--honeypot">
                    <label for="website">Website <abbr title="required">*</abbr></label>
                    <input type="url" id="website" name="website" tabindex="-1">
                </div>
                <div class="field field--name">
                    <label for="name">
                        Name <abbr title="required">*</abbr>
                    </label>
                    <input type="text" id="name" name="name" value="<?= esc($data['name'] ?? '', 'attr') ?>" required>
                    <?= isset($alert['name']) ? '<span class="alert error">' . esc($alert['name']) . '</span>' : '' ?>
                </div>
                <div class="field field--email">
                    <label for="email">
                        Email <abbr title="required">*</abbr>
                    </label>
                    <input type="email" id="email" name="email" value="<?= esc($data['email'] ?? '', 'attr') ?>" required>
                    <?= isset($alert['email']) ? '<span class="alert error">' . esc($alert['email']) . '</span>' : '' ?>
                </div>
                <div class="field field--message">
                    <label for="message">
                        Message <abbr title="required">*</abbr>
                    </label>
                    <textarea id="message" name="message" required>
                        <?= esc($data['message'] ?? '') ?>
                    </textarea>
                    <?= isset($alert['message']) ? '<span class="alert error">' . esc($alert['message']) . '</span>' : '' ?>
                </div>
                <input type="submit" name="submit" value="Submit" class="btn--input">
            </form>
        <?php endif ?>

        <span class="contact__modal--footnote">*We know forms can be annoying, but we're tired of bots scraping our information.</span>

    </div>
</div>