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
        <a class='breadcrumb_body_item_link'>Листовой прокат</a>
        <span class="breadcrumb_body_item_divider">—</span>
      </li>
      <li class="breadcrumb_body_item">
        <span class="breadcrumb_body_item_last">Арматура А500с</span>
      </li>
    </ul>
  </div>
  <h1>Арматура А500с</h1>
  <div class="catalog_list">
    <div class="catalog_list_top catalog_list_top_detail">
      <div class="catalog_list_top_text catalog_list_top_text_detail">
        <ul class="catalog_list_top_text_props">
          <li>Диаметр — 6 мм</li>
          <li>Длина — 1 м</li>
          <li>Вес — 1,5 кг</li>
        </ul>
        <hr />
        Арматура рифленная диаметром 6 мм – это одна из самых тонких разновидностей рифлёного металлопроката.
        У изделия диаметром 6 мм допускается использование однозаходных, а не двухзаходных винтовых выступов.
      </div>
      <div class="stock_detail_carusel">
        <?for ($i=0; $i < 4; $i++) {?>
          <div class="stock_detail_carusel_item">
            <img class="stock_detail_carusel_item_img" src="/image/catalog_list.png" alt="">
          </div>
        <?}?>
      </div>
    </div>
    <div class="catalog_list_top_target">
      <div class="catalog_list_top_target_text">
        <div class="catalog_list_top_target_text_title">
          Цели применения:
        </div>
        Этот вид металлопроката пользуется большой популярностью при изготовлении арматурных сеток, металлических каркасов, сеток,
        изготовленных с помощью метода сваривания, в строительстве, а также армировании металлических конструкций из бетона.
      </div>
      <div class="catalog_list_top_target_btn">
        <a class="catalog_list_top_target_btn_link btn open_modal" href="#" data-view="by_modal">Оформить заказ</a>
      </div>
    </div>
    <div class="catalog_list_top_can">
      <div class="catalog_list_top_can_title">
        Из неё могут быть изготовлены:
      </div>
      <ul class="catalog_list_top_can_title_list">
        <li>арматурные каркасы и сетки;</li>
        <li>сварные сетки;</li>
        <li>гидротехнические работы (пирсы, причалы, береговые укрепления);</li>
        <li>домостроение (кирпичное домостроение — фундамент, перекрытия, отливка сооружений);</li>
        <li>линейное строительство (дорожки, парковочные площадки);</li>
        <li>монтажные работы;</li>
        <li>капитальный ремонт зданий;</li>
        <li>производство ЖБИ;</li>
        <li>жилищно-коммунальное хозяйство;</li>
        <li>коттеджное строительство, ограждение дачных и приусадебных участков;</li>
        <li>изготовление каркасов парников, теплиц, клеток, загонов птичников;</li>
        <li>решетки на окна.</li>
      </ul>
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
    <div class="catalog_pay_list catalog_pay_list_delivery">
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
