<?include "header.php";?>
<div class="container">
  <div class="breadcrumb">
    <ul class='breadcrumb_body'>
      <li class="breadcrumb_body_item">
        <a class='breadcrumb_body_item_link'>Главная</a>
        <span class="breadcrumb_body_item_divider">—</span>
      </li>
      <li class="breadcrumb_body_item">
        <span class="breadcrumb_body_item_last">Инструкции</span>
      </li>
    </ul>
  </div>
  <h1>Инструкции</h1>
  <div class="instructions">

    <form action="index.html" method="post">
      <div class="instructions_search">
        <label class="instructions_search_label" for="instructions_search">Поиск по инструкциям</label>
        <input class="instructions_search_input" id="instructions_search" type="text" name="" value="" placeholder="Введите слово для поиска">
        <input class="instructions_search_btn" type="submit" name="" value="Искать">
      </div>
    </form>
    <?$names=array('Название инструкции', 'Название инструкции', 'Длинное название инструкции', 'Еще одно длинное название инструкции', 'Название инструкции')?>
    <? for ($i=0; $i < 5; $i++) {?>
      <div class="instructions_item">
        <a class="instructions_item_link" href="#"><?=$names[$i]?></a>
      </div>
    <?}?>

  </div>

</div>
<?include "footer.php";?>
