import Lenis from '@studio-freight/lenis';

export function initLenis() {
    const lenisElement = document.querySelector('#lenis-smooth-scroll');

    if (!lenisElement) {
        console.error('No element with id #lenis-smooth-scroll found');
        return;
    }

    const lenis = new Lenis()

    lenis.on('scroll', (e) => {
        console.log(e)
    })

    function raf(time) {
        lenis.raf(time)
        requestAnimationFrame(raf)
    }

requestAnimationFrame(raf)
}