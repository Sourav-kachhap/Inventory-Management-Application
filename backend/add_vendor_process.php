<?php
include "../inc/connection.php";

$vendor_code = $_POST['vendor_code'];
$vendor_name = $_POST['vendor_name'];
$shop_name = $_POST['shop_name'];
$vendor_mobile = $_POST['vendor_mobile'];
$vendor_address = $_POST['vendor_address'];

$query = "INSERT INTO `vendor`( `vendor_code`, `vendor_name`, `shop_name`, `vendor_mobile`, `vendor_address`, `status`) VALUES ('$vendor_code','$vendor_name','$shop_name','$vendor_mobile','$vendor_address','1')";

$res = mysqli_query($conn , $query);
if($res){
    $_response['status'] = 'success';
    $_response['message'] = 'Vendor Added';
} else {
     $_response['message'] = 'Error' ;
}


header('Content-Type: Application/json');
echo json_encode( $_response);
?>