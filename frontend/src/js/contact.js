//
// Contact JS
//
import General from './src/libs/general';

(function() {
  'use strict';
    //
    // Run general scripts
    General();

  const contactMap = L.map('contact-map').setView([-6.2489365, 106.8288992], 14);

  L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoiaXpueW4iLCJhIjoiY2t2a2I1OTkwZDJvdDMwbWFlZzBobjYzZCJ9.WpAhkHvQnt8OxXYJ22K9aw'
  }).addTo(contactMap);

  const pointerUrl = `${ASSETS_ROOT_URL}map--pointer.png`;

  const mapPointer = L.icon({
    iconUrl: pointerUrl,
    iconSize: [32, 32], // size of the icon
  });
  L.marker([-6.2489365, 106.8288992], {icon: mapPointer}).addTo(contactMap);
})();
