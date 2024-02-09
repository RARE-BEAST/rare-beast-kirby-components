export function initHeader() {

    // Check if GSAP, ScrollTrigger, and MorphSVG are available
    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined' || typeof MorphSVGPlugin === 'undefined') {
        console.warn('GSAP, ScrollTrigger, and MorphSVGPlugin are required for the header module to function properly');
        return;
    }

    let header = document.querySelector('.js-header');
    
    if (header) {
        let mainEl = document.querySelector('#main'),
            headerBg = header.querySelector('.js-header-bg'),
            navLinks = header.querySelectorAll('.navigation__links'),
            navLogo = header.querySelector('.navigation__logo'),
            menuToggle = header.querySelector('.js-menu-toggle'),
            slideInMenu = header.querySelector('.js-slide-in-menu'),
            isOpen = false;

        let slideInMenuDialog = new A11yDialog(slideInMenu, mainEl);

        gsap.set(headerBg, {
            yPercent: 0
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

        // Get all focusable elements in the slideInMenu
        let focusableElements = slideInMenu.querySelectorAll('a, button, input, textarea, select, [tabindex]:not([tabindex="-1"])');

        // Set tabindex="-1" on all focusable elements when the page loads
        focusableElements.forEach(element => {
            element.setAttribute('tabindex', '-1');
        });

        menuToggle.addEventListener('click', () => {
            isOpen = !isOpen;

            if (isOpen) {
                gsap.to('#menuOpen path', {
                            morphSVG: '#menuClose path',
                            duration: 0.3275,
                            ease: 'expo.in' // easing function for "in" animation
                        });

                gsap.to(slideInMenu, {
                    x: '0%',
                    duration: 0.5,
                    ease: 'circle.inOut',
                    onComplete: () => {
                        slideInMenuDialog.show();
                        // When the slideInMenu is open, remove the tabindex attribute from all focusable elements
                        focusableElements.forEach(element => {
                            element.removeAttribute('tabindex');
                        });
                    }
                });
            } else {
                gsap.to('#menuOpen path', {
                    morphSVG: '#menuOpen path',
                    duration: 0.5,
                    ease: 'expo.inOut' // easing function for "out" animation
                });

                gsap.to(slideInMenu, {
                    x: '-100%',
                    duration: 0.5,
                    ease: 'power3.inOut',
                    onStart: () => {
                        slideInMenuDialog.hide();
                        // When the slideInMenu is closed, add tabindex="-1" to all focusable elements
                        focusableElements.forEach(element => {
                            element.setAttribute('tabindex', '-1');
                        });
                    }
                });
            }

            // Update the menuToggle display after the slideInMenu state changes
            updateMenuToggleDisplay();
        });

        menuToggle.addEventListener('keydown', (event) => {
            // Check if the key pressed was the "Enter" key or the "Space" key
            if (event.key === 'Enter' || event.key === ' ') {
                // Prevent the default action to stop scrolling when space is pressed
                event.preventDefault();
        
                // Trigger the click event
                menuToggle.click();
            }
        });

        let dialogHideElement = slideInMenu.querySelector('[data-a11y-dialog-hide]');

        dialogHideElement.addEventListener('click', () => {
            // Check if the slideInMenu is open
            if (isOpen) {
                // Trigger the click event on the menuToggle to close the slideInMenu
                menuToggle.click();
            }
        });

        // Update the menuToggle display when the viewport size changes
        window.matchMedia('(max-width: 1024px)').addEventListener('change', updateMenuToggleDisplay);

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