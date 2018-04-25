<?include "header.php";?>
<div class="container">
  <div class="breadcrumb">
    <ul class='breadcrumb_body'>
      <li class="breadcrumb_body_item">
        <a class='breadcrumb_body_item_link'>Главная</a>
        <span class="breadcrumb_body_item_divider">—</span>
      </li>
      <li class="breadcrumb_body_item">
        <span class="breadcrumb_body_item_last">Отзывы</span>
      </li>
    </ul>
  </div>
  <h1>Отзывы</h1>

  <div class="reviews_list">
    <?
    for ($i=0; $i < 4; $i++) {?>
    <div class="reviews_list_item">
      <div class="reviews_list_item_info">

      </div>
      <div class="stock_detail_carusel">
        <?for ($i=0; $i < 4; $i++) {?>
          <div class="stock_detail_carusel_item">
            <img class="stock_detail_carusel_item_img" src="/image/reviews_1.png" alt="">
          </div>
        <?}?>
      </div>
    </div>
    <?}?>
  </div>
</div>
<?include "footer.php";?>
