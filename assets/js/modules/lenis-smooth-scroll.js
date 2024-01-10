import Lenis from '@studio-freight/lenis';

export function initLenis() {
    const lenisElement = document.querySelector('.lenis');

    if (!lenisElement) {
        console.error('No element with class .lenis found');
        return;
    }

    const lenis = new Lenis({
        element: lenisElement,
        multiplier: 1.5,
        direction: 'vertical',
        infinite: true
    });


    lenis.on('scroll', (e) => {
        console.log(e)
    });

    function raf(time) {
        lenis.raf(time)
        requestAnimationFrame(raf)
    }

requestAnimationFrame(raf);

}