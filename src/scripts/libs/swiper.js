const swiper = new Swiper('.swiper-container', {
  // initialSlide: 1,
  loop: true,
  grabCursor: true,
  effect: 'slide',
  // centeredSlides: true,
  slidesPerView: 1,
  speed: 1000,
  breakpoints: {
    800: {
      slidesPerView: 2,
    },
    1000: {
      slidesPerView: 2,
    },
    1200: {
      slidesPerView: 3,
    },
    1400: {
      slidesPerView: 4,
    },
    1600: {
      slidesPerView: 5,
    },
  },
  autoplay: {
    delay: 3000,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});
