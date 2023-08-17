<?php
include "../inc/connection.php";

$query = "SELECT * FROM `vendor` WHERE `status` = '1'";
$res = mysqli_query($conn , $query);
if(mysqli_num_rows($res)>0){
    echo '<table class="table mt-3">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">VENDOR CODE</th>
        <th scope="col">VENDOR NAME</th>
        <th scope="col">SHOP NAME</th>
        <th scope="col">VENDOR MOBILE</th>
        <th scope="col">VENDOR ADDRESS</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>';
    $i = "1";
    while($row = mysqli_fetch_assoc($res)){
        echo '<tr>
      <th scope="row">'.$i.'</th>
      <td>'.$row['vendor_code'].'</td>
      <td>'.$row['vendor_name'].'</td>
      <td>'.$row['shop_name'].'</td>
      <td>'.$row['vendor_mobile'].'</td>
      <td>'.$row['vendor_address'].'</td>
      <td><a href="update_vendor.php?id='.$row['id'].'" class="btn btn-outline-info">EDIT</a>
      <button class="btn btn-outline-danger" onclick = "deletevendor('.$row['id'].')">DELETE</button></td>
    </tr>
    <tr>';
    $i++;
    };
    echo ' </tbody>
    </table>';
} else {
    echo "NO VENDOR FOUND";
}
?>