<?php
include "../inc/connection.php";
$vendor_id = $_POST['vendorid'];
$query = "UPDATE `vendor` SET `status`='0' WHERE `id` = '$vendor_id'";
$res = mysqli_query($conn,$query);
if($res){
    $_response['status'] = 'success';
    
}

header('Content-Type: Application/json');
echo json_encode($_response);
?>