document.addEventListener('DOMContentLoaded', () => {

  const burger = document.querySelector('.burger');
  const mobileMenu = document.querySelector('.mobile-menu');
  const bodyLock = document.querySelector('body');
  const closeButton = document.querySelector('.mobile-menu__button');
  const headerSticky = document.querySelector('.header__top');
  const home = document.querySelector('.menu__link-home');
  const catalog = document.querySelector('.menu__link-catalog');
  let isHome = true;

  catalog.addEventListener('click', () => {
    isHome = false;
  })

  if(isHome) {
    home.classList.add('menu__link--active')
  } else {
    home.classList.remove('menu__link--active')
  }


  burger.addEventListener('click', () => {
    mobileMenu.classList.toggle('mobile-menu--active');
    if (mobileMenu.classList.contains('mobile-menu--active')) {
      bodyLock.classList.add('lock');
      headerSticky.classList.add('lock');
    }
    else {
      burger.classList.remove('burger--active');
      bodyLock.classList.remove('lock');
      headerSticky.classList.remove('lock');
    }
  });

  closeButton.addEventListener('click', () => {
    mobileMenu.classList.remove('mobile-menu--active');
    if (mobileMenu.classList.contains('mobile-menu--active')) {
      bodyLock.classList.add('lock');
      headerSticky.classList.add('lock');
    }
    else {
      burger.classList.remove('burger--active');
      bodyLock.classList.remove('lock');
      headerSticky.classList.remove('lock');
    }
  });

  document.addEventListener('click', function (e) {
    if (e.target !== burger && e.target !== mobileMenu) {
      mobileMenu.classList.remove('mobile-menu--active');
      bodyLock.classList.remove('lock');
      headerSticky.classList.remove('lock');
    }
  });
});



