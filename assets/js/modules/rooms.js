export function initRooms() {

    let rooms = document.querySelector('.js-rooms');

    if (rooms) {

        let roomSwiper = rooms.querySelector('.swiper');

        var swiper = new Swiper(roomSwiper, {
            slidesPerView: 1.2,
            spaceBetween: 24,
            grabCursor: true,
            // loop: true,
            initialSlide: 1,
            centeredSlides: true,
            // centeredSlidesBounds: true,

            breakpoints: {
              767: {
                slidesPerView: 3.4,
                spaceBetween: 48,
              }
            }
          });

    }
}