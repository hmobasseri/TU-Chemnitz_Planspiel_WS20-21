	mapboxgl.accessToken = 'pk.eyJ1IjoibWhhZGltIiwiYSI6ImNraXltNnJubDQ0cnUzMnFqbmQ2Znh4YjkifQ.AFUXAumIQIiPG1Azq8X8RQ';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [12.88539,50.94771],
        zoom: 8
    });

    map.addControl(
        new MapboxDirections({
            accessToken: mapboxgl.accessToken
        }),
        'top-left'
    );