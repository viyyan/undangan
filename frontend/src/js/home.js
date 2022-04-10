//
// Home JS
//
import General from './src/libs/general';
import { getStores } from './src/services/general';
import Store from './src/components/Store';

(function() {
  'use strict';
  //
  // Run general scripts
  General();

  $(window).on("load",function(){
    $("#scrollbar").mCustomScrollbar();

    //hotspot plugin
    $('#hotspotImg').hotSpot({
      mainselector: '#hotspotImg',
      selector: '.hot-spot',
      imageselector: '.img-responsive',
      tooltipselector: '.tooltip',
      bindselector: 'hover'
    });
  });

  //tab
    const btn = [].slice.call(document.getElementsByTagName('button'))
    btn.forEach((item, index) => {
    item.addEventListener('click',function(){
      btn.forEach((item) => {item.classList.remove('active')})
      item.classList.add('active')
      document.getElementById('tab').setAttribute('data-tab', index)
    })
    }
  )

  $('.navigation ul li a').click(function(e) {

    $('.navigation ul li.active').removeClass('active');

    var $parent = $(this).parent();
    $parent.addClass('active');
    e.preventDefault();
  });

  //smooth scroll
  $('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top -120
        }, 500, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });

    //rotate plugin
    $("#rotate").tikslus360({imageDir:'assets/frontend/images/products',imageCount:18,imageExt:'png',canvasID:'canvas1',canvasWidth:800,canvasHeight:533,autoRotate:false});

    //slick carousel
    $('.slider-for').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
      slidesToShow: 3,
      slidesToScroll: 3,
      asNavFor: '.slider-for',
      dots: false,
      centerMode: false,
      focusOnSelect: true
    });


    let storeMap = L.map('contact-map').setView([-6.182671, 106.867989], 14);

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: 'pk.eyJ1IjoiaXpueW4iLCJhIjoiY2t2a2I1OTkwZDJvdDMwbWFlZzBobjYzZCJ9.WpAhkHvQnt8OxXYJ22K9aw'
    }).addTo(storeMap);


    let storeIcon = `assets/frontend/images/map-pointer.png`;

    let mapPointer = L.icon({
        iconUrl: storeIcon,
        iconSize: [75, 100],
        popupAnchor: [0, -15] // size of the icon
    });

    const onStoreClick = loc => {
        let stores = loc[2];
        stores.forEach(item => {
            item.classList.remove('active');
        });
        event.preventDefault();
        event.currentTarget.className += " active";
        if ( loc[0] != null ||  loc[1] != null) {
            storeMap.panTo(new L.LatLng(loc[0], loc[1]));
        }
    }

    var storeEl = new Store(onStoreClick).init();

    const renderMarkers = (stores, userLocation = null) => {
        stores.map( function(store, idx){
            if (store.lat != null || store.lng != null) {
                let storeMarker = L.marker([store.lat,store.lng], {icon: mapPointer})
                .bindPopup(store.name)
                .addTo(storeMap);
                var dist = "~";
                if (userLocation != null) {
                    dist = ((userLocation.distanceTo(storeMarker.getLatLng()))/1000).toFixed(1) + ' km';
                } else {
                    if (idx == 0) {
                        storeMap.panTo(storeMarker.getLatLng());
                    }
                }
            }
            storeEl.addStore(idx + 1, store);
        })
        $(window).on("load",function(){
            $("#scrollbar").mCustomScrollbar();
          });
    }

    const fetchStore = (userLocation = null) => {
        getStores().then(function (response) {
            renderMarkers(response.data.stores, userLocation)
        })
        .catch(function (error) {
            console.log(error);
        });
    }

    fetchStore()

})();
