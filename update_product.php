<?php
session_start();
include "inc/connection.php";
include "inc/header.php";
include "inc/navbar.php";

$user_id = $_GET['id'];

$query = "SELECT * FROM `product` WHERE `id` = '$user_id'";
$res = mysqli_query($conn , $query);
if(mysqli_num_rows($res)>0){
    $row = mysqli_fetch_assoc($res);
}

?>

<div class="container border border-solid bg-light mt-3">
<input type="text" class="form-control" id="product_id" hidden value = <?=$row['id'] ?> />
    <span id ="msg"></span>
  <form class="input_form" id ="my_form">
    <div class="form-group">
      <label for="formGroupExampleInput">Product Name</label>
      <input type="text" class="form-control" id="product_name" value = <?=$row['product_name'] ?> />
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2">Product Price</label>
      <input type="text" class="form-control" id="product_price" value = <?=$row['product_price'] ?> />
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2">Product Code</label>
      <input type="text" class="form-control" id="product_code" value = <?=$row['product_code'] ?> />
    </div>

    <button type="button" class="btn btn-success btn-lg btn-block" onclick = updateProduct()>UPDATE</button>

   <a href="product.php"><button type="button" class="btn btn-danger btn-lg btn-block" >BACK</button></a> 
  </form>
</div>


<?php include "inc/footer.php";?>