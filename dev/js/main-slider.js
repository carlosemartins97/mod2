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
        slidesToShow: 5,
        arrows: true,
        infinite: true,
        prevArrow: $('.estrutura-buttons-prev'),
        nextArrow: $('.estrutura-buttons-next'),
        responsive: [
          {
            breakpoint: 1170,
            settings: {
              arrows: true,
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 3
            }
          },
          {
            breakpoint: 768,
            settings: {
              arrows: true,
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 2
            }
          },
          {
            breakpoint: 480,
            settings: {
              arrows: true,
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 2
            }
          }
        ]
      });
});

//navbar responsiva
$('#header-menu-button').click(function(){
  $('.apresentacao').slideToggle();
  $('.reserva').slideToggle();
});

// ----------- SLIDES PÁGINA ACOMODAÇÕES ---------
$('#slide1').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  fade: true,
});
$('#nav1').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  dots: false,
  asNavFor: '#slide1',
  infinite: true,
  focusOnSelect: true
});

$('#slide2').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  fade: true,
});
$('#nav2').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  dots: false,
  asNavFor: '#slide2',
  infinite: true,
  focusOnSelect: true
});

$('#slide3').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  fade: true,
});
$('#nav3').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  dots: false,
  asNavFor: '#slide3',
  infinite: true,
  focusOnSelect: true
});

$('#slide4').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  fade: true,
});
$('#nav4').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  dots: false,
  asNavFor: '#slide4',
  infinite: true,
  focusOnSelect: true
});

$('#slide5').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  fade: true,
});
$('#nav5').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  dots: false,
  asNavFor: '#slide5',
  infinite: true,
  focusOnSelect: true
});

$('#slide6').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  fade: true,
});
$('#nav6').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  dots: false,
  asNavFor: '#slide6',
  infinite: true,
  focusOnSelect: true
});





