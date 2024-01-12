export function initImageSlider() {

    let imageSliders = document.querySelectorAll('.js-image-slider');

    imageSliders.forEach(function (imageSlider) {
        let parent = imageSlider.parentElement;

        let mobileSlideCount = imageSlider.dataset.mobileSlidesPerView,
            mobileSlideMargin = parseInt(imageSlider.dataset.mobileSlideMargin),
            // mobileNavigation = imageSlider.dataset.mobileNavigation,
            // mobilePagination = imageSlider.dataset.mobilePagination,

            desktopSlideCount = imageSlider.dataset.desktopSlidesPerView,
            desktopSlideMargin = parseInt(imageSlider.dataset.desktopSlideMargin),
            // desktopNavigation = imageSlider.dataset.desktopNavigation,
            // desktopPagination = imageSlider.dataset.desktopPagination,

            nextEl = parent.querySelector('.swiper-button-next'),
            prevEl = parent.querySelector('.swiper-button-prev'),
            paginationEl = parent.querySelector('.swiper-pagination'),
            paginationType = imageSlider.dataset.paginationType;

      

        new Swiper(imageSlider, {
            loop: true,
            grabCursor: true,
            spaceBetween: mobileSlideMargin,
            slidesPerView: mobileSlideCount,
            navigation: {
                nextEl: nextEl,
                prevEl: prevEl
            },
            pagination: {
                el: paginationEl,
                type: paginationType,
                clickable: true
            },
            breakpoints: {
                1024: {
                    spaceBetween: desktopSlideMargin,
                    slidesPerView: desktopSlideCount,
                    navigation: {
                        nextEl: nextEl,
                        prevEl: prevEl
                    },
                    pagination: {
                        el: paginationEl,
                        type: paginationType,
                        clickable: true
                    }
                }
            }
        });

    });
}