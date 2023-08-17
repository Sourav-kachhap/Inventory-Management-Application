<?php
session_start();
if(isset($_SESSION['username'])){

} else {
    header('location: index.php');
}
include "inc/connection.php";
include "inc/header.php";
include "inc/navbar.php";

?>
<div class="container border border-solid bg-light mt-3">
<span id ="msg"></span>
<form class="input_form" id ="my_form" >
<label for="formGroupExampleInput">ENTER INVOICE NO</label>
<input class="form-control " type="text" id = "invoice">
<label for="formGroupExampleInput">SELECT SHOP NAME</label>
<select class="form-control" id = "select_shop">
  <option>Default Value</option>
  <?php
  $query = "SELECT * FROM `vendor` WHERE `status` = '1'";
  $res = mysqli_query($conn,$query);
  if(mysqli_num_rows($res)){
    while($row = mysqli_fetch_assoc($res)){
        echo '<option value = "'.$row['id'].'-'.$row['vendor_name'].'-'.$row['vendor_mobile'].'">'.$row['shop_name'].'</option>';
    }
  }
  ?>
</select>
<input class="form-control" type="text" id = "vendor_id" readonly hidden>
<label for="formGroupExampleInput">VENDOR NAME</label>
<input class="form-control" type="text" id = "vendor_name" readonly>
<label for="formGroupExampleInput">VENDOR MOBILE</label>
<input class="form-control" type="text" id = "vendor_mobile" readonly>
<hr>
<label for="formGroupExampleInput">SELECT PRODUCT NAME</label>
<select class="form-control" id = "select_product">
  <option>Default Value</option>
  <?php
  $query = "SELECT * FROM `product` WHERE `status` = '1'";
  $res = mysqli_query($conn,$query);
  if(mysqli_num_rows($res)){
    while($row = mysqli_fetch_assoc($res)){
        echo '<option value ="'.$row['id'].'-'.$row['product_price'].'">'.$row['product_name'].'</option>';
    }
  }
  ?>
</select>
<input class="form-control" type="text" id = "product_id" readonly hidden>
<label for="formGroupExampleInput">PRICE</label>
<input class="form-control" type="text" id = "product_price" readonly>
<label for="formGroupExampleInput">ENTER QUANTITY</label>
<input class="form-control" type="text" id="quantity" >
<span id = "total"></span>
<button class = "btn btn-success btn-block mt-3" onclick = purchase()>PURCHASE</button>
</form>
</div>


<?php
include "inc/footer.php";
?>  