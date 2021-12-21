<?php
session_start ();
require_once "products.php";
?>


<?php
if (isset($_POST["id"])) {

    if (isset ($_SESSION["id"])){
        $_SESSION["id"][]= $_POST["id"];
    } else {
        $_SESSION["id"]=[$_POST["id"]];
    }
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Магазинчик у Лучика</title>
 </head>
 <body>


      <?php
      foreach ($products as $product) : ?>
          <h1>  <?php echo $product ["name"]."\n";?></h1>
          <h5> <?php echo $product["price"]."\n"; ?></h5>
          <form method="POST" action="index.php">
              <input type="hidden" name ="id" value ="<?=$product["id"]; ?>"/>
              <button type="submit">Add to cart</button>
          </form>
      <?php endforeach; ?>

<h6>Количество товаров в корзине :<?php echo count( $_SESSION["id"]);?></h6>
<a href="cart.php"> Перейти в корзину</a>


 </body>
</html>