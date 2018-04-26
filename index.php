<?include "header.php";?>

<style media="screen">
  .dev_menu{
    padding-left: 30%;
    list-style: disc;
  }

  .dev_menu li{
    margin-bottom: 10px;
  }

  .dev_menu li a{
    font-weight: bold;
  }

  .dev_menu li a:hover{
    cursor: pointer;
    text-decoration: underline;
    color:rgb(0, 140, 255);
  }
</style>

<ul class="dev_menu">
  <li>
    <a href="/main.php">Главная</a>
  </li>
  <li>
    <a target="_blank" href="/about.php">О компании</a>
  </li>
  <li>
    <a target="_blank" href="/stock.php">Акции</a>
  </li>
  <li>
    <a target="_blank" href="/stock_detail.php">Акция подробно</a>
  </li>
  <li>
    <a target="_blank" href="/blog.php">Блог</a>
  </li>
  <li>
    <a target="_blank" href="/instructions.php">Инструкции</a>
  </li>
  <li>
    <a target="_blank" href="/instructions_detail.php">Инструкция подробно</a>
  </li>
  <li>
    <a target="_blank" href="/news.php">Новости</a>
  </li>
  <li>
    <a target="_blank" href="/news_detail.php">Новость подробно</a>
  </li>
  <li>
    <a target="_blank" href="/reviews.php">Отзывы</a>
  </li>
  <li>
    <a target="_blank" href="/contacts.php">Контакты</a>
  </li>

</ul>

<?include "footer.php";?>
