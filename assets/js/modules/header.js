export function initHeader() {
    let header = document.querySelector('.js-header');
    
    if (header) {
        let headerBg = header.querySelector('.js-header-bg');
        let navShrinker = header.querySelectorAll('.navigation__links');
        let logoShrinker = header.querySelector('.navigation__logo');

        gsap.set(headerBg, {
            yPercent: 0
        })

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

        tl.to(navShrinker, {
            scale: 0.75,
            transformOrigin: 'left top',
            duration: 1,
        }, 0);

        tl.to(logoShrinker, {
            scale: 0.75,
            transformOrigin: 'right top',
            duration: 1,
        }, 0);
    }
}