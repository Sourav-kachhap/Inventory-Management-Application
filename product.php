<?php 
session_start();
if(isset($_SESSION['username'])){

} else {
    header('Location: index.php');
}
include "inc/header.php";
include "inc/navbar.php";
?>
<div class="container border border-solid bg-light mt-3">
    <span id ="msg"></span>
  <form class="input_form" id ="my_form">
    <div class="form-group">
      <label for="formGroupExampleInput">Product Name</label>
      <input type="text" class="form-control" id="product_name" />
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2">Product Price</label>
      <input type="text" class="form-control" id="product_price" />
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2">Product Code</label>
      <input type="text" class="form-control" id="product_code" />
    </div>

    <button type="button" class="btn btn-success btn-lg btn-block" onclick = addproduct()>ADD PRODUCT</button>
  </form>
</div>
<div class="container mt-5 border border-solid bg-light">
    <div id = "loadtabledata"></div>
</div>

<?php
include "inc/footer.php";
?>

<Script>loadProduct();</Script>