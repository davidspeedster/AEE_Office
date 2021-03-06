var swiper = new Swiper('#project-images-slide', {
    autoplay: {
        delay: 3000,
      },
    slidesPerView: 'auto',
    centeredSlides: true,
          loop: true,

    spaceBetween: 30,
    navigation: {
      nextEl: '#project-image-next',
      prevEl: '#project-image-prev',
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
        slidesPerView: 1,
        spaceBetweenSlides: 0
    },
    // when window width is <= 999px
    999: {
        slidesPerView: 1,
        spaceBetweenSlides: 0
    }
      }
  });
  $(".swiper-container").hover(function() {
    (this).swiper.autoplay.stop();
}, function() {
    (this).swiper.autoplay.start();
});
