export function initAccordions() {

    // function refreshScrollTrigger() {
    //     ScrollTrigger.refresh();
    // }

    // { onComplete: refreshScrollTrigger, onReverseComplete: refreshScrollTrigger }

    let accordions = document.querySelectorAll('.js-accordion');

    let accordionAnims = []; 


    accordions.forEach((accordion, i) => {

        console.log(accordion);

        let active = false, 
            trigger = accordion.querySelector('.js-accordion-trigger'),
            icon = accordion.querySelector('.accordion__trigger'),
            content = accordion.querySelector('.js-accordion-content');

        let accordionAnim = gsap.timeline()
            .from(content, 1, { height: 0 })
            .duration(0.5)
            .paused(true);

        accordionAnims.push({ active, accordionAnim}); 

        trigger.addEventListener("click", () => {
            
            icon.classList.add('active');
            accordion.classList.add('active');
            accordionAnims.filter((accordionAnim, index, array) => {
                

                if (i !== index) {
                    accordionAnims[index].accordionAnim.reverse();
                    accordions[index].querySelector('.accordion__trigger').classList.remove('active');
                    accordions[index].classList.remove('active');
                    accordionAnims[index].active = false;
                    // document.activeElement.blur();
                } else {

                    if (accordionAnims[index].active == false) {
                        accordionAnims[index].accordionAnim.play();
                        accordionAnims[index].active = true;
                        accordions[index].querySelector('.accordion__trigger').classList.add('active');
                        accordions[index].classList.add('active');
                    } else {
                        accordionAnims[index].accordionAnim.reverse();
                        accordionAnims[index].active = false;
                        accordions[index].querySelector('.accordion__trigger').classList.remove('active');
                        accordions[index].classList.remove('active');
                        // document.activeElement.blur();
                    }
                    
                }
            });
            
        });  


    });


}