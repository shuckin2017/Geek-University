<h1>Cart:</h1>

  <? $i = 0;
  if (!empty($cart)) { ?>
    <div class="Gallery column start">
    <?foreach ($cart as $item): ?>
      <?
      $content = getGalleryContent($item['id_good']);
      $params['nameImg'] = $content['name'];
      $params['price'] = $content['price'];
      ?>
      <? $i++; ?>
      <div class="cart-item">
        <a class='photo' href='/preview/<?= $item['id_good'] ?>'>
          <span><?= $i ?></span>
          <div class="blackout"></div>
          <img src='../<?= fileSmallPath;
          if ($item['id_good'] < 10) {
            echo '0';
          }
          echo $item['id_good'] . '.jpg' ?>' width="150" height="100"/>
        </a>
        <strong><?=$content['name']?></strong>
        <label><?=$content['price']?>$</label>
        <a class="cart-del" href="/cart/delete/<?=$item['id_good']?>">[ x ]</a>
      </div>
    <? endforeach; ?>
    <a class="buttonAdd" href="/cart/order/">Order</a>
  <? } else { ?>
      <div class="Gallery column">
      <h2>Ваша корзина пуста,<br> Вперед за покупками!</h2>
  <? } ?>
</div>