<?php
include "../inc/connection.php";

$user_id = $_POST['userid'];

$query = "UPDATE `product` SET `status`='0' WHERE `id` = '$user_id'";
$res = mysqli_query($conn , $query);
if($res){
    $_response['status'] = "success";
    $_response['message'] = "Product Deleted";
} else {
    $_response['message'] = "Error";
}

header('Content-Type: Application/json');
echo json_encode($_response);
?>  