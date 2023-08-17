<?php
include "../inc/connection.php";

$invoice = $_POST['invoice'];
$vendor_id = $_POST['vendor_id'];
$product_id = $_POST['product_id'];
$product_price = $_POST['product_price'];
$quantity = $_POST['quantity'];

$query = "INSERT INTO `purchase`(`invoice`, `vendor_id`, `product_id`, `product_price`, `quantity`) VALUES ('$invoice','$vendor_id','$product_id','$product_price','$quantity')";

$res = mysqli_query($conn,$query);
if($res){
    $_response['status'] = 'success';
    $_response['message'] = 'Purchased Done';

}else {
    $_response['message'] = 'Error';
}
header('Content-Type: Application/json');
echo json_encode($_response);
?>