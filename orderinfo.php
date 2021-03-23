<?php 

$item = $_POST['item'];
$price = $_POST['price'];
$qty = $_POST['qty'];

$cartItem = $_POST['cartItem'];
$cartPrice = $_POST['cartPrice'];
$cartQty = $_POST['cartQty'];

echo "Product " . $item . " Price " . $price . " Quantity " . $qty;

$product_info1="Product " . $item . " Price " . $price . " Quantity " . $qty;
$product_info2="Product " . $cartItem . " Price " . $cartPrice . " Quantity " . $cartQty;

$fp=fopen("use_record.txt","a+") or die("Unable to open file!");
fwrite($fp, $product_info1);
fclose($fp);
?>