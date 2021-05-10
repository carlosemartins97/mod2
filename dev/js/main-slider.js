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
              slidesToShow: 3
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
var sliders = {
  1: {slider : '#slide1', nav: '#nav1'},
  2: {slider : '#slide2', nav: '#nav2'},
  3: {slider : '#slide3', nav: '#nav3'},
  4: {slider : '#slide4', nav: '#nav4'},
  5: {slider : '#slide5', nav: '#nav5'},
  6: {slider : '#slide6', nav: '#nav6'}
};

$.each(sliders, function() {

  $(this.slider).slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: true,
  });
  $(this.nav).slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: this.slider,
    dots: false,
    focusOnSelect: true
  });

});


//Slide fotos
$(document).ready(function(){
  $('.fotos-slider').slick({
      slidesToShow: 4,
      arrows: true,
      infinite: true,
      prevArrow: $('#estrutura-buttons-prev'),
      nextArrow: $('#estrutura-buttons-next'),
      responsive: [
        {
          breakpoint: 1170,
          settings: {
            arrows: true,
            slidesToShow: 3
          }
        },
        {
          breakpoint: 768,
          settings: {
            arrows: true,
            slidesToShow: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            arrows: true,
            slidesToShow: 1
          }
        }
      ]
    });
});


// Página do Blog
$(".blog-card-contato").jsSocials({
  showLabel: true,
  shares: [{
      share: "facebook",
      logo: "http://ambiente-desenvolvimento.provisorio.ws/carlos-martins/house-hostel/dist/img/blog/icons/face.png"
  }, {
      share: "instagram",
      logo: "http://ambiente-desenvolvimento.provisorio.ws/carlos-martins/house-hostel/dist/img/blog/icons/insta.png"
  }]
});
