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
if (!isset($_SESSION["id"])){?>
    <h5><?php echo "Ваша корзина пуста" ?></h5>

<?php }
else {

?>

<table border="1">
    <?php

        $countedItems = [];

        foreach ($_SESSION["id"] as $id_one){

            if (!isset ($countedItems [$id_one])){
                $countedItems[$id_one]=1;
            }
            else {
                $countedItems[$id_one]+=1;
     }

        }
    $total = 0;
     foreach($countedItems as $id_one=>$count){?>

    <tr>
        <th>
            <?php
                   echo $products[$id_one]["name"] ."\n";

             ?></th>

        <th>
            <?php
                 echo $products[$id_one]["price"] ."\n";
                 ?>
           </th>
        <th>
           <?php echo $count; ?>
        </th>
        <th>
           <?php $fullPrice=$count*$products[$id_one]["price"];
           echo $fullPrice;?>
        </th>

             <?php  $total =$total+$fullPrice; ?>

    </tr>
     <?php } ?>

</table>
<h1> <?php echo $total; ?></h1>
<?php } ?>
 </body>
</html>