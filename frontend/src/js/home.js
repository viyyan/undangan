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

  $(".leaf").animateSprite({
    fps: 10,
    animations: {
        walkRight: [0, 1, 2, 3, 4, 5, 6, 7, 6, 5, 4, 3, 2, 1, 0]
    },
    loop: true,
    complete: function(){
        // use complete only when you set animations with 'loop: false'
        alert("animation End");
    }
});

  
})();
    