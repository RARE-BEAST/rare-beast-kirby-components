export function initLenis() {
    const lenis = new Lenis({
        element: document.querySelector('.lenis'),
        multiplier: 1.5
    })

    // lenis.on('scroll', (e) => {
    // console.log(e)
    // })

    lenis.on('scroll', ScrollTrigger.update)

    gsap.ticker.add((time)=>{
    lenis.raf(time * 1000)
    })

    gsap.ticker.lagSmoothing(0)

}