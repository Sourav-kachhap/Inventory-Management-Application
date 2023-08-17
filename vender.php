<?php
session_start();
if(isset($_SESSION['username'])){

} else {
   header("Location: index.php");
}
include "inc/header.php";
include "inc/navbar.php";

?>
<div class="container border border-solid bg-light mt-3">
    <span id ="msg"></span>
  <form class="input_form" id ="my_form">
    <div class="form-group">
      <label for="formGroupExampleInput">VENDOR CODE</label>
      <input type="text" class="form-control" id="vendor_code" />
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2">VENDOR NAME</label>
      <input type="text" class="form-control" id="vendor_name" />
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2">SHOP NAME</label>
      <input type="text" class="form-control" id="shop_name" />
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2">VENDOR MOBILE</label>
      <input type="text" class="form-control" id="vendor_mobile" />
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2">VENDOR ADDRESS</label>
      <input type="text" class="form-control" id="vendor_address" />
    </div>

    <button type="button" class="btn btn-success btn-lg btn-block" onclick = addvendor()>ADD VENDOR</button>
  </form>
</div>
<div class="container mt-5 border border-solid bg-light">
    <div id = "loadtabledata2"></div>
</div>


<?php
include "inc/footer.php";
?>
<script>loadvendor()</script>