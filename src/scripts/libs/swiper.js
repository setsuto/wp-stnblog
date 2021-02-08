const swiper = new Swiper('.swiper-container', {
  // Optional parameters
  initialSlide: 1,
  loop: false,
  grabCursor: true,
  effect: 'coverflow',
  centeredSlides: true,
  slidesPerView: 1,
  speed: 1000,
  breakpoints: {
    800: {
      slidesPerView: 2,
    }
  },
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});
