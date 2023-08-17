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
<div class="container">
    <h1 class="text-center">STOCK REPORT</h1>
    <label for="formGroupExampleInput">SEARCH</label>
    <input class="form-control " type="text" id = "searchbyname">
    <div id = "stockloaddata">

    </div>
</div>
<hr>
<div class="container">
    <h1 class="text-center">SELL REPORT</h1>
    <label for="formGroupExampleInput">SEARCH</label>
    <input class="form-control " type="text" id = "searchbyname">
    <div id = "sellloaddata">

    </div>
</div>
<?php
include "inc/footer.php";
?>  
<script>stockloaddata()</script>