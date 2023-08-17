<?php
include "../inc/connection.php";
session_start();
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

$query = "SELECT * FROM `users` WHERE `username` = '$username' && `password`= '$password'";
$res = mysqli_query($conn , $query);
$row = mysqli_num_rows($res);
if($row == 1){
    $_SESSION['username'] = $username;
    $_response['status'] = 'success';
      
} else {
   $_response['status'] = 'error';
   $_response['message'] = 'Provide correct login details.';
}
header('Content-Type: application/json');
echo json_encode($_response);

?>  