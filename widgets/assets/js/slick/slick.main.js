jQuery(document).ready(function(){
  jQuery('.slider').slick({
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  adaptiveHeight: true,
  prevArrow:'<span class="prev-arrow"><i class="fa fa-chevron-left"></i></span>',
  nextArrow:'<span class="next-arrow"><i class="fa fa-chevron-right"></i>',
    responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});
('.slider').slick({
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  adaptiveHeight: true,
  prevArrow:'<span class="prev-arrow"><i class="fa fa-chevron-left"></i></span>',
  nextArrow:'<span class="next-arrow"><i class="fa fa-chevron-right"></i>',
    responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});

});



