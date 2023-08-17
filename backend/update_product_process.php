<?php

include "../inc/connection.php";

$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
$product_code = $_POST['product_code'];
$product_id = $_POST['product_id'];

$query = "UPDATE `product` SET `product_name`='$product_name',`product_price`='$product_price',`product_code`='$product_code' WHERE `id` = '$product_id'";

$res = mysqli_query($conn , $query);
if($res == true){
    $_response['status'] = 'success';
    $_response['message'] = 'Product Updated';
    
} else {    

    $_response['status'] = 'error';
    $_response['message'] = 'Try Again';
}

header('Content-Type: Application/json');
echo json_encode($_response);
?>