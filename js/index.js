var swiperHorizontal = new Swiper(".swiper-container", {
  direction: "horizontal",
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

var swiperVertical = new Swiper(".swiper-container-vertical", {
  direction: "vertical",
  loop: true,
  navigation: {
    nextEl: ".swiper-button-down",
    prevEl: ".swiper-button-up",
  },
});
