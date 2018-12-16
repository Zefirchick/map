var myMap;

// Дождёмся загрузки API и готовности DOM.
ymaps.ready(init);

function init () {
    // Создание экземпляра карты и его привязка к контейнеру с
    // заданным id ("map").

    var myMap = new ymaps.Map('map', {
        center: [59.937, 30.313],
        controls: ['routeButtonControl','rulerControl'],
        zoom: 12
    }),
// Получим ссылку на элемент управления.
    control = myMap.controls.get('routeButtonControl');

// Программно установим начальную точку маршрута.
control.routePanel.state.set('from', 'Минск');
myMap.controls.add('zoomControl');
myMap.controls.add('geolocationControl');
myMap.controls.add('typeSelector');
myMap.controls.add('fullscreenControl');


}
