// (B) GET GPS COODINATES + DRAW MAP
    window.addEventListener("DOMContentLoaded", function () {
      // (B1) INSERT ACCESS TOKEN HERE!
      mapboxgl.accessToken = 'pk.eyJ1IjoibWhhZGltIiwiYSI6ImNraXltNnJubDQ0cnUzMnFqbmQ2Znh4YjkifQ.AFUXAumIQIiPG1Azq8X8RQ';

      navigator.geolocation.getCurrentPosition(
        // (B2) ON SUCCESSFULLY GETTING GPS COORDINATES
        function (pos) {
          // DRAW MAP
          let map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: [pos.coords.longitude, pos.coords.latitude],
            zoom: 13
          });
          // DRAW MARKER
          let marker = new mapboxgl.Marker()
            .setLngLat([pos.coords.longitude, pos.coords.latitude])
            .addTo(map);
        },

        // (B3) ON FAILING TO GET GPS COORDINATES 
        function (err) {
          console.log(err);
        },

        // (B4) GPS OPTIONS
        {
          enableHighAccuracy: true,
          timeout: 5000,
          maximumAge: 0
        }
      );
    });