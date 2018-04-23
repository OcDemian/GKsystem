<?include "header.php";?>
<div class="container">
  <div class="breadcrumb">
    <ul class='breadcrumb_body'>
      <li class="breadcrumb_body_item">
        <a class='breadcrumb_body_item_link'>Главная</a>
        <span class="breadcrumb_body_item_divider">—</span>
      </li>
      <li class="breadcrumb_body_item">
        <span class="breadcrumb_body_item_last">Блог</span>
      </li>
    </ul>
  </div>
  <h1>Блог</h1>
  <div class="blogs">
    <?$imgs=array('/image/blog_1.png', '/image/blog_2.png', '/image/blog_3.png')?>
    <? for ($i=0; $i < 3; $i++) {?>
      <div class="blogs_item">
        <div class="blogs_item_img">
          <img src="<?=$imgs[$i]?>" alt="">
        </div>
        <div class="blogs_item_info">
          <div class="blogs_item_info_top">
            <span class="blogs_item_info_name">Александр Семёнов</span>
            <span class="blogs_item_info_date">3 марта 2018</span>
          </div>
          <h3 class="blogs_item_info_h3">Какой размер у строительного кирпича?</h3>
          <p class="blogs_item_info_text">Реквизиты для оплаты и краткая инструкция по осуществлению платежа выбранным способом отправляются клиенту по электронной почте. В случае необходимости вы можете уточнить интересующие детали у менеджеров фирмы по телефону. </p>
        </div>
      </div>
    <?}?>
  </div>
  <div class="stocks_more">
    <a class="stocks_more_btn btn" href="#">Показать еще</a>
  </div>
</div>
<?include "footer.php";?>
