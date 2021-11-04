(function(){function r(e,n,t){function o(i,f){if(!n[i]){if(!e[i]){var c="function"==typeof require&&require;if(!f&&c)return c(i,!0);if(u)return u(i,!0);var a=new Error("Cannot find module '"+i+"'");throw a.code="MODULE_NOT_FOUND",a}var p=n[i]={exports:{}};e[i][0].call(p.exports,function(r){var n=e[i][1][r];return o(n||r)},p,p.exports,r,e,n,t)}return n[i].exports}for(var u="function"==typeof require&&require,i=0;i<t.length;i++)o(t[i]);return o}return r})()({1:[function(require,module,exports){
"use strict";

//
// Our Thinking JS
//
(function () {
  'use strict';

  var indicators = document.querySelectorAll('.slider .indicators .indicator');
  var arrowPrev = document.querySelector('.slider .arrows .arrow-prev');
  var arrowNext = document.querySelector('.slider .arrows .arrow-next');

  var handleIndicatorClick = function handleIndicatorClick(event) {
    var indicator = event.target;

    if (!isActive(indicator)) {
      removeActive();
      addActive(indicator);
      showSlide(indicator.dataset.slide);
    }
  };

  var handlePrevArrowClick = function handlePrevArrowClick(event) {
    var activeSlide = 0;
    var newActiveSlide = indicators.length;
    var ready = false;
    indicators.forEach(function (indicator) {
      if (isActive(indicator) && !ready) {
        activeSlide = indicator.dataset.slide;

        if (activeSlide !== '1') {
          newActiveSlide = parseInt(activeSlide) - 1;
        }

        removeActive();
        addActive(document.querySelector(".slider .indicators [data-slide='".concat(newActiveSlide, "']")));
        showSlide(newActiveSlide);
        ready = true;
      }
    });
  };

  var handleNextArrowClick = function handleNextArrowClick(event) {
    var activeSlide = 0;
    var newActiveSlide = 1;
    var ready = false;
    indicators.forEach(function (indicator) {
      if (isActive(indicator) && !ready) {
        activeSlide = indicator.dataset.slide;

        if (activeSlide !== indicators.length.toString()) {
          newActiveSlide = parseInt(activeSlide) + 1;
        }

        removeActive();
        addActive(document.querySelector(".slider .indicators [data-slide='".concat(newActiveSlide, "']")));
        showSlide(newActiveSlide);
        ready = true;
      }
    });
  };

  indicators.forEach(function (indicator) {
    indicator.addEventListener('click', handleIndicatorClick);
  });
  arrowPrev.addEventListener('click', handlePrevArrowClick);
  arrowNext.addEventListener('click', handleNextArrowClick);

  function isActive(indicator) {
    return indicator.hasAttribute('active');
  }

  function removeActive() {
    document.querySelectorAll('.slider .indicators [active]').forEach(function (item) {
      item.removeAttribute('active');
    });
  }

  function addActive(indicator) {
    indicator.setAttribute('active', '');
  }

  function showSlide(newActiveSlide) {
    var newPosition = (100 * (newActiveSlide - 1)).toString();
    document.querySelector('.slider-inner').style.marginLeft = "-".concat(newPosition, "%");
  }
})();

},{}]},{},[1]);
