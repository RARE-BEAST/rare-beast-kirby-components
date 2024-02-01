<?php
$company_name = $site->company_name()->value();
$address_line_1 = $site->address_line_1()->value();
$address_line_2 = $site->address_line_2()->value();
$city = $site->city()->value();
$state = $site->state()->value();
$zip = $site->zip()->value();
$email = $site->email();
$phone = $site->phone();
$fax = $site->fax();

$instagram = $site->instagram()->url();
$facebook = $site->facebook()->url();
$twitter = $site->twitter()->url();
$linkedin = $site->linkedin()->url();
$tiktok = $site->tiktok()->url();
$arena = $site->are_na()->url();
$youtube = $site->youtube()->url();
$vimeo = $site->vimeo()->url();
$pinterest = $site->pinterest()->url();
$reddit = $site->reddit()->url();
?>

<footer class="footer">
    <div class="footer__content">
        <div class="footer__column">
            <h4 class="footer__column--title">Company</h4>
            <ul class="footer__column--list">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Privacy Policy</a></li>
            </ul>
        </div>
        <div class="footer__column">
            <h4 class="footer__column--title">Support</h4>
            <ul class="footer__column--list">
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">FAQs</a></li>
            </ul>
        </div>
        <div class="footer__column">
            <h4 class="footer__column--title">Follow Us</h4>
            <ul class="footer__column--list">
                <li><a href="<?= $facebook ?>">Facebook</a></li>
                <li><a href="<?= $twitter ?>">Twitter</a></li>
                <li><a href="<?= $instagram ?>">Instagram</a></li>
            </ul>
        </div>
    </div>
    <div class="footer__credits">
        Site by RARE BEAST, <?= date('Y') ?>.
    </div>
</footer>
<script src="https://unpkg.com/@studio-freight/lenis@1.0.34/dist/lenis.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script type="module" src="https://unpkg.com/@splinetool/viewer/build/spline-viewer.js"></script>
<script src="https://cdn.jsdelivr.net/npm/a11y-dialog@8/dist/a11y-dialog.min.js"></script>
<?= js('assets/js/main-min.js') ?>
</body>
</html>