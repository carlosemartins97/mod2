
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


//Página contato
function forms(){
  $('#input-telefone').mask('00 0 0000-0000');
  $("#contato-form").validate();

  // inputs da página de contato
  var inputs = {
    1: {input: '#input-email', span: '#input-email-span'},
    2: {input: '#input-nome', span: '#input-nome-span'},
    3: {input: '#input-telefone', span: '#input-telefone-span'},
    4: {input: '#text-mensagem', span: '#input-mensagem-span'},
  }
  //efeito de focus no input
  $.each(inputs, function(index){
    $(this.input).focus(function(){
      $(inputs[index].span).css('color', '#d9704b');
    });
    $(this.input).focusout(function(){
      $(inputs[index].span).css('color', '#beb9b0');
    });
  })
};
