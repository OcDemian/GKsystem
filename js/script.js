$('.stock_detail_carusel').slick({
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  adaptiveHeight: true
});

ymaps.ready(init);
        var myMap,
            myPlacemark;

        function init(){
            myMap = new ymaps.Map("map", {
                center: [53.18606907123726,50.151837499999985],
                zoom: 9
            });

            myPlacemark = new ymaps.Placemark([53.18606907123726,50.151837499999985], {
              hintContent: 'Собственный значок метки',
              balloonContent: 'Это красивая метка'
            },
              {
              iconLayout: 'default#image',
              iconImageHref: 'img/mark_map_use.png',
              iconImageSize: [28, 42],
              iconImageOffset: [-10, -50]
            });

            myMap.geoObjects.add(myPlacemark);
        }
