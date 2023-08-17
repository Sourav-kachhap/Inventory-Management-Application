<?php
include "../inc/connection.php";

$query = "SELECT * FROM `product` WHERE `status`= '1'";
$res = mysqli_query($conn , $query);
$i = 1;
if (mysqli_num_rows($res)>0){ echo '
<table class="table mt-3">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Price</th>
      <th scope="col">Product Code</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    '; while($row = mysqli_fetch_assoc($res)) {  echo '
    <tr>
      <th scope="row">'.$i.'</th>
      <td>'.$row['product_name'].'</td>
      <td>'.$row['product_price'].'</td>
      <td>'.$row['product_code'].'</td>
      <td>
        <a href="update_product.php?id='.$row['id'].'" class="btn btn-outline-info">EDIT</a>
        <button class="btn btn-outline-danger" onclick = "deleteProduct('.$row['id'].')">DELETE</button>
      </td>
    </tr>
    '; $i++; } echo '
  </tbody>
</table>
'; } else { "NO PRODUCT FOUND."; } ?>
