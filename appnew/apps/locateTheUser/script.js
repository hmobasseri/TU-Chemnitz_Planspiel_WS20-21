mapboxgl.accessToken = 'pk.eyJ1IjoibWhhZGltIiwiYSI6ImNraXltNnJubDQ0cnUzMnFqbmQ2Znh4YjkifQ.AFUXAumIQIiPG1Azq8X8RQ';
var map = new mapboxgl.Map({
    container: 'map', // container id
    style: 'mapbox://styles/mapbox/streets-v11',
    center: [40, 45.8], // starting position
    zoom: 1 // starting zoom
});

// Add geolocate control to the map.
map.addControl(
    new mapboxgl.GeolocateControl({
        positionOptions: {
            enableHighAccuracy: true
        },
        trackUserLocation: true
    })
);
