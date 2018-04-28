<?include "header.php";?>
<div class="container">
  <div class="breadcrumb">
    <ul class='breadcrumb_body'>
      <li class="breadcrumb_body_item">
        <a class='breadcrumb_body_item_link'>Главная</a>
        <span class="breadcrumb_body_item_divider">—</span>
      </li>
      <li class="breadcrumb_body_item">
        <span class="breadcrumb_body_item_last">Доставка и оплата</span>
      </li>
    </ul>
  </div>
  <h1>Доставка и оплата</h1>
  <div class="delivery">
    <div class="catalog_pay_list catalog_pay_list_delivery">
      <?
      $pay=array('non_cash', 'cash', 'online', 'kiber');
      $name=array('Безналичная оплата', 'Наличными <br /> при доставке товара', 'Онлайн-оплата  картой', 'Оплата кибервалютой');
      for ($i=0; $i < 4; $i++) {?>
        <div class="catalog_pay_list_item">
          <a class="open_modal" data-pay="<?=$pay[$i]?>"><?=$name[$i]?></a>
        </div>
      <?}?>
    </div>

    <div class="delivery_advantages">
      <div class="delivery_advantages_item">
        <div class="delivery_advantages_item_title">
          Рассрочка без переплаты
        </div>
        <div class="delivery_advantages_item_text">
          Рассрочка на 6 месяцев позволяет не откладывать приобретение нужной вам продукции на какой-то срок, а заниматься строительством
          в самый сезон.
        </div>
      </div>
      <div class="delivery_advantages_item">
        <div class="delivery_advantages_item_title">
          Кредит
        </div>
        <div class="delivery_advantages_item_text">
          Мы сотрудничаем с «Хоум кредит», «Альфа банк», «Банк Траст». Ваша заявка направляется сразу в три банка, что увеличивает
          шансы на принятие положительного решения
        </div>
      </div>
      <div class="delivery_advantages_item">
        <div class="delivery_advantages_item_title">
          Различные варианты оплаты
        </div>
        <div class="delivery_advantages_item_text">
          Наличными в офисе компании
          Перевод на банковскую карту
          Платеж на расчетный счет компаниипо запросу.
        </div>
      </div>
    </div>

    <div class="delivery_text">
      <div class="delivery_text_item">
        Реквизиты для оплаты и краткая инструкция по осуществлению платежа выбранным способом отправляются клиенту по электронной почте.
        В случае необходимости вы можете уточнить интересующие детали у менеджеров фирмы по телефону. Обращаем ваше внимание, что сроки
        зачисления платежей на банковскую карту и расчетный счет компании составляют от 1 до 5 рабочих дней
        (в зависимости от банка-плательщика). Просим учитывать это при выборе соответствующего способа платежа.
      </div>
      <div class="delivery_text_item">
        Для повышения оперативности и качества обслуживания клиентов компания СМЗ разработала и на сегодняшний день успешно реализует
        собственную программу логистики, которая позволяет в короткие сроки доставлять заказанные вами товары по Самаре и Самарской области.
        Новая услуга от компании СМЗ — доставка и выгрузка продукции удобным способом: манипулятором или грузчиками.
      </div>
    </div>
    <div class="about_line_text">
      Мы за комплексный подход:<br>
      покупка; доставка; разгрузка!<br>
      <br>
      Экономьте свое время и деньги, <br>
      будьте спокойны за сохранность, приобретенного материала.<br>
    </div>
    <h3 class="about_portfolio_h3 about_portfolio_h3_delivery">Условия и стоимость доставки</h3>

    <div class="delivery_conditions">
      <div class="delivery_conditions_text">
        Транспортировка кровельных материалов и сопутствующих продуктов металлопроката осуществляется собственным транспортом компании, оборудованным специальным кузовом для перевозки изделий длиной до 4-7 метров и свыше 8 метров.<br />
        <br />
        <b>Стоимость доставки составляет:</b><br />
        По Самаре — от 700 рублей (без НДС);<br />
        По Самарской области — от 800 рублей (без НДС) в зависимости от расстояния.<br />
        <br />
        При заказе изделий длиной свыше 6-7 метров цена на доставку увеличивается, поэтому для расчета точной стоимости услуги просим вас предварительно связаться с менеджером и согласовать с ним все интересующие вас моменты транспортировки.
      </div>
      <div class="delivery_conditions_from">
        <h3 class="contacts_form_title">Расчет стоимости доставки</h3>
        <form method="post">
          <div class="contacts_form_body contacts_form_body_delivery">
            <div class="contacts_form_body_item">
              <label for="">Населенный пункт</label>
              <input type="text" name="" value="">
            </div>
            <div class="contacts_form_body_item">
              <label for="">Район</label>
              <input type="text" name="" value="">
            </div>
          </div>
          <div class="delivery_conditions_from_rezult">
            от&nbsp;<span>150</span>&nbsp;руб.
          </div>
        </form>
      </div>
    </div>

  </div>

</div>
<?include "footer.php";?>
