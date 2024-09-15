import domReady from '@roots/sage/client/dom-ready';

import $ from 'jquery';
import Swiper from 'swiper';
import 'swiper/css';


/**
 * Application entrypoint
 */
domReady(async () => {
  /*------------------------------------------------------------------------*/
  /* SLIDER GALLERY HOMEPAGE -----------------------------------------------*/ 
  /*------------------------------------------------------------------------*/
  var gallery = new Swiper(".gallery-swiper", {
    slidesPerView: 1.5,
    centeredSlides: true,
    centeredSlidesBounds: true,
    spaceBetween: 0,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      200: {
        slidesPerView: 1.5,
      },
      576: {
        slidesPerView: 2.5,
      },
      768: {
        slidesPerView: 3.5,
      },
      1024: {
        slidesPerView: 4,
      },
      1280: {
        slidesPerView: 4,
      },
    },

  }); 
  /*------------------------------------------------------------------------*/
  /* !END SLIDER GALLERY HOMEPAGE ------------------------------------------*/
  /*------------------------------------------------------------------------*/

  /*------------------------------------------------------------------------*/
  /* SLIDER EXPO HOMEPAGE --------------------------------------------------*/
  /*------------------------------------------------------------------------*/
  var expo = new Swiper(".expo-swiper", {
    slidesPerView: 3,
    centeredSlides: false,
    centeredSlidesBounds: true,
    spaceBetween: 30,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      200: {
        slidesPerView: 1.5,
      },
      576: {
        slidesPerView: 2.5,
      },
      768: {
        slidesPerView: 2.5,
      },
      1024: {
        slidesPerView: 2.5,
      },
      1280: {
        slidesPerView: 2.5,
      },
    },
  });
  /*------------------------------------------------------------------------*/
  /* !END SLIDER EXPO HOMEPAGE ---------------------------------------------*/
  /*------------------------------------------------------------------------*/

  /*------------------------------------------------------------------------*/
  /* STICKY HEADER ---------------------------------------------------------*/
  /*------------------------------------------------------------------------*/
  const header = document.querySelector(".page-nav");
  const toggleClass = "is-sticky";
  window.addEventListener("scroll", () => {
    const currentScroll = window.pageYOffset;
    if (currentScroll > 150) {
      header.classList.add(toggleClass);
    } else {
      header.classList.remove(toggleClass);
    }
  });
  /*------------------------------------------------------------------------*/
  /* !END STICKY HEADER ----------------------------------------------------*/
  /*------------------------------------------------------------------------*/




  /*------------------------------------------------------------------------*/
  /* MENU ------------------------------------------------------------------*/
  /*------------------------------------------------------------------------*/
  const burger = document.querySelectorAll('.navbar-burger');
  const menu = document.querySelectorAll('.navbar-menu');
  const navItems = document.querySelectorAll('.navbar-items');
  if (burger.length && menu.length) {
      for (var i = 0; i < burger.length; i++) {
          burger[i].addEventListener('click', function() {
              for (var j = 0; j < menu.length; j++) {
                  menu[j].classList.toggle('hidden');
                  $(header).slideToggle( "fast", function() {
                    $('body').toggleClass('overflow-hidden');
                  });
              }
          });
      }
  }

  if (navItems.length && menu.length) {
    for (var i = 0; i < navItems.length; i++) {
      navItems[i].addEventListener('click', function() {
            for (var j = 0; j < menu.length; j++) {
                scrollTo(this, menu[j]);
                menu[j].classList.toggle('hidden');
                $(header).slideToggle( "fast", function() {
                  $('body').toggleClass('overflow-hidden');
                  });
            }
        });
    }
}

  // close
  const close = document.querySelectorAll('.navbar-close');
  const backdrop = document.querySelectorAll('.navbar-backdrop'); 

  if (close.length) {
      for (var i = 0; i < close.length; i++) {
          close[i].addEventListener('click', function() {
              for (var j = 0; j < menu.length; j++) {
                  menu[j].classList.toggle('hidden');
                  $(header).slideToggle( "fast", function() {
                    $('body').toggleClass('overflow-hidden');
                  });
              }
          });
      }
  }

  if (backdrop.length) {
      for (var i = 0; i < backdrop.length; i++) {
          backdrop[i].addEventListener('click', function() {
              for (var j = 0; j < menu.length; j++) {
                  menu[j].classList.toggle('hidden');
                  $(header).slideToggle( "fast", function() {
                    // Animation complete.
                  });
              }
          });
      }
  }
  /*------------------------------------------------------------------------*/
  /* !END MENU -------------------------------------------------------------*/
  /*------------------------------------------------------------------------*/

  $('.js-scrollTo').on('click touch', function(){
    scrollTo(this);
  })

});

function scrollTo(element, toHide = null){
  if (element.hash !== "") {
    event.preventDefault();

    var hash = element.hash;
 
    $('html, body').animate({
      scrollTop: $(hash).offset().top - $('header').height(),
    }, 800, function(){
      window.location.hash = hash;
      if(toHide !== ""){
        toHide.classList.toggle('hidden'); 
      }
    });
  } // End if
}

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
