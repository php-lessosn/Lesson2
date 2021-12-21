<?php
session_start ();
require_once "products.php";
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Магазинчик у Лучика</title>
 </head>

<body>
<h1>Корзина</h1>
<?php
foreach ($_SESSION["id"] as $id_one) : ?>
<h2>  <?php echo $products[$id_one]["name"] ."\n";?></h2>

<?php endforeach; ?>
 </body>
</html>