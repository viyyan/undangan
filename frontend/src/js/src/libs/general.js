/**
 * General scripts
 */
'use strict';

const General = () => {
  $(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 50) {
        $(".header").addClass("scroll");
    } else {
        $(".header").removeClass("scroll"); 
    }
});
};

export default General;
