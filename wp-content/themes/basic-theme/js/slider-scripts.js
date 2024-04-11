const swiper = new Swiper('.hero-slider', {
  slidesPerView: 1.5,
  //spaceBetween: 20,
  // centeredSlides: true,
  loop: true,
  grid: {
    rows: 2
  },
   // direction: 'vertical',
    // loop: true,
    // autoplay: {
    //   delay: 5000,
    //   disableOnInteraction: false,
    // },
    //effect: "fade",
    // If we need pagination
    pagination: {
      el: '.hero-slider__pagination',
      clickable: true,
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.hero-slider__button-next',
      prevEl: '.hero-slider__button-prev',
    },

    breakpoints: {
      // when window width is >= 320px
      // 320: {
      //     slidesPerView: 1.3,
      //     spaceBetween: 0,
      //     slideToClickedSlide: true,
      // },
      // when window width is >= 480px
      480: {
          slidesPerView: 1.5,
          spaceBetween: 5,
          slideToClickedSlide: true,
      },
      // when window width is >= 640px
      576: {
          slidesPerView: 2.5,
          spaceBetween: 5,
          slideToClickedSlide: true,
      },

      1400:{
        slidesPerView: 3.5,
          spaceBetween: 5,
          slideToClickedSlide: true,
      }
  }
   
  });

  const services_swiper = new Swiper('.services-slider', {
    //effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 3,
    loop: true,
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
      nextEl: '.services-slider__button-next',
      prevEl: '.services-slider__button-prev',
    },
   
  })

  $('.elementor-element-d04cf10').slick({
    dots: true,
    slidesToShow: 3.5,
    arrows: true,
    appendDots: $('.products__slider-dots'),
    prevArrow: $('.products__slider-arrow_prev'),
    nextArrow: $('.products__slider-arrow_next'),
    infinite: false,
    responsive: [{
      breakpoint: 767,
      settings: {
        adaptiveHeight: true,
      }
    }]
  })