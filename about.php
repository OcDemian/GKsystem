<?include "header.php";?>
<div class="container">
  <div class="breadcrumb">
    <ul class='breadcrumb_body'>
      <li class="breadcrumb_body_item">
        <a class='breadcrumb_body_item_link'>Главная</a>
        <span class="breadcrumb_body_item_divider">—</span>
      </li>
      <li class="breadcrumb_body_item">
        <span class="breadcrumb_body_item_last">О компании</span>
      </li>
    </ul>
  </div>
  <h1>О компании</h1>
  <div class="about_carusel big_carusel">
    <?
    for ($i=0; $i < 4; $i++) {?>
      <div class="about_carusel_item">
        <img class="about_carusel_item_img" src="/image/about.png" alt="">
      </div>
    <?}?>
  </div>
  <div class="about_carusel_text">
    <div class="about_carusel_text_item">
      Самарский Металлопрокатный Завод (СМЗ) один из ведущих производителей изделий из рулонной стали в Поволжье и Самарской области.
      Весь металлопрокат изготовлен в соответствии с ГОСТ и имеет сертификаты. Наше производство выпускает профнастил с толщиной металла
      от 0,4 мм до 0,7 мм, поэтому у клиента всегда есть возможность приобретения продукции по приемлемой цене.
    </div>
    <div class="about_carusel_text_item">
      Наши менеджеры полностью универсальны. Оценить объем материала и произвести детальный расчет необходимой продукции можно как в офисе
      представительства так и на объекте. Менеджеры грамотно проконсультируют по количеству профнастила, саморезов, конька, профильной трубы
      и пр. Однако, не стоит забывать что замер крыши очень ответственное дело, которое необходимо поручать исключительно специалистам
      производящим монтаж вашей кровли.
    </div>
  </div>
  <div class="about_line_text">
    Для наших потенциальных клиентов,<br />
    мы всегда рады провести выездную консультацию совершенно бесплатно.
  </div>

  <h2 class="about_info_name">Самарский Металлопрофильный Завод — это:</h2>
  <div class="about_info">
    <div class="about_info_item">
      <div class="about_info_item_title">
        Более 8 лет на рынке Поволжья
      </div>
      <div class="about_info_item_text">
        Мы готовы делать скидки как для строительных бригад, при сотрудничестве на постоянной основе, так и для клиентов с большой разовой закупкой.
      </div>
    </div>
    <div class="about_info_item">
      <div class="about_info_item_title">
        Доставка за наш счет? Легко!
      </div>
      <div class="about_info_item_text">
        При заказе продукции на сумму от 30 000 р. через интернет магазин, мы осуществляем доставку по г. Самара бесплатно.
        Доставка осуществляется а/т «Газель», грузоподъемность не более 1,5 тонн и длинной кузова не более 6м.<br />
        При невозможности доставки данным а/т, клиентом производиться доплата, необходимая для доставки заказа, либо производиться
        скидка на продукцию сумме стоимости акционой доставки.
      </div>
    </div>
    <div class="about_info_item">
      <div class="about_info_item_title">
        Уемкальные распродажи
      </div>
      <div class="about_info_item_text">
        Специально для любителей скидок, несколько раз в месяц мы делаем уникальную распродажу на различные группы товаров.
        Находите всегда актуальные горячие предложения в каталоге или регистрируйтесь, и получите первыми информацию о лучших предложениях
        по электронной почте.
      </div>
    </div>
  </div>
  <div class="about_info_line"></div>
  <div class="about_portfolio">
    <h3 class="about_portfolio_h3">Портфолио</h3>
    <div class="about_portfolio_carusel big_carusel">
      <?
      for ($i=0; $i < 4; $i++) {?>
      <div class="about_portfolio_carusel_item">
        <img src="/image/portfolio.png" alt="">
        <span>Подпись к изображению</span>
      </div>
      <?}?>
    </div>
  </div>
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
</div>
<?include "footer.php";?>
