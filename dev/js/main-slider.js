
//Sliders - home
function slickHome(){
    $('.carousel').slick({
      arrows: false,
      dots: true,
    });

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
};

//navbar responsiva
$('#header-menu-button').click(function(){
  $('.apresentacao').slideToggle();
  $('.reserva').slideToggle();
});

// ----------- SLIDES PÁGINA ACOMODAÇÕES ---------
function slickAcomodacao(){
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
}


//Slide fotos
function slickFotos(){
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
};


// Página do Blog
function socials(){
  $(".blog-integra-social").jsSocials({
    showLabel: false,
    showCount: false,
    shares: ["facebook", "twitter", "whatsapp", "linkedin"]
  })
};

