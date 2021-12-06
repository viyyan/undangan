//
// Home JS
//
import General from './src/libs/general';

(function() {
  'use strict';
  //
  // Run general scripts
  General();
  
  var a = 0;
      $(window).scroll(function() {
      
        var oTop = $('#counter').offset().top - window.innerHeight;
        if (a == 0 && $(window).scrollTop() > oTop) {
          $('.count').each(function() {
            var $this = $(this),
              countTo = $this.attr('data-count');
            $({
              countNum: $this.text()
            }).animate({
                countNum: countTo
              },
      
              {
      
                duration: 3000,
                easing: 'swing',
                step: function() {
                  $this.text(Math.floor(this.countNum));
                },
                complete: function() {
                  $this.text(this.countNum);
                  //alert('finished');
                }
      
              });
          });
          a = 1;
        }
      
      });

      $(document).scroll(function() {
        var y = $(this).scrollTop();
        if (y > 300) {
          $('.footer__chat').fadeIn();
        } else {
          $('.footer__chat').fadeOut();
        }
      });

})();
    