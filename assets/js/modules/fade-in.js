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

    let loadingScreen = document.querySelectorAll('.js-loading-screen');

    loadingScreen.forEach(elem => {

        console.log('loading screen');

        let icon = elem.querySelector('.js-loading-logo');

        let loadingAnim = gsap.timeline({paused: true, delay: 1.5})
            .to(icon, 1, { scale: 1, ease: "sine.out"})
            .to(elem, 1, { opacity: 0, ease: "sine.out"})

        loadingAnim.play();

        // let fadeInAnim = gsap.timeline({paused: true})
        // .fromTo(elem, 1, { opacity: 0 }, { opacity: 1, ease: "sine.out"})

        // ScrollTrigger.create({
        //     trigger: elem,
        //     start: "top 90%",
        //     once: true,
        //     onEnter: ({progress, direction, isActive}) => fadeInAnim.play(),
        //     markers: false
        // });

    })

}