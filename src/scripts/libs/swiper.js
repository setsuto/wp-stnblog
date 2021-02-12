const swiper = new Swiper('.swiper-container', {
  initialSlide: 1,
  loop: true,
  grabCursor: true,
  effect: 'slide',
  // centeredSlides: true,
  slidesPerView: 1,
  speed: 1000,
  breakpoints: {
    900: {
      slidesPerView: 4,
    }
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});
