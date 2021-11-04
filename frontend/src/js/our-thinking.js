//
// Our Thinking JS
//
(function() {
  'use strict';

  const indicators = document.querySelectorAll('.slider .indicators .indicator')
  const arrowPrev = document.querySelector('.slider .arrows .arrow-prev')
  const arrowNext = document.querySelector('.slider .arrows .arrow-next')

  const handleIndicatorClick = (event) => {
    const indicator = event.target
    if (!isActive(indicator)) {
      removeActive()
      addActive(indicator)
      showSlide(indicator.dataset.slide)
    }
  }

  const handlePrevArrowClick = (event) => {
    let activeSlide = 0
    let newActiveSlide = indicators.length
    let ready = false

    indicators.forEach(indicator => {
      if (isActive(indicator) && !ready) {
        activeSlide = indicator.dataset.slide
        if (activeSlide !== '1') {
          newActiveSlide = parseInt(activeSlide) - 1
        }
        removeActive()
        addActive(document.querySelector(`.slider .indicators [data-slide='${newActiveSlide}']`))
        showSlide(newActiveSlide)
        ready = true
      }
    })
  }

  const handleNextArrowClick = (event) => {
    let activeSlide = 0
    let newActiveSlide = 1
    let ready = false

    indicators.forEach(indicator => {
      if (isActive(indicator) && !ready) {
        activeSlide = indicator.dataset.slide
        if (activeSlide !== indicators.length.toString()) {
          newActiveSlide = parseInt(activeSlide) + 1
        }
        removeActive()
        addActive(document.querySelector(`.slider .indicators [data-slide='${newActiveSlide}']`))
        showSlide(newActiveSlide)
        ready = true
      }
    })
  }

  indicators.forEach(indicator => {
    indicator.addEventListener('click', handleIndicatorClick)
  })

  arrowPrev.addEventListener('click', handlePrevArrowClick)
  arrowNext.addEventListener('click', handleNextArrowClick)

  function isActive (indicator) {
    return indicator.hasAttribute('active')
  }

  function removeActive () {
    document.querySelectorAll('.slider .indicators [active]').forEach(item => {
      item.removeAttribute('active')
    })
  }

  function addActive (indicator) {
    indicator.setAttribute('active', '')
  }

  function showSlide (newActiveSlide) {
    const newPosition = (100 * (newActiveSlide - 1)).toString()
    document.querySelector('.slider-inner').style.marginLeft = `-${newPosition}%`
  }

})();
 