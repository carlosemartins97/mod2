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
              slidesToShow: 2
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

//navbar responsiva
$('#header-menu-button').click(function(){
  $('.apresentacao').fadeToggle();
  $('.reserva').fadeToggle();
});

// slider acomodacoes
$('#slider-img-principal').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  fade: true,
  asNavFor: '#slider-img-carousel'
});
$('#slider-img-carousel').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  asNavFor: '#slider-img-principal',
  dots: false,
  infinite: true,
  focusOnSelect: true
});





