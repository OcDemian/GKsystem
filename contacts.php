<?include "header.php";?>
<div class="container">
  <div class="breadcrumb">
    <ul class='breadcrumb_body'>
      <li class="breadcrumb_body_item">
        <a class='breadcrumb_body_item_link'>Главная</a>
        <span class="breadcrumb_body_item_divider">—</span>
      </li>
      <li class="breadcrumb_body_item">
        <span class="breadcrumb_body_item_last">Контакты</span>
      </li>
    </ul>
  </div>
  <h1>Контакты</h1>
  <div class="contacts_map" id="map" >
    <div class="contacts_map_info">
      <div class="contacts_map_info_name">
        Головной офис
      </div>
      <a class="contacts_map_info_phone" href="#">+7 (846) 200-70-70</a>
      <p class="contacts_map_info_adress">г. Самара, ул. Горная 6, ст. 1</p>
      <p class="contacts_map_info_chart">
        Режим работы: <br />
        с 9:00 до 18:00,<br />
        СБ-ВС — выходные
      </p>
      <a class="contacts_map_info_mail">info@gksistema.ru</a>
    </div>
  </div>

  <div class="branches">
    <div class="branches_title">
      Филиалы
    </div>
    <div class="branches_list">
      <?
      $gor=array('Сергиевский район,', 'Красный яр,', 'Безенчук,', 'Отрадный,');
      for ($i=0; $i < 4; $i++) {?>
        <div class="branches_list_item">
          <p class="branches_list_item_name"><?=$gor[$i]?></p>
          <p class="branches_list_item_obl">
            Самарская область,<br />
            «ТЦ Север» в ПГТ Суходол
          </p>
          <a class="branches_list_item_phone" href="#">+7 937 078 09 79</a>
          <p class="branches_list_item_info">
            Режим работы:<br />
            ПН — выходной<br />
            ВТ-СБ — с 9:00 до 18:00 <br />
            ВС — выходной
          </p>
        </div>
      <?}?>
    </div>
  </div>

  <div class="contacts_form">
    <h3 class="contacts_form_title">Запросить предложение</h3>
    <form class="" action="index.html" method="post">
      <div class="contacts_form_body">
        <div class="contacts_form_body_item">
          <label for="">Ваше имя</label>
          <input type="text" name="" value="">
        </div>
        <div class="contacts_form_body_item">
          <label for="">E-mail</label>
          <input type="text" name="" value="">
        </div>
        <div class="contacts_form_body_item">
          <label for="">Телефон</label>
          <input class="phone_mask" type="text" name="" value="">
        </div>
        <div class="contacts_form_body_item">
          <label for="">Адрес сайта</label>
          <input type="text" name="" value="">
        </div>
        <div class="contacts_form_body_item text">
          <label for="">Сообщение</label>
          <input type="text" name="" value="">
        </div>
        <div class="contacts_form_body_btn">
          <input class="btn" type="submit" name="" value="Отправить">
        </div>
        <div class="contacts_form_body_agreement">
          <p class="contacts_form_body_agreement_text">
            Нажимая кнопку «Отправить», вы принимаете <a>Пользовательское соглашение</a> и даёте <a>согласие на обработку персональных данных.</a>
          </p>
        </div>
      </div>
    </form>
  </div>

</div>
<?include "footer.php";?>