$(function () {
  $('.menu__link, .footer__link').on('click', function () {
    $('.menu__link, .footer__link').removeClass('menu__link--active');
    $(this).addClass('menu__link--active')
  });

  $('.pagination__link').on('click', function () {
    $('.pagination__link').removeClass('pagination__link--active');
    $(this).addClass('pagination__link--active')
  });

  $('.product-catalog__open-btn').on('click', function () {
    $('.product-catalog__filters').addClass('filters-mobile');
    $('body, .header__top').addClass('lockJQ');
  });

  $('.product-catalog__close-btn').on('click', function () {
    $('.product-catalog__filters').removeClass('filters-mobile');
    $('body, .header__top').removeClass('lockJQ');
  });

  $(".menu__link, .logo").on("click", function () {
    var id = $(this).attr('href'),
      top = $(id).offset().top;
    $('body,html').animate({ scrollTop: top }, 1500);
  });

  let s = $('.product-catalog__filters');
  let bodyLock = $('body');
  let headerSticky = $('.header__top');
  let form = $('.product-catalog__form')

  $(document).on('mouseup', function (e) {
    if (!s.is(e.target) && s.has(e.target).length === 0) {

      s.removeClass('filters-mobile');
      bodyLock.removeClass('lockJQ');
      headerSticky.removeClass('lockJQ')
    }
  });
  


  $('.product-catalog__select, .product__num').styler();



  var $range = $(".price__input");
  var $inputFrom = $(".price__from");
  var $inputTo = $(".price__to");
  var instance;
  var min = 0;
  var max = 1000;
  var from = 0;
  var to = 0;

  $range.ionRangeSlider({
    type: "double",
    onStart: updateInputs,
    onChange: updateInputs,
    onFinish: updateInputs
  });
  instance = $range.data("ionRangeSlider");

  function updateInputs(data) {
    from = data.from;
    to = data.to;

    $inputFrom.prop("value", from);
    $inputTo.prop("value", to);
  }

  $inputFrom.on("change", function () {
    var val = $(this).prop("value");

    if (val < min) {
      val = min;
    } else if (val > to) {
      val = to;
    }

    instance.update({
      from: val
    });

    $(this).prop("value", val);

  });
  

  $inputTo.on("change", function () {
    var val = $(this).prop("value");

    if (val < from) {
      val = from;
    } else if (val > max) {
      val = max;
    }

    instance.update({
      to: val
    });

    $(this).prop("value", val);
  });


  $('.product-tabs__top-item').on('click', function (e) {
    e.preventDefault();
    $('.product-tabs__top-item').removeClass('product-tabs__top-item--active');
    $(this).addClass('product-tabs__top-item--active')

    $('.product-tabs__content-item').removeClass('product-tabs__content-item--active');
    $($(this).attr('href')).addClass('product-tabs__content-item--active');
  });

  $('.reviews__slider').slick({
    dots: true,
    infinite: false,
    prevArrow: '<button type="button" class="reviews__slider-arrow reviews__slider-arrow--prev ">\
    <svg class="reviews__slider-svg reviews__slider-svg--prev" width="10.831955" height="18.500000" viewBox="0 0 10.832 18.5" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">\
    <path class="reviews-slider__svg-animation" id="Vector" d="M8.19675 18.0492L0.450821 10.3032C-0.150276 9.6991 -0.150276 8.72314 0.450821 8.1189L8.19675 0.372925C8.77613 -0.124268 9.63285 -0.124268 10.2122 0.372925C10.8614 0.929077 10.9372 1.9082 10.3811 2.55737L3.73512 9.20337L10.3811 15.8649C10.9822 16.469 10.9822 17.4449 10.3811 18.0492C9.77692 18.6503 8.8009 18.6503 8.19675 18.0492Z" fill="#C2C2C2" fill-opacity="1.000000" fill-rule="nonzero"/>\
  </svg></button>',
    nextArrow: '<button type="button" class="reviews__slider-arrow reviews__slider-arrow--next ">\
    <svg class="reviews__slider-svg reviews__slider-svg--next" width="10.831955" height="18.500000" viewBox="0 0 10.832 18.5" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">\
    <path class="reviews-slider__svg-animation" id="Vector" d="M8.19675 18.0492L0.450821 10.3032C-0.150276 9.6991 -0.150276 8.72314 0.450821 8.1189L8.19675 0.372925C8.77613 -0.124268 9.63285 -0.124268 10.2122 0.372925C10.8614 0.929077 10.9372 1.9082 10.3811 2.55737L3.73512 9.20337L10.3811 15.8649C10.9822 16.469 10.9822 17.4449 10.3811 18.0492C9.77692 18.6503 8.8009 18.6503 8.19675 18.0492Z" fill="#C2C2C2" fill-opacity="1.000000" fill-rule="nonzero"/>\
  </svg>\</button>',
    appendArrows: '.arrows-wrap',
    responsive: [
      {
        breakpoint: 560,
        settings: {
          dots: false
        },
      },
    ],

  });

  $(window).on('load resize', function () {
    if ($(window).width() < 560) {
      $('.resto__items:not(.slick-initialized)').slick({
        arrows: false,
        dots: true,
        infinite: true,
        slidesToShow: 1
      });
    } else {
      $(".resto__items.slick-initialized").slick("unslick");
    }
  });

  $(window).on('load resize', function () {
    if ($(window).width() < 768) {
      $('.resto__items:not(.slick-initialized)').slick({
        arrows: false,
        dots: true,
        infinite: true,
        slidesToShow: 2
      });
    } else {
      $(".resto__items.slick-initialized").slick("unslick");
    }
  });

  $(window).on('load resize', function () {
    if ($(window).width() < 560) {
      $('.reviews__slider').slick({
        dots: false
      });
    }
  });

  $(window).on('load resize', function () {
    if ($(window).width() < 768) {
      $('.discounts__list:not(.slick-initialized)').slick({
        arrows: false,
        dots: true,
        infinite: true,
        slidesToShow: 1
      });
    } else {
      $(".discounts__list.slick-initialized").slick("unslick");
    }
  });


  $(window).on('load resize', function () {
    if ($(window).width() < 560) {
      $('.suggestion__list:not(.slick-initialized)').slick({
        arrows: false,
        dots: true,
        infinite: true,
        slidesToShow: 2
      });
    } else {
      $(".suggestion__list.slick-initialized").slick("unslick");
    }
  });

  $(window).on('load resize', function () {
    if ($(window).width() < 768) {
      $('.suggestion__list:not(.slick-initialized)').slick({
        arrows: false,
        dots: true,
        infinite: true,
        slidesToShow: 3
      });
    } else {
      $(".suggestion__list.slick-initialized").slick("unslick");
    }
  });

  $(window).on('load resize', function () {
    if ($(window).width() < 992) {
      $('.suggestion__list:not(.slick-initialized)').slick({
        arrows: false,
        dots: true,
        infinite: true,
        slidesToShow: 4
      });
    } else {
      $(".suggestion__list.slick-initialized").slick("unslick");
    }
  });

  $(window).on('load resize', function () {
    if ($(window).width() < 4080) {
      $('.suggestion__list:not(.slick-initialized)').slick({
        arrows: true,
        dots: false,
        infinite: true,
        slidesToShow: 5,
        prevArrow: '<button type="button" class="suggestion__arrow suggestion__arrow--prev">\
    <svg class="suggestion-svg suggestion-svg--prev" width="10.831955" height="18.500000" viewBox="0 0 10.832 18.5" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">\
    <path class="suggestion__svg-animation" id="Vector" d="M8.19675 18.0492L0.450821 10.3032C-0.150276 9.6991 -0.150276 8.72314 0.450821 8.1189L8.19675 0.372925C8.77613 -0.124268 9.63285 -0.124268 10.2122 0.372925C10.8614 0.929077 10.9372 1.9082 10.3811 2.55737L3.73512 9.20337L10.3811 15.8649C10.9822 16.469 10.9822 17.4449 10.3811 18.0492C9.77692 18.6503 8.8009 18.6503 8.19675 18.0492Z" fill="#C2C2C2" fill-opacity="1.000000" fill-rule="nonzero"/>\
  </svg></button>',
        nextArrow: '<button type="button" class="suggestion__arrow suggestion__arrow--next">\
    <svg class="suggestion-svg suggestion-svg--next" width="10.831955" height="18.500000" viewBox="0 0 10.832 18.5" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">\
    <path class="suggestion__svg-animation" id="Vector" d="M8.19675 18.0492L0.450821 10.3032C-0.150276 9.6991 -0.150276 8.72314 0.450821 8.1189L8.19675 0.372925C8.77613 -0.124268 9.63285 -0.124268 10.2122 0.372925C10.8614 0.929077 10.9372 1.9082 10.3811 2.55737L3.73512 9.20337L10.3811 15.8649C10.9822 16.469 10.9822 17.4449 10.3811 18.0492C9.77692 18.6503 8.8009 18.6503 8.19675 18.0492Z" fill="#C2C2C2" fill-opacity="1.000000" fill-rule="nonzero"/>\
  </svg>\</button>',
        appendArrows: '.arrows-wrap',
      });
    }
  });
  
  var mixer = mixitup('.popular-category__content');

  $(".product__rating, .comments__rating").rateYo({
    normalFill: "#c1c1c1",
    spacing: '6px',
    starWidth: '16px',
    ratedFill: '#FFB800',
    readOnly: true,
    starSvg: '<svg width="16.000000" height="16.000000" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">\
    <defs>\
      <clipPath id="clip3197_367">\
        <rect id="star 4" width="16.000000" height="16.000000" transform="matrix(-1 0 0 1 16 0)" fill="white" fill-opacity="0"/>\
      </clipPath>\
    </defs>\
    <rect id="star 4" width="16.000000" height="16.000000" transform="matrix(-1 0 0 1 16 0)" fill="#FFFFFF" fill-opacity="0"/>\
    <g clip-path="url(#clip3197_367)">\
      <path id="Vector" d="M0.02 6.16C0.07 5.99 0.22 5.87 0.4 5.84L5.36 5.12L7.57 0.62C7.65 0.46 7.82 0.36 7.99 0.36C8.17 0.36 8.34 0.46 8.42 0.62L10.63 5.12L15.59 5.84C15.77 5.87 15.92 5.99 15.97 6.16C16.03 6.33 15.98 6.52 15.85 6.64L12.26 10.14L13.11 15.08C13.14 15.25 13.07 15.43 12.93 15.54C12.84 15.6 12.75 15.63 12.65 15.63C12.57 15.63 12.5 15.61 12.43 15.57L8 13.24L3.56 15.57C3.4 15.66 3.21 15.64 3.07 15.54C2.92 15.43 2.85 15.25 2.88 15.08L3.73 10.14L0.14 6.64C0.01 6.52 -0.04 6.33 0.02 6.16Z" fill-rule="nonzero"/>\
    </g>\
  </svg>',
  });

  $(".comment-form__star").rateYo({
    normalFill: "#c1c1c1",
    spacing: '6px',
    starWidth: '16px',
    ratedFill: '#FFB800',
    starSvg: '<svg width="16.000000" height="16.000000" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">\
    <defs>\
      <clipPath id="clip3197_367">\
        <rect id="star 4" width="16.000000" height="16.000000" transform="matrix(-1 0 0 1 16 0)" fill="white" fill-opacity="0"/>\
      </clipPath>\
    </defs>\
    <rect id="star 4" width="16.000000" height="16.000000" transform="matrix(-1 0 0 1 16 0)" fill="#FFFFFF" fill-opacity="0"/>\
    <g clip-path="url(#clip3197_367)">\
      <path id="Vector" d="M0.02 6.16C0.07 5.99 0.22 5.87 0.4 5.84L5.36 5.12L7.57 0.62C7.65 0.46 7.82 0.36 7.99 0.36C8.17 0.36 8.34 0.46 8.42 0.62L10.63 5.12L15.59 5.84C15.77 5.87 15.92 5.99 15.97 6.16C16.03 6.33 15.98 6.52 15.85 6.64L12.26 10.14L13.11 15.08C13.14 15.25 13.07 15.43 12.93 15.54C12.84 15.6 12.75 15.63 12.65 15.63C12.57 15.63 12.5 15.61 12.43 15.57L8 13.24L3.56 15.57C3.4 15.66 3.21 15.64 3.07 15.54C2.92 15.43 2.85 15.25 2.88 15.08L3.73 10.14L0.14 6.64C0.01 6.52 -0.04 6.33 0.02 6.16Z" fill-rule="nonzero"/>\
    </g>\
  </svg>',
  });
});

var header = $(".header__top");
var scrollChange = 60;
$(window).scroll(function () {
  var scroll = $(window).scrollTop();

  if (scroll >= scrollChange) {
    header.addClass('header-sticky');
  } else {
    header.removeClass("header-sticky");
  }
});

const myCarousel = new Carousel(document.querySelector("#myCarousel"), {
  preload: 2,
  Dots: false
});

Fancybox.bind('[data-fancybox="gallery"]', {
  Thumbs: false,
  Toolbar: false,

  Carousel: {
    Dots: true,
    on: {
      change: (that) => {
        myCarousel.sildeTo(myCarousel.findPageForSlide(that.page), {
          friction: 0,
        });
      },
    },
  },
});


