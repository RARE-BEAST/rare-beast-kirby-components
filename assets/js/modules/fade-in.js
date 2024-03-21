export function initFadeIns() {
    let fadeIns = document.querySelectorAll('.js-fade-in');

    fadeIns.forEach(elem => {
        let fadeInAnim = gsap.timeline({paused: true})
        .fromTo(elem, 0.7, { opacity: 0, y: 30, scale: 0.88, transformOrigin: "left center" }, { opacity: 1, y: 0, scale: 1, ease: "sine.out"})

        ScrollTrigger.create({
            trigger: elem,
            start: "top 85%",
            once: true,
            onEnter: ({progress, direction, isActive}) => fadeInAnim.play(),
            markers: false
        });
    })
}