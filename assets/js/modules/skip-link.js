export function initSkipLink() {

    let header = document.querySelector('.js-header');
    
    if (header) {
        let skipLink = header.querySelector('.skip-link');

        // Animate it into view when it receives focus
        skipLink.addEventListener('focus', () => {
            gsap.fromTo(skipLink, { y: '-100%' }, { y: '0%', duration: 0.3, ease: 'power1.out' });
        });

        // Move it back offscreen when it loses focus
        skipLink.addEventListener('blur', () => {
            gsap.to(skipLink, { y: '-100%', duration: 0.3, ease: 'power1.in' });
        });
    }
}