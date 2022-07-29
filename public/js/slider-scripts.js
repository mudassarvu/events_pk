

// $('.bc-items-wrapper').slick({
//     slidesToShow: 3,
//     slidesToScroll: 2,
//     arrows: true,
//     fade: true,
// });
jQuery(document).ready(function($) {
    $('.bc-items-wrapper').slick({
      dots: false,
      infinite: true,
      speed: 500,
      slidesToShow: 5,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      arrows: true,
      prevArrow:"<button type='button' class='slick-prev'><i class='fas fa-chevron-left'></i></button>",
      nextArrow:"<button type='button' class='slick-next'><i class='fas fa-chevron-right'></i></button>",
      responsive: [{
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
         breakpoint: 400,
         settings: {
            arrows: false,
            slidesToShow: 1,
            slidesToScroll: 1
         }
      }]
  });


  $('.featured-events-slider').slick({
    dots: false,
    infinite: true,
    speed: 500,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: true,
    prevArrow:"<button type='button' class='slick-prev'><i class='fas fa-chevron-left'></i></button>",
    nextArrow:"<button type='button' class='slick-next'><i class='fas fa-chevron-right'></i></button>",
    responsive: [{
      breakpoint: 1200,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
       breakpoint: 600,
       settings: {
          arrows: false,
          slidesToShow: 1,
          slidesToScroll: 1
       }
    }]
});


});


