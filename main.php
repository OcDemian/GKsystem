<?include "header.php";?>
<div class="main_info">
  <h1 class="main_info_h1">Собственное производство<br />металлопроката</h1>
  <div class="main_info_ico">
    <div class="main_info_ico_item">
      <img src="/img/main_map.png" alt=""><br />
      <span>Более 8 лет на рынке Поволжья</span>
    </div>
    <div class="main_info_ico_item">
      <img src="/img/main_deliver.png" alt=""><br />
      <span>Доставка  за наш счет</span>
    </div>
    <div class="main_info_ico_item">
      <img src="/img/main_sale.png" alt="">
      <span>Уникальные  распродажи</span>
    </div>
    <div class="main_info_ico_item">
      <img src="/img/main_help.png" alt="">
      <span>Наши специалисты  могут всё!</span>
    </div>
  </div>
  <a class="main_info_btn btn" href="#">Скачать прайс</a>
  <div class="main_info_fon">
    <img src="/image/main_top.png" alt="">
  </div>
</div>
<div class="container">
  <div class="main_products">
    <h2 class="main_products_title">Продукция</h2>
    <div class="main_products_list">
      <?
      $text=array(
        'Профнастил',
        'Металлочерепица',
        'Штакетник',
        'Водосточная система',
        'Труба стальная',
        'Безопасность кровли',
        'Доборные мяэлементы',
        'Метизы',
        'Металлопрокат');
      for ($i=0; $i < 9; $i++) {?>
        <div class="main_products_list_item" style="background-image: url('/image/main_products_<?=$i?>.png');">
          <a class="main_products_list_item_fon" href="#">
            <?=$text[$i]?>
          </a>
          <div class="main_products_list_item_fon_blur" style="background-image: url('/image/main_products_<?=$i?>.png');"></div>
        </div>
      <?}?>
    </div>
    <div class="main_products_btn">
      <a class="main_products_btn_catalog btn" href="#">Каталог</a>
      <a class="main_products_btn_price_list btn" href="#">Скачать прайс</a>
    </div>
  </div>
  <div class="about_info_line"></div>
  <div class="main_news-stock">
    <h2 class="main_products_title">Акции и новости</h2>
    <div class="main_news-stock_carusel big_carusel">
      <?
      for ($i=0; $i < 4; $i++) {?>
        <div class="main_news-stock_carusel_item">
          <p class="main_news-stock_carusel_item_name">Бесплатная услуга «Строй-Мастер»</p>
          <p class="main_news-stock_carusel_item_text">
            С 26 февраля по 31 марта 2018 г., в рамках беспрецедентной услуги «СТРОЙ-МАСТЕР», любой желающий может получить бесплатную
            консультацию, расчет и план строительства от профессионалов компании Самарский Металлопрофильный Завод.
          </p>
          <a class="main_news-stock_carusel_item_link btn" href="#">подробнее</a>
        </div>
      <?}?>
    </div>
  </div>
</div>

<?include "footer.php";?>
