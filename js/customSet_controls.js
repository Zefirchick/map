ymaps.ready(function () {
    var myMap = new ymaps.Map('map', {
            center: [55.751574, 37.573856],
            zoom: 9,
            controls: ['searchControl', 'typeSelector',  'fullscreenControl', 'routeButtonControl','zoomControl'']
        }, {
            searchControlProvider: 'yandex#search'
        });
});
