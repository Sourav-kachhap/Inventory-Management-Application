<?php
include "../inc/connection.php";

 $sellinvoice = $_POST['sellinvoice'];
 $name = $_POST['name'];
 $mobile = $_POST['mobile'];
 $address = $_POST['address'];
 $product_id = $_POST['product_id'];
 $product_price = $_POST['product_price'];
 $quantity = $_POST['quantity'];

 

 $query = "INSERT INTO `sell`(`sellinvoice`, `name`, `mobile`, `address`, `product_id`, `product_price`, `quantity`) VALUES ('$sellinvoice','$name','$mobile','$address','$product_id','$product_price','$quantity')";

 $res = mysqli_query($conn,$query);
 if($res){
    $_response['status'] = 'success';
    $_response['message'] = 'Product Sold';
 }
 header('Content-Type: application/json');
echo json_encode($_response);
?>