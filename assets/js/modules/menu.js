export function initMenu() {

	// Hide header on scroll down
    var menuOpen = false;
    var didScroll;
    var lastScrollTop = 0;
    var delta = 50;
    var navbarHeight = $('.header').outerHeight();

    $(window).scroll(function(event) {
        didScroll = true;
    });

    setInterval(function() {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 10);

    function hasScrolled(event) {

        var st = $(window).scrollTop();

        // Make scroll more than delta
        if (Math.abs(lastScrollTop - st) <= delta)
            return;

        // If scrolled down and past the navbar, add class .nav-up.
        if (st > lastScrollTop && st > 0) {
            // Scroll Down
            $('.header').removeClass('nav-down').addClass('nav-up');
            $('.js-menu-trigger').removeClass('nav-down').addClass('nav-up');
        } else {
            // Scroll Up
            if (st + $(window).height() < $(document).height()) {
                $('.header').removeClass('nav-up').addClass('nav-down');
                $('.js-menu-trigger').removeClass('nav-up').addClass('nav-down');
            }
        }

        if (st > navbarHeight) {
        	$('.header').addClass('shrink');
        } else {
        	$('.header').removeClass('shrink');
        }

        lastScrollTop = st;

    }

    let menuTrigger = document.querySelector('.js-menu-trigger'),
        menu = document.querySelector('.js-menu'),
        menuCloser = document.querySelectorAll('.js-menu-close'),
        menuHide = document.querySelectorAll('.js-menu-hide');

    let menuAnim = gsap.timeline({ delay: 0.4, yoyo: true })
        .duration(1.5)
        .paused(true);

    let menuTriggerAnim = gsap.timeline()
        .to(menuHide, 0.5, { opacity: 0 })
        .duration(0.6)
        .paused(true);

    if (menuTrigger) {
        menuTrigger.addEventListener("click", () => {

            console.log('close');
    
            if (menuOpen == false) {
                menuTrigger.classList.add('active');
                menu.classList.add('active');
                menuAnim.play();
                menuOpen = true;
                document.body.classList.add('menu-open');
                menuTriggerAnim.play();
            } else {
                menuTrigger.classList.remove('active');
                menu.classList.remove('active');
                menuAnim.reverse();
                menuOpen = false;
                document.body.classList.remove('menu-open');
                menuTriggerAnim.reverse();
            }
        })
    }

    

}