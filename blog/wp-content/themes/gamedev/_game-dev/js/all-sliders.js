$('.our-team__slider').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  appendArrows:'.slider-arrows',
  nextArrow: '<button class="slick-arrow slick-next"><img src="images/slider-arrow-next.svg" alt="next arrow"></button>',
  prevArrow: '<button class="slick-arrow slick-prev"><img src="images/slider-arrow-prev.svg" alt="prev arrow"></button>',
  responsive: [
    {
      breakpoint: 1120,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 701,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
      }
    },
  ]
});
  
$('.platform__slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  dots: true,
  arrows: false,
  autoplay: true,
  autoplaySpeed: 2000,
});
  
$('.blog__slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  dots: true,
  arrows: false,
  autoplay: true,
  autoplaySpeed: 2000,
});
  
$('.reward-mob__tab06-slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  dots: true,
  arrows: false,
  autoplay: true,
  autoplaySpeed: 2000,
});

$('.jollity-help__slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  dots: true,
  arrows: false,
  autoplay: true,
  autoplaySpeed: 2000,
});

$('.toc-cases__slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  dots: true,
  arrows: false,
  autoplay: true,
  autoplaySpeed: 2000,
});
