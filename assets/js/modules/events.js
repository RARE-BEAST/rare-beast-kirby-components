export function initEvents() {
    let events = document.querySelector('.js-events');

    if (events) {

        console.log('events');

    }

    var contactOpen = false;
    let contactTrigger = document.querySelector('.js-contact-trigger'),
        contact = document.querySelector('.js-contact'),
        contactCloser = document.querySelectorAll('.js-contact-close');

    let contactAnim = gsap.timeline({ yoyo: true })
        .to(contact, { ease: "power2.inOut", x: 0 })
        .duration(1.5)
        .paused(true);


    contactTrigger.addEventListener("click", () => {

        console.log('contact');

        if (contactOpen == false) {
            contact.classList.add('active');
            contactAnim.play();
            contactOpen = true;
            document.body.classList.add('contact-open');
        } else {
            contact.classList.remove('active');
            contactAnim.reverse();
            contactOpen = false;
            document.body.classList.remove('contact-open');
        }
    })

    contactCloser.forEach(closer => {

        closer.addEventListener("click", () => {
        
            console.log('close');
            if (contactOpen == false) {
                contact.classList.add('active');
                contactAnim.play();
                contactOpen = true;
                document.body.classList.add('contact-open');
            } else {
                contact.classList.remove('active');
                contactAnim.reverse();
                contactOpen = false;
                document.body.classList.remove('contact-open');
            }
        })

    })

}