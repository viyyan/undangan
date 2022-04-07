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
            console.log(store);
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
