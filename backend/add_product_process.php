<?php
include "../inc/connection.php";

$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
$product_code = $_POST['product_code'];

$query = "INSERT INTO `product`( `product_name`, `product_price`, `product_code`, `status`) VALUES ('$product_name','$product_price','$product_code','1')";

$res = mysqli_query($conn , $query);
if($res == true){
    $_response['status'] = 'success';
    $_response['message'] = 'Product Added';
    
} else {    

    $_response['status'] = 'error';
    $_response['message'] = 'Try Again';
}

header('Content-Type:Application/json');
echo json_encode( $_response);

?>