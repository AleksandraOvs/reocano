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