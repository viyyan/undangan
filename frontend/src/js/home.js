//
// Home JS
//
import General from './src/libs/general';

(function() {
  'use strict';
  //
  // Run general scripts
  General();

  $('#promo').slick({
    dots: true,
    arrows: false,
    loop: true,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    centerMode: false,
  });
  
})();
    