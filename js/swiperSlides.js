var $ = jQuery;
var swiper = new Swiper(".categorySwiper", {
    slidesPerView: 2.2,
    spaceBetween: 10,
    grabCursor: true,
    freeMode: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      768: {
        slidesPerView: 4.2,
        spaceBetween: 15,
      },
      1024: {
        slidesPerView: 5.7,
        spaceBetween: 20,
      },
    }
});