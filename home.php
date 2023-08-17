<?php
session_start();
if(isset( $_SESSION['username'])){

}else{
    header('Location: index.php');
}
include "inc/header.php";
include "inc/navbar.php";?>

<div class="container ">
    <img class = "mx-auto d-block" src="https://podamibenepal.com/wp-content/uploads/2022/03/inventory-management-system-2.png" alt="">
</div>

<?php
include "inc/footer.php";
?>
