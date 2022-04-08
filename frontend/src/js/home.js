//
// Home JS
//
import General from './src/libs/general';

(function() {
  'use strict';
  //
  // Run general scripts 
  General();

  $(window).on("load",function(){
    $("#scrollbar").mCustomScrollbar(); 
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

  $(document).ready(function(){
		$("#rotate").tikslus360({imageDir:'assets/frontend/images/products',imageCount:18,imageExt:'png',canvasID:'canvas1',canvasWidth:800,canvasHeight:533,autoRotate:false});
	});

  

  var locations = [
    ["LOCATION_1", -6.175110,106.865036],
    ["LOCATION_2", -6.182671, 106.867989],
  ];

  var contactMap = L.map('contact-map').setView([-6.2489365, 106.8288992], 14);

  L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoiaXpueW4iLCJhIjoiY2t2a2I1OTkwZDJvdDMwbWFlZzBobjYzZCJ9.WpAhkHvQnt8OxXYJ22K9aw'
  }).addTo(contactMap);

  for (var i = 0; i < locations.length; i++) {
    marker = new L.map([locations[i][1], locations[i][2]])
      .bindPopup(locations[i][0])
      .addTo(contactMap);
  }

  var pointerUrl = 'assets/frontend/images/map-pointer.png';

  var mapPointer = L.icon({
    iconUrl: pointerUrl,
    iconSize: [75, 100], // size of the icon
  }).addTo(contactMap);;



  
  

  
})();
    