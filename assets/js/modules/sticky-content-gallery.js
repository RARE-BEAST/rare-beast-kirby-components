export function initStickyContentGallery() {

  let stickyContentGalleries = document.querySelectorAll('.js-sticky-content-gallery');

  stickyContentGalleries.forEach(function (elem) {

    let container = elem.querySelector('.js-content-container'),
        content = elem.querySelector('.js-content');

    ScrollTrigger.create({
      trigger: container,
      pin: content,
      start: "top top",
      end: "bottom bottom",
      scrub: true
    });

  });


}