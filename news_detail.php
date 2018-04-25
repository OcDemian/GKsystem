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
  <h1>Новые мощности СМЗ</h1>
  <div class="stock_detail">
    <div class="stock_detail_text">
      Реквизиты для оплаты и краткая инструкция по осуществлению платежа выбранным способом отправляются клиенту по электронной почте. В случае необходимости вы можете уточнить интересующие детали у менеджеров фирмы по телефону. Обращаем ваше внимание, что сроки зачисления платежей на банковскую карту и расчетный счет компании составляют от 1 до 5 рабочих дней (в зависимости от банка-плательщика). Просим учитывать это при выборе соответствующего способа платежа.
    </div>
    <div class="stock_detail_carusel">
      <?for ($i=0; $i < 4; $i++) {?>
        <div class="stock_detail_carusel_item">
          <img class="stock_detail_carusel_item_img" src="/image/news_detail.png" alt="">
        </div>
      <?}?>
    </div>
  </div>
<a class="stock_detail_btn btn" href="#">Назад, ко всем Акциям</a>
</div>
<?include "footer.php";?>
