<?php
  $strprice = "";
  $strSalePrice = "";
  $price = $row_sql['price'];
  $sale = $row_sql['sale'];
  $salePrice = $row_sql['saleprice'];
  if ($price == 0) {
      $pricebar = '
      <div class="price-bar">
        <p style = "margin: 0" class="price">Free</p>
      </div>'
      ;
  } else if ($sale == 0) {
    $strprice = "đ".number_format($price);

    $pricebar = '
    <div class="price-bar">
      <p style = "margin: 0" class="price">'.$strprice.'</p>
    </div>'
    ;

  } else {
    $salePercent = $row_sql['sale']*100;
    $pricebar = '
    <div class="price-bar">
      <p>
        <button class="btn btn-primary sale" type="button">-'.$salePercent.'%</button>
      </p>
      <p class="sale-price">đ'.number_format($price).'</p>
      <p class="price">đ'.number_format($salePrice).'</p>
    </div>'
    ;
  }
?>
<a href="index.php?site=details&id=<?php echo ''.$row_sql['gameid']?>" class="col-sm-3 game">
  <img src="<?php echo $row_sql['icon'] ?>" class="img-responsive" style="width: 100%" >   
  <p class="base" style="padding-top: 10px">BASE GAME</p>
  <p class="game-name"><?php echo $row_sql['gamename'] ?></p>
  <?php echo $pricebar ?>
</a>