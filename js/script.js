$(document).ready(function(){

  $('input.input-custom').styler();

  $('.main_top_slider').slick({
    dots: true,
    infinite: true,
    speed: 1000,
    autoplay: true,
    autoplaySpeed: 5000,
  });

  $('#new_carusel').slick({
    slidesToShow: 4,
    slidesToScroll: 4,
    infinite: false,
    speed: 1000,
    responsive: [
   {
     breakpoint: 1920,
     settings: {
       slidesToShow: 4,
       slidesToScroll: 4
     }
   },
   {
     breakpoint: 1000,
     settings: {
       slidesToShow: 2,
       slidesToScroll: 2
     }
   },
   {
     breakpoint: 640,
     settings: {
       slidesToShow: 1,
       slidesToScroll: 1
     }
   }
 ]
  });

  $('#popular_carusel').slick({
    slidesToShow: 4,
    slidesToScroll: 4,
    infinite: false,
    speed: 1000,
    responsive: [
   {
     breakpoint: 1920,
     settings: {
       slidesToShow: 4,
       slidesToScroll: 4
     }
   },
   {
     breakpoint: 1000,
     settings: {
       slidesToShow: 2,
       slidesToScroll: 2
     }
   },
   {
     breakpoint: 640,
     settings: {
       slidesToShow: 1,
       slidesToScroll: 1
     }
   }
 ]
  });

  $('body').on('click', '.catalog_carusel_item_cont_basket_link', function(){
    var parent = $(this).parent(".catalog_carusel_item_cont_basket")
    parent.toggleClass('click');
    return false;
  });

  $('body').on('click', '.history_body_title_text_detail', function(e){
    e.preventDefault();
    var op=$(this).attr('data_open');
    // $('.history_body_item').removeClass('open');
    $('#'+op).toggleClass('open');
    // $('#'+op).addClass('open');
    // alert(op);
  });

  $('#myTab a').click(function (e) {
    e.preventDefault();
    $(this).tab('show');
  });

  $('body').on('click', '.tovar_cointent_body_info_color a', function(e){
    e.preventDefault();
    $('.tovar_cointent_body_info_color a').removeClass('use');
    $(this).addClass('use');
  });

  $('body').on('click', '.tovar_cointent_body_info_size a', function(e){
    e.preventDefault();
    $('.tovar_cointent_body_info_size a').removeClass('use');
    $(this).addClass('use');
  });

  $('.tovar_cointent_body_photos_big').slick({
   slidesToShow: 1,
   slidesToScroll: 1,
   arrows: false,
   fade: true,
   asNavFor: '.tovar_cointent_body_photos_nav'
  });

  $('.tovar_cointent_body_photos_nav').slick({
   slidesToShow: 3,
   slidesToScroll: 1,
   asNavFor: '.tovar_cointent_body_photos_big',
   dots: false,
   centerMode: true,
   focusOnSelect: true
  });

  $('body').on('click', '.catalog_carusel_item_cont_color a', function(e){
    e.preventDefault();
    $('.catalog_carusel_item_cont_color a').removeClass('use');
  });

  $('body').on('click', '.list_tovar_top_hide_filter', function(e){
    e.preventDefault();
    $('.list_tovar_filter').toggle();
  });

  $("#slider-range").slider({
  range: true,
  min: 2000,
  max: 30000,
  values: [2000, 30000],
  step: 50,
  slide: function(event, ui) {
    $("#rub-left").val(ui.values[0]); // текст левого span
    $("#rub-right").val(ui.values[1]); // текст правого span


    if (ui.handleIndex === 0) {
      // потянули левый ползунок - переместим левый span
      //$("#rub-left").css('margin-left', ui.handle.style.left);
    } else {
      // потянули правый ползунок - переместим правый span
      //$("#rub-right").css('margin-left', ui.handle.style.left);
    }

  }

});

 // $('#rub-left, #rub-right').mask('000.000.000.000.000,00', {reverse: true});
// $('#rub-left').mask("000 000 000 000", {reverse: true});

  $('.phone_mask').mask("+7 (000) 000 - 00 - 00", {placeholder: "+7 ( _ _ _ ) _ _ _ - _ _ - _ _"});

  $('#rub-left, #rub-right').on('input',function(){
    var ids = $(this).attr('id');
    var val_ot, val_do;
    if(ids=='rub-left'){
      val_ot=$(this).val();
      val_do=$('#rub-right').val();
      var testus = $("#slider-range").slider("values", 1);
      if(val_do<1){
        val_do=testus
      }
    }else if(ids=='rub-right'){
      val_do=$(this).val();
      val_ot=$('#rub-left').val();
      var testus = $("#slider-range").slider("values", 0);
      if(val_ot<1){

        val_ot=testus
      }
    }
    console.log(val_ot);
    console.log(val_do);
    console.log(testus);
    $( "#slider-range" ).slider({
      values: [val_ot,val_do]
    });
  });

  // задать начальный текст левого span
  // $("#rub-left").val($("#slider-range").slider("values", 0));
  // задать начальный текст правого span
  // $("#rub-right").val($("#slider-range").slider("values", 1));


  $('body').on('click', '.menu_desk_mob', function(e){
    e.preventDefault();
    $('ul.menu').toggleClass('open');
  });

  $('body').on('click', '.menu_catalog_btn', function(e){
    var wid= $(window).width();
    if(wid>983){

    }else{
      e.preventDefault();
      $('.menu_catalog_mob').toggleClass('open');
    }

  });

  $('body').on('click', '.open_modal', function(e){
    e.preventDefault();
    var modal= $(this).attr('data_modal');
    $('.mobal_back').fadeIn();
    $('#'+modal).fadeIn();
    console.log(modal);
  });

  $('body').on('click', '.mobal_back, .mobal_castom_close', function(e){
    e.preventDefault();
    $('.mobal_back').fadeOut();
    $('.mobal_castom').fadeOut();
  });

    $( "#payment_method" ).selectmenu();

    $( "#delivery_method" ).selectmenu();

    $(".tovar_cointent_body_photos_big_item_zoom").imagezoomsl({

         zoomrange: [3, 3]
      });
});
