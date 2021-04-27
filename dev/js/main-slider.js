//Slider principal da home
$(document).ready(function(){
    $('.carousel').slick({
        arrows: false,
        dots: true,
    });
});

//Slider conheça nossa estrutura - home
$(document).ready(function(){
    $('.estrutura-slider').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 3,
        prevArrow: $('.estrutura-buttons-prev'),
        nextArrow: $('.estrutura-buttons-next'),
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





