$('.stock_detail_carusel').slick({
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  adaptiveHeight: true
});

$('.about_carusel').slick({
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  adaptiveHeight: true
});

$('body').on('click', '.reviews_list_item_btn', function(e){
  e.preventDefault();
  var elem = $(this);
  var open_id='#'+elem.data('open');
  var text_open=elem.data('open-text') || 'свернуть';
  var text_close=elem.data('close-text') || 'читать дальше';
  if($(open_id).hasClass('open')){
    $(open_id).height('180');
    $(open_id).removeClass('open');
    setTimeout(function(){
      elem.html(text_close);
    }, 500);
  }else{
    haig=$(open_id+' p').height();
    $(open_id).height(haig);
    $(open_id).addClass('open');
    setTimeout(function() {
      elem.html(text_open);
    }, 500);
  }
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

            },
              {
              iconLayout: 'default#image',
              iconImageHref: 'img/mark_map_use.png',
              iconImageSize: [28, 42],
              iconImageOffset: [-10, -50]
            });

            myPlacemark2 = new ymaps.Placemark([53.90000544791377,51.218083999999976], {

            },
              {
              iconLayout: 'default#image',
              iconImageHref: 'img/mark_map.png',
              iconImageSize: [28, 42],
              iconImageOffset: [-10, -50]
            });

            myPlacemark3 = new ymaps.Placemark([53.50230419694198,50.41277999999997], {

            },
              {
              iconLayout: 'default#image',
              iconImageHref: 'img/mark_map.png',
              iconImageSize: [28, 42],
              iconImageOffset: [-10, -50]
            });

            myPlacemark4 = new ymaps.Placemark([52.980985170944805,49.431141499999974], {

            },
              {
              iconLayout: 'default#image',
              iconImageHref: 'img/mark_map.png',
              iconImageSize: [28, 42],
              iconImageOffset: [-10, -50]
            });

            myPlacemark5 = new ymaps.Placemark([53.37802922728638,51.354417], {

            },
              {
              iconLayout: 'default#image',
              iconImageHref: 'img/mark_map.png',
              iconImageSize: [28, 42],
              iconImageOffset: [-10, -50]
            });

            myMap.geoObjects.add(myPlacemark);
            myMap.geoObjects.add(myPlacemark2);
            myMap.geoObjects.add(myPlacemark3);
            myMap.geoObjects.add(myPlacemark4);
            myMap.geoObjects.add(myPlacemark5);
        }
