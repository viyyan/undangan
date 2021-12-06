/**
 * General scripts
 */
'use strict';

const General = () => {
  // $(window).scroll(function() {    
  //   var scroll = $(window).scrollTop();

  //   if (scroll >= 50) {
  //       $(".header").addClass("scroll");
  //   } else {
  //       $(".header").removeClass("scroll");
  //   }
  // });

  window.addEventListener('scroll', () => {
    const doc = document.documentElement;
    const top = (window.pageYOffset || doc.scrollTop)  - (doc.clientTop || 0);
    const headerEl = document.querySelector('.header');

    if (top >= 50) {
      headerEl.classList.add('scroll');
    } else {
      headerEl.classList.remove('scroll');
    }
  });

  //general vanila toogle class
  const el = document.querySelector('.mobile-button');
  const body = document.querySelector('body');

    el.onclick = function() {
      body.classList.toggle('active-menu_mobile');
    }
  };

export default General;
