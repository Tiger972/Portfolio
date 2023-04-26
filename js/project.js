var projectsSwiper = new Swiper ('.swiper-container', {
    direction: 'horizontal',
    slidesPerView: 4,
    effect: 'slide',
    speed: 600,
    loop: true,

    mousewheel: {
        sensitivity: 1,
    },

    autoplay: {
        delay: 12000,
    },

    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 0
        },
        560: {
            slidesPerView: 2,
            spaceBetween: 0
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 0
        },
        1280: {
            slidesPerView: 4,
            spaceBetween: 0
        }
    }
})