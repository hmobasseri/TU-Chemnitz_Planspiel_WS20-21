mapboxgl.accessToken = 'pk.eyJ1IjoibWhhZGltIiwiYSI6ImNraXltNnJubDQ0cnUzMnFqbmQ2Znh4YjkifQ.AFUXAumIQIiPG1Azq8X8RQ';
var map = new mapboxgl.Map({
    container: 'map', // container id
    style: 'mapbox://styles/mapbox/streets-v11',
    center: [40, 40], // starting position
    zoom: 1 // starting zoom
});

// Add zoom and rotation controls to the map.
map.addControl(new mapboxgl.NavigationControl());
