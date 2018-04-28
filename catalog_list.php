<?include "header.php";?>
<div class="container">
  <div class="breadcrumb">
    <ul class='breadcrumb_body'>
      <li class="breadcrumb_body_item">
        <a class='breadcrumb_body_item_link'>Главная</a>
        <span class="breadcrumb_body_item_divider">—</span>
      </li>
      <li class="breadcrumb_body_item">
        <a class='breadcrumb_body_item_link'>Каталог продукции</a>
        <span class="breadcrumb_body_item_divider">—</span>
      </li>
      <li class="breadcrumb_body_item">
        <span class="breadcrumb_body_item_last">Листовой прокат</span>
      </li>
    </ul>
  </div>
  <h1>Листовой прокат</h1>
  <div class="catalog_list">
    <div class="catalog_list_top">
      <div class="catalog_list_top_text">
        <span>ГОСТ 19903-90</span>, <span>ГОСТ 14637-89</span><br />
        Используется для изготовления профилей различной формы, труб, машин, механизмов и других металлических конструкций.
        В продаже есть горячекатаные листы различной толщины и размеров.
      </div>
      <div class="stock_detail_carusel">
        <?for ($i=0; $i < 4; $i++) {?>
          <div class="stock_detail_carusel_item">
            <img class="stock_detail_carusel_item_img" src="/image/catalog_list.png" alt="">
          </div>
        <?}?>
      </div>
    </div>
    <div class="catalog_list_table">
      <?
      $text=array(
        'Используется для изготовления профилей различной формы, труб, машин, механизмов и других металлических конструкций. В продаже есть горячекатаные листы различной толщины и размеров.',
        'Применяется для изготовления профнастила, листов с перфорацией, которые затем будут применяться в конструкции стен и кровли. Также из холоднокатаных листов производят профилированные изделия. Иногда используется без дополнительной обработки.',
        'Маршевые лестницы, проходные мостики, мостки и площадки изготавливаются из просечно-вытяжного листа. Используются на объектах промышленности и в жилых строениях. Безопасны, так как обеспечивают хорошее сцепление с подошвой.'
      );
      for ($i=0; $i < 3; $i++) {?>
        <div class="catalog_list_table_item">
          <div class="catalog_list_table_item_text">
            <span class="catalog_list_table_item_text_name">Лист горячекатанный</span>
            <span class="catalog_list_table_item_text_gost">ГОСТ 19903-90, ГОСТ 14637-89</span>
            <p>
              <?=$text[$i]?>
            </p>
          </div>
          <div class="catalog_table">
            <div class="catalog_table_row title">
              <div class="catalog_table_row_col">
                Габариты
              </div>
              <div class="catalog_table_row_col">
                Длина
              </div>
              <div class="catalog_table_row_col">
                Вес
              </div>
            </div>
            <?for ($z=0; $z < 5; $z++) {?>
              <div class="catalog_table_row">
                <div class="catalog_table_row_col">
                  1250 х 1.5 мм
                </div>
                <div class="catalog_table_row_col">
                  2 500 мм
                </div>
                <div class="catalog_table_row_col">
                  37.5 кг
                </div>
              </div>
            <?}?>
          </div>
        </div>
      <?}?>
    </div>
  </div>
  <div class="about_info_line"></div>
  <div class="catalog_pay">
    <h2 class="main_products_title">Способы оплаты</h2>
    <div class="catalog_pay_list">
      <?
      $name=array('Безналичная оплата', 'Наличными <br /> при доставке товара', 'Онлайн-оплата  картой', 'Оплата кибервалютой');
      for ($i=0; $i < 4; $i++) {?>
        <div class="catalog_pay_list_item">
          <?=$name[$i]?>
        </div>
      <?}?>
    </div>
  </div>
</div>
<?include "footer.php";?>
