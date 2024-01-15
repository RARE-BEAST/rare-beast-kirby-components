export function initImageSlider() {

    let imageSliders = document.querySelectorAll('.js-image-slider');

    imageSliders.forEach(function (imageSlider) {
        let parent = imageSlider.parentElement;

        let paginationType = imageSlider.dataset.paginationType,
            paginationEl = parent.querySelector('.swiper-pagination'),
            navigationEl = parent.querySelector('.swiper-navigation'),
            nextEl = parent.querySelector('.swiper-button-next'),
            prevEl = parent.querySelector('.swiper-button-prev');

        let mobileSlideCount = imageSlider.dataset.mobileSlidesPerView,
            mobileSlideMargin = parseInt(imageSlider.dataset.mobileSlideMargin),
            mobileNavigation = navigationEl.dataset.mobileNavigation,
            mobilePagination = paginationEl.dataset.mobilePagination,

            desktopSlideCount = imageSlider.dataset.desktopSlidesPerView,
            desktopSlideMargin = parseInt(imageSlider.dataset.desktopSlideMargin),
            desktopNavigation = navigationEl.dataset.desktopNavigation,
            desktopPagination = paginationEl.dataset.desktopPagination;

        const updatePaginationVisibility = () => {
            console.log('updatePaginationVisibility called');
            if (window.innerWidth < 1024) {
                if (mobilePagination === 'false') {
                    paginationEl.classList.add('hidden');
                    console.log("mobile pagination hidden");
                } else {
                    paginationEl.classList.remove('hidden');
                    console.log("mobile pagination visible");
                }
            } else {
                if (desktopPagination === 'false') {
                    paginationEl.classList.add('hidden');
                    console.log("desktop pagination hidden");
                } else {
                    paginationEl.classList.remove('hidden');
                    console.log("desktop pagination visible");
                }
            }
        }

        const updateNavigationVisibility = () => {
            console.log('updateNavigationVisibility called');
            if (window.innerWidth < 1024) {
                if (mobileNavigation === 'false') {
                    navigationEl.classList.add('hidden');
                    console.log("mobile navigation hidden");
                } else {
                    navigationEl.classList.remove('hidden');
                    console.log("mobile navigation visible");
                }
            } else {
                if (desktopNavigation === 'false') {
                    navigationEl.classList.add('hidden');
                    console.log("desktop navigation hidden");
                } else {
                    navigationEl.classList.remove('hidden');
                    console.log("desktop navigation visible");
                }
            }
        }

        // Call the functions once to set the initial visibility
        updatePaginationVisibility();
        updateNavigationVisibility();

        // Update the visibility whenever the window is resized
        window.addEventListener('resize', updatePaginationVisibility);
        window.addEventListener('resize', updateNavigationVisibility);

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