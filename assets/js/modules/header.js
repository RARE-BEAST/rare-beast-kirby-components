export function initHeader() {

    // Check if GSAP, ScrollTrigger, and MorphSVG are available
    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined' || typeof MorphSVGPlugin === 'undefined') {
        console.warn('GSAP, ScrollTrigger, and MorphSVGPlugin are required for the header module to function properly');
        return;
    }

    let header = document.querySelector('.js-header');
    
    if (header) {
        let headerBg = header.querySelector('.js-header-bg'),
            navLinks = header.querySelectorAll('.navigation__links'),
            navLogo = header.querySelector('.navigation__logo'),
            menuToggle = header.querySelector('.js-menu-toggle'),
            slideInMenu = header.querySelector('.js-slide-in-menu'),
            isOpen = false;

        // Initially hide the slide-in menu off the left side of the screen
        gsap.set(slideInMenu, {
            xPercent: -100
        });

        gsap.set('#menuClose', {
            display: 'none'
        });

        function updateMenuToggleDisplay() {
            if (window.matchMedia('(min-width: 1024px)').matches && !isOpen) {
                menuToggle.style.display = 'none';
            } else {
                menuToggle.style.display = 'flex';
            }
        }

        // Update the menuToggle display when the page loads
        updateMenuToggleDisplay();

        menuToggle.addEventListener('click', () => {
            isOpen = !isOpen;

            if (isOpen) {
                gsap.to('#menuOpen path', {
                    morphSVG: '#menuClose path',
                    duration: 0.3275,
                    ease: 'expo.in' // easing function for "in" animation
                });
                
                gsap.to(slideInMenu, {
                    xPercent: 0,
                    duration: 0.5,
                    ease: 'circle.inOut'
                });
            } else {
                gsap.to('#menuOpen path', {
                    morphSVG: '#menuOpen path',
                    duration: 0.5,
                    ease: 'expo.inOut' // easing function for "out" animation
                });

                gsap.to(slideInMenu, {
                    xPercent: -100,
                    duration: 0.5,
                    ease: 'power3.inOut'
                });
            }

            // Update the menuToggle display after the slideInMenu state changes
            updateMenuToggleDisplay();
        });

        // Update the menuToggle display when the viewport size changes
        window.matchMedia('(max-width: 1024px)').addEventListener('change', updateMenuToggleDisplay);

        gsap.set(headerBg, {
            yPercent: 0
        });

        const tl = gsap.timeline({
            scrollTrigger: {
                start: 'top+=400',
                end: 'top+=500',
                toggleActions: 'play none none reverse',
                scrub: 1,
            }
        });

        tl.to(headerBg, {
            yPercent: -100,
        });
        
        tl.to(navLinks, {
            scale: 0.75,
            transformOrigin: 'left top',
            duration: 1,
        }, 0);
        
        tl.to(menuToggle, {
            scale: 0.75,
            y: '-=4',
            transformOrigin: 'left top',
            duration: 1,
        }, 0);
        
        tl.to(navLogo, {
            scale: 0.75,
            transformOrigin: 'right top',
            duration: 1,
        }, 0);
    }
}