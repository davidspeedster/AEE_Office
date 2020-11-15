var swiper = new Swiper('#employees-slide', {
    autoplay: {
        delay: 3000,
      },
    slidesPerView: 'auto',
    centeredSlides: true,
          loop: true,

    spaceBetween: 30,
    navigation: {
      nextEl: '#employee-next',
      prevEl: '#employee-prev',
    },

    breakpoints: {
        // when window width is >= 320px
        420: {
          slidesPerView: 1,
          spaceBetween: 0
        },
        // when window width is >= 480px
      // when window width is <= 499px
      599: {
        slidesPerView: 3,
        spaceBetweenSlides: 40
    },
    // when window width is <= 999px
    999: {
        slidesPerView: 5,
        spaceBetweenSlides: 40
    }
      }
  });
  $(".swiper-container").hover(function() {
    (this).swiper.autoplay.stop();
}, function() {
    (this).swiper.autoplay.start();
});
