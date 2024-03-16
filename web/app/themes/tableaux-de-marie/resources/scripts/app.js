import domReady from '@roots/sage/client/dom-ready';

import Swiper from 'swiper';
import 'swiper/css';


/**
 * Application entrypoint
 */
domReady(async () => {
  
  var gallery = new Swiper(".gallery-swiper", {
    slidesPerView: 4,
    centeredSlides: true,
    centeredSlidesBounds: true,
    spaceBetween: 30,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });

  var expo = new Swiper(".expo-swiper", {
    slidesPerView: 3,
    centeredSlides: true,
    centeredSlidesBounds: true,
    spaceBetween: 30,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });

});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
