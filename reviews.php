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
    $names=array('Александр, ООО «Синергия»', 'Олег', 'Александр, ООО «Синергия»', 'Олег');
    for ($i=0; $i < 4; $i++) {?>
    <div class="reviews_list_item">
      <div class="reviews_list_item_cont">
        <div class="reviews_list_item_info">
          <div class="reviews_list_item_info_name">
            <?=$names[$i]?>
          </div>
          <div id="reviews_list_item_<?=$i?>" class="reviews_list_item_info_text">
            <p>
            Реквизиты для оплаты и краткая инструкция по осуществлению платежа выбранным способом отправляются клиенту по электронной почте.
            В случае необходимости вы можете уточнить интересующие детали у менеджеров фирмы по телефону.
            Обращаем ваше внимание, что сроки зачисления платежей на банковскую карту и расчетный счет компании составляют от 1 до 5 рабочих
            дней (в зависимости от банка-плательщика). Просим учитывать это при выборе соответствующего способа платежа.
            Реквизиты для оплаты и краткая инструкция по осуществлению платежа выбранным способом отправляются клиенту по электронной почте.
            В случае необходимости вы можете уточнить интересующие детали у менеджеров фирмы по телефону.
            Обращаем ваше внимание, что сроки зачисления платежей на банковскую карту и расчетный счет компании составляют от 1 до 5 рабочих
            дней (в зависимости от банка-плательщика). Просим учитывать это при выборе соответствующего способа платежа.
            </p>
          </div>
        </div>
        <div class="stock_detail_carusel">
          <?for ($f=0; $f < 4; $f++) {?>
            <div class="stock_detail_carusel_item">
              <img class="stock_detail_carusel_item_img" src="/image/reviews_<?=$i?>.png" alt="">
            </div>
          <?}?>
        </div>
        <a class="reviews_list_item_btn btn" href="#" data-open="reviews_list_item_<?=$i?>" data-open-text="свернуть">Читать дальше</a>
      </div>
      <div class="reviews_list_answer">
        <div class="reviews_list_answer_name">
          Владимир, Самарский Металлопрофильный Завод
        </div>
        <div class="reviews_list_answer_text">
          Текст ответа
        </div>
      </div>
    </div>
    <?}?>
  </div>
  <div class="reviews_list_more">
    <a class="reviews_list_more_btn btn" href="#">Показать еще</a>
  </div>
  <div class="reviews_form">
    <h3 class="contacts_form_title">Оставить отзыв</h3>
    <form action="index.html" method="post">
      <div class="reviews_form_body">
        <div class="contacts_form_body_item">
          <label for="">Ваше имя</label>
          <input type="text" name="" value="">
        </div>
        <div class="contacts_form_body_item">
          <label for="">Название компании</label>
          <input type="text" name="" value="">
        </div>
        <div class="contacts_form_body_item reviews_text">
          <label for="">Текст отзыва</label>
          <input type="text" name="" value="">
        </div>
        <div class="contacts_form_body_item contacts_form_body_item_file">
          <label for="">Загрузка фотографий</label>
          <div class="contacts_form_body_item_file_list">
            <div class="contacts_form_body_item_file_list_item">
              <span>Название файла1.jpg</span>
              <a href="#">Удалить</a>
            </div>
            <div class="contacts_form_body_item_file_list_item">
              <span>Название файла2.jpg</span>
              <a href="#">Удалить</a>
            </div>
          </div>
          <a class="contacts_form_body_item_file_add btn" href="#">Загрузить еще фото</a>
        </div>
        <div class="contacts_form_body_btn contacts_form_body_btn_reviews">
          <input class="btn" type="submit" name="" value="Отправить">
        </div>
        <div class="contacts_form_body_agreement contacts_form_body_agreement_reviews">
          <p class="contacts_form_body_agreement_text">
            Нажимая кнопку «Отправить», вы принимаете <a>Пользовательское соглашение</a> и даёте <a>согласие на обработку персональных данных.</a>
          </p>
        </div>
      </div>
    </form>
  </div>
</div>
<?include "footer.php";?>
