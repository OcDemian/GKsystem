<?include "header.php";?>
<div class="container">
  <div class="breadcrumb">
    <ul class='breadcrumb_body'>
      <li class="breadcrumb_body_item">
        <a class='breadcrumb_body_item_link'>Главная</a>
        <span class="breadcrumb_body_item_divider">—</span>
      </li>
      <li class="breadcrumb_body_item">
        <span class="breadcrumb_body_item_last">Новости</span>
      </li>
    </ul>
  </div>
  <h1>Новости</h1>
  <div class="stocks_list">
    <?for ($i=0; $i < 6; $i++) {?>
      <div class="stocks_list_item">
        <h3 class="stocks_list_item_title">Бесплатная услуга Строй Мастер</h3>
        <p class='stocks_list_item_text'>С 26 февраля по 31 марта 2018 г., в рамках беспрецедентной услуги «СТРОЙ-МАСТЕР», любой желающий может получить бесплатную консультацию, расчет и план строительства от профессионалов компании Самарский Металлопрофильный Завод.</p>
        <div class="stocks_list_item_info">
          <a class="stocks_list_item_info_btn btn" href="#">Подробнее</a>
          <span class="stocks_list_item_info_date">3 марта 2018</span>
        </div>
      </div>
    <?}?>
  </div>
  <div class="stocks_more">
    <a class="stocks_more_btn btn" href="#">Показать еще</a>
  </div>

</div>
<?include "footer.php";?>
