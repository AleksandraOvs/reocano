const swiper = new Swiper('.hero-slider', {
  // slidesPerView: 1.5,
  // centeredSlides: true,
  // loop: true,
  //   pagination: {
  //     el: '.hero-slider__pagination',
  //     clickable: true,
  //   },


  //   navigation: {
  //     nextEl: '.hero-slider__button-next',
  //     prevEl: '.hero-slider__button-prev',
  //   },

  //   breakpoints: {
  //     480: {
  //         slidesPerView: 1.5,
  //         spaceBetween: 5,
  //         slideToClickedSlide: true,
  //     },
  //     576: {
  //         slidesPerView: 3,
  //         spaceBetween: 5,
  //         slideToClickedSlide: true,
  //     },

  //     1400:{
  //       slidesPerView: 5,
  //         spaceBetween: 5,
  //         slideToClickedSlide: true,
  //     }
  // }
  loop: true,
  grabCursor: true,
  spaceBetween: 10,
  centeredSlides: true,
  slidesPerView: 5,
  // effect: "coverflow",
  //     grabCursor: true,
  //     centeredSlides: true,
  //     slidesPerView: 5,
  //     coverflowEffect: {
  //       rotate: 30,
  //       stretch: 0,
  //       depth: 5,
  //       modifier: 0.7,
  //       slideShadows: true,
  //     },

  navigation: {
    nextEl: '.hero-slider__button-next',
    prevEl: '.hero-slider__button-prev',
  },

});

const books_swiper = new Swiper('.books-slider', {
  //effect: "coverflow",
  grabCursor: true,
  spaceBetween: 20,
  centeredSlides: false,
  slidesPerView: 1,
  loop: false,
  // autoplay: {
  //   delay: 5000,
  //   disableOnInteraction: false,
  // },
  // coverflowEffect: {
  //   rotate: 50,
  //   stretch: 0,
  //   depth: 100,
  //   modifier: 1,
  //   slideShadows: true,
  // },
  navigation: {
    nextEl: '.books-slider__button-next',
    prevEl: '.books-slider__button-prev',
  },
  pagination: {
    el: '.books-slider__pagination',
    clickable: true,
  },
  breakpoints: {
    
    480:{
      slidesPerView: 1.5,
      centeredSlides: true,
      loop: true
    },

    768:{
      slidesPerView: 2.5,
        centeredSlides: true,
        loop: true
    },
    
    992: {
        slidesPerView: 2.5,
        centeredSlides: true,
        loop: true
        //slideToClickedSlide: true,
    },

    1200:{
      slidesPerView: 4,
    }
  }

  })



  $('.elementor-slider').slick({
    dots: true,
    slidesToShow: 3.5,
    arrows: true,
    appendDots: $('.elementor__slider-dots'),
    prevArrow: $('.elementor__slider-arrow_prev'),
    nextArrow: $('.elementor__slider-arrow_next'),
    infinite: false,
    responsive: [{
      breakpoint: 767,
      settings: {
        adaptiveHeight: true,
      }
    }]
  })