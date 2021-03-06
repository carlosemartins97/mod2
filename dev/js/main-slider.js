
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
  //máscara telefone e celular
  var SPMaskBehavior = function (val) {
    return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
  },
  spOptions = {
    onKeyPress: function(val, e, field, options) {
        field.mask(SPMaskBehavior.apply({}, arguments), options);
      }
  };
  $('#input-telefone').mask(SPMaskBehavior, spOptions);

  //validando formulario
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

//Página de reserva
function reserva(){

  //setando linguagem padrão do datapicker como Português.
  jQuery(function($){
    $.datepicker.regional['pt-BR'] = {
            closeText: 'Fechar',
            prevText: '&#x3c;Anterior',
            nextText: 'Pr&oacute;ximo&#x3e;',
            currentText: 'Hoje',
            monthNames: ['Janeiro','Fevereiro','Mar&ccedil;o','Abril','Maio','Junho',
            'Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
            monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun',
            'Jul','Ago','Set','Out','Nov','Dez'],
            dayNames: ['Domingo','Segunda-feira','Ter&ccedil;a-feira','Quarta-feira','Quinta-feira','Sexta-feira','Sabado'],
            dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sab'],
            dayNamesMin: ['Dom','Seg','Ter','Qua','Qui','Sex','Sab'],
            weekHeader: 'Sm',
            dateFormat: 'dd/mm/yy',
            firstDay: 0,
            isRTL: false,
            showMonthAfterYear: false,
            yearSuffix: ''};
    $.datepicker.setDefaults($.datepicker.regional['pt-BR']);
  });

  $('#check-in').datepicker();
  $('#check-out').datepicker();

  $('#assunto').change(function(){
    var id = $(this).val();
    
    if(id === 'fazer-reserva'){
      $('#acomodacao').css('display', 'block');
      $('#select-acomodacao').css('display', 'block');

      $('#label-check-in').css('display', 'block');
      $('#check-in').css('display', 'block');

      $('#label-check-out').css('display', 'block');
      $('#check-out').css('display', 'block');

      $('#acomodacao-error').css('display', 'block');
      $('#check-in-error').css('display', 'block');
      $('#check-out-error').css('display', 'block');

    } else {
      $('#acomodacao').css('display', 'none').val("");
      $('#select-acomodacao').css('display', 'none');
      
      $('#label-check-in').css('display', 'none');
      $('#check-in').css('display', 'none').val("");
      
      $('#label-check-out').css('display', 'none');
      $('#check-out').css('display', 'none').val("");

      $('#acomodacao-error').css('display', 'none');
      $('#check-in-error').css('display', 'none');
      $('#check-out-error').css('display', 'none');
    }
  })
}
