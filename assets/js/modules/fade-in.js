export function initFadeIns() {
    let fadeIns = document.querySelectorAll('.js-fade-in');

    fadeIns.forEach(elem => {
        let fadeInAnim = gsap.timeline({paused: true})
        .fromTo(elem, 1, { opacity: 0 }, { opacity: 1, ease: "sine.out"})

        ScrollTrigger.create({
            trigger: elem,
            start: "top 70%",
            once: true,
            onEnter: ({progress, direction, isActive}) => fadeInAnim.play(),
            markers: false
        });
    })
}