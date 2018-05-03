<?include "header.php";?>
<div class="container">
  <div class="breadcrumb">
    <ul class='breadcrumb_body'>
      <li class="breadcrumb_body_item">
        <a class='breadcrumb_body_item_link'>Главная</a>
        <span class="breadcrumb_body_item_divider">—</span>
      </li>
      <li class="breadcrumb_body_item">
        <span class="breadcrumb_body_item_last">Каталог продукции</span>
      </li>
    </ul>
  </div>
  <h1>Продукция</h1>
  <div class="catalog">
    <div class="catalog_top">
      <div class="catalog_top_text">
        Самарский Металлопрофильный Завод — крупнейший производитель металлопроката повышенной прочности в Самарской области. А также комплексный поставщик материалов и всей сопутствующей продукции для строительства зданий и производства металлоконструкций. Максимальное удобство приобретения продукции для клиентов мы обеспечиваем за счет кратчайших сроков от момента обращения до отгрузки продукции, самой широкой сетью присутствия в Самарской области и дополнительными услугами: упаковкой, доставкой. Самарский Металлопрофильный Завод предлагает материалы, подобранные специально с учетом климатических особенностей.
      </div>
      <div class="catalog_top_btn">
        <a class="catalog_top_btn_price btn" href="#">Скачать прайс</a>
        <a class="catalog_top_btn_zakaz btn" href="#">Заказать замер/монтаж</a>
      </div>
    </div>
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
  </div>
  <div class="about_info_line"></div>
  <div class="catalog_pay">
    <h2 class="main_products_title">Способы оплаты</h2>
    <div class="catalog_pay_list">
      <?
      $pay=array('non_cash', 'cash', 'online', 'kiber');
      $name=array('Безналичная оплата', 'Наличными <br /> при доставке товара', 'Онлайн-оплата  картой', 'Оплата кибервалютой');
      for ($i=0; $i < 4; $i++) {?>
        <div class="catalog_pay_list_item">
          <a class="open_modal" data-pay="pay_<?=$pay[$i]?>"><?=$name[$i]?></a>
        </div>
        <div class="modal_body modal_body_pay" id="pay_<?=$pay[$i]?>">
          <div class="modal_body_set">
            <a class="modal_body_close" href="#">закрыть</a>
            <div class="modal_body_title">
              <?=$name[$i]?>
            </div>
            <div class="modal_body_text">
              Заключение Договора на оказание услуг и оплата на основе выставляемого вам счета.
            </div>
          </div>
        </div>
      <?}?>
    </div>
  </div>
</div>
<?include "footer.php";?>
