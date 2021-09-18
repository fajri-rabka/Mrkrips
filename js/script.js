// Header

$(function () {
  $(document).on('click', '.line', function () {
    $('.header__flymenu').toggleClass("open");
  });
});

$(function () {
  $(document).on('click', '.close', function () {
    $('.header__flymenu').toggleClass("open");
  });
});

$(function () {
  $(document).on('click', '#popup__alert', function (e) {
    $('.header__alert').toggleClass("showalert");
    $('.overlay__alert').toggleClass("open");
  });
});

$(function () {
  $(document).on('click', '.overlay__alert', function (e) {
    $('.header__alert').toggleClass("showalert");
    $('.overlay__alert').toggleClass("open");
  });
});


// Slider
if($('.slider__cartbox').length){
$('.slider__cartbox').slick({
  autoplay: true,
  autoplaySpeed: 5000,
  dots: false,
  arrows: true,
  infinite: false,
  speed: 300,
  slidesToShow: 6,
  slidesToScroll: 6,
  prevArrow: "<button type='button' class='slick-prev arrow-prev'><img src='img/icon/arrow-right-icon.svg' alt='Icon'></button>",
  nextArrow: "<button type='button' class='slick-next arrow-next'><img src='img/icon/arrow-right-icon.svg' alt='Icon'></button>",
  responsive: [{
      breakpoint: 1224,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 4,
        infinite: true,
        dots: false,
        centerMode: true
      }
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: false,
        centerMode: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        centerPadding: '50px'
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
}
if($('.slider__cartchart').length){
$('.slider__cartchart').slick({
  autoplay: true,
  autoplaySpeed: 5000,
  dots: false,
  arrows: true,
  infinite: false,
  speed: 300,
  slidesToShow: 6,
  slidesToScroll: 6,
  prevArrow: "<button type='button' class='slick-prev arrow-prev'><img src='img/icon/arrow-right-icon.svg' alt='Icon'></button>",
  nextArrow: "<button type='button' class='slick-next arrow-next'><img src='img/icon/arrow-right-icon.svg' alt='Icon'></button>",
  responsive: [{
      breakpoint: 1224,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 4,
        infinite: true,
        dots: false,
        centerMode: true
      }
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: false,
        centerMode: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        centerPadding: '50px'
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
}

if($('.home__slider').length){
$('.home__slider').slick({
  autoplay: true,
  autoplaySpeed: 5000,
  dots: false,
  arrows: true,
  infinite: false,
  speed: 300,
  // centerPadding: '80px',
  variableWidth: false,
  // variableWidth: true,
  // centerMode: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  prevArrow: "<button type='button' class='slick-prev arrow-prev'><img src='img/icon/arrow-right-icon.svg' alt='Icon'></button>",
  nextArrow: "<button type='button' class='slick-next arrow-next'><img src='img/icon/arrow-right-icon.svg' alt='Icon'></button>",
  responsive: [{
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
}
// Validation
(function () {
  'use strict'

  var forms = document.querySelectorAll('.needs-validation')

  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()

window.$crisp = [];
$crisp.push(["config", "color:theme", ["blue_grey"]])
window.CRISP_WEBSITE_ID = "52d871e0-e89e-4b63-8287-08c3787b9803";
(function () {
  d = document;
  s = d.createElement("script");
  s.src = "https://client.crisp.chat/l.js";
  s.async = 1;
  d.getElementsByTagName("head")[0].appendChild(s);
})();

if($('#data1').length){
$('#data1').DataTable();
}

if($('.chart__content .box .show1').length){
  $('.chart__content .box .show1').magnificPopup({
    items: {
      src: 'img/chart-crypto.png'
    },
    type: 'image'
  });
}

if($('.chart__content .box .show2').length){
  $('.chart__content .box .show2').magnificPopup({
    items: {
      src: 'img/chart-forex.png'
    },
    type: 'image'
  });
}


if($('.chart__content .box .show3').length){
  $('.chart__content .box .show3').magnificPopup({
    items: {
      src: 'img/chart-commodity.png'
    },
    type: 'image'
  });
}

