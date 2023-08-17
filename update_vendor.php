<?php
session_start();
if(isset($_SESSION['username'])){

}else{
    header('Location: index.php');
}
include "inc/connection.php";
include "inc/header.php";
$vendor_id = $_GET['id'];

$query = "SELECT * FROM `vendor` WHERE `id` = '$vendor_id'";
$res = mysqli_query($conn , $query);
$row=mysqli_fetch_assoc($res);
?>
<div class="container border border-solid bg-light mt-3">
    <span id ="msg"></span>
  <form class="input_form" id ="my_form">
    <div class="form-group">
      <label for="formGroupExampleInput">VENDOR CODE</label>
      <input type="text" class="form-control" id="vendor_code" value="<?= $row['vendor_code']?>" />
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2">VENDOR NAME</label>
      <input type="text" class="form-control" id="vendor_name" value="<?= $row['vendor_name']?> "/>
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2">SHOP NAME</label>
      <input type="text" class="form-control" id="shop_name" value="<?= $row['shop_name']?>"/>
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2">VENDOR MOBILE</label>
      <input type="text" class="form-control" id="vendor_mobile" value="<?= $row['vendor_mobile']?> "/>
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2">VENDOR ADDRESS</label>
      <input type="text" class="form-control" id="vendor_address" value="<?= $row['vendor_address']?>" />
    </div>

    <button type="button" class="btn btn-success btn-lg btn-block" onclick = "updatevendor(<?=$vendor_id?>)">UPDATE VENDOR</button>
    <a href="vender.php" class="btn btn-danger btn-lg btn-block">BACK</a>
  </form>
</div>

<?php
include "inc/footer.php";
?>