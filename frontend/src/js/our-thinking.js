//
// Our Thinking JS
//
import General from './src/libs/general';

(function() {
  'use strict';
  //
  // Run general scripts
  General();

  $('.section__slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    dots: true,
  });

})();
  