<?php

include "../inc/connection.php";

$vendor_code = $_POST['vendor_code'];
$vendor_name = $_POST['vendor_name'];
$shop_name = $_POST['shop_name'];
$vendor_mobile = $_POST['vendor_mobile'];
$vendor_address = $_POST['vendor_address'];
$vendor_id = $_POST['vendor_id'];
$query = "UPDATE `vendor` SET `vendor_code`='$vendor_code',`vendor_name`='$vendor_name',`shop_name`='$shop_name',`vendor_mobile`='$vendor_mobile',`vendor_address`='$vendor_address' WHERE `id` = '$vendor_id'";

$res = mysqli_query($conn,$query);
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