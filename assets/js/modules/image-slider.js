export function initImageSlider() {

    let imageSliders = document.querySelectorAll('.js-image-slider');

    imageSliders.forEach(function (imageSlider) {

      let parent = imageSlider.parentElement;

      let mobileSlideCount = imageSlider.dataset.mobileSlidesPerView,
          desktopSlideCount = imageSlider.dataset.desktopSlidesPerView,
          slideMargin = parseInt(imageSlider.dataset.slideMargin),
          nextEl = parent.querySelector('.swiper-button-next'),
          prevEl = parent.querySelector('.swiper-button-prev'),
          paginationEl = parent.querySelector('.swiper-pagination');


      let swiper = new Swiper(imageSlider, {
            loop: true,
            spaceBetween: slideMargin,
            slidesPerView: mobileSlideCount,
            breakpoints: {
                1024: {
                  slidesPerView: desktopSlideCount
                }
            },
            pagination: {
                el: paginationEl,
                type: 'bullets'
            },
            navigation: {
                nextEl: nextEl,
                prevEl: prevEl
            }
        });

    });
}