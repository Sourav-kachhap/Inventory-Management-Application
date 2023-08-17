<?php
include "../inc/connection.php";

$query = "SELECT `purchase`.`quantity`, `product`.`product_name`, `product`.`product_code`,`product`.`product_price` FROM `purchase` JOIN `product` ON `purchase`.`product_id` = `product`.`id`";

$res = mysqli_query($conn,$query);
if(mysqli_num_rows($res)>0){
    $_response['stockdata1'] = 
'<table class="table mt-3">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Product Name</th>
        <th scope="col">Product Price</th>
        <th scope="col">Product Code</th>
        <th scope="col">Quantity</th>
      </tr>
    </thead>
    <tbody>';
    $i = 1;
    $_response['stockdata2'] = '';
    while($row=mysqli_fetch_assoc($res)){
        $_response['stockdata2'] .= 
         ' <tr>
        <th scope="row">'.$i.'</th>
        <td>'.$row['product_name'].'</td>
        <td>'.$row['product_price'].'</td>
        <td>'.$row['product_code'].'</td>
        <td>'.$row['quantity'].'</td>
      </tr>';
      $i++;
    };
    $_response['stockdata3'] = 
    '  </tbody>
    </table>';

}

$query2 = "SELECT `sell`.*, `product`.`product_name` FROM `sell` JOIN `product` ON `sell`.`product_id` = `product`.`id`";
$res2 = mysqli_query($conn,$query2);
if(mysqli_num_rows($res2)){
   $_response['selldata1'] = '
   <table class="table mt-3">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Sell Invoice</th>
        <th scope="col">Name</th>
        <th scope="col">Mobile</th>
        <th scope="col">Address</th>
        <th scope="col">Product Name</th>
        <th scope="col">Product Price</th>
        <th scope="col">Quantity</th>
      </tr>
    </thead>
    <tbody>
   ';
   $i = 1;
   $_response['selldata2'] = '';
   while($row = mysqli_fetch_assoc($res2)){
    $_response['selldata2'] .= '<tr>
    <th scope="row">'.$i.'</th>
    <td>'.$row['sellinvoice'].'</td>
    <td>'.$row['name'].'</td>
    <td>'.$row['mobile'].'</td>
    <td>'.$row['address'].'</td>
    <td>'.$row['product_name'].'</td>
    <td>'.$row['product_price'].'</td>
    <td>'.$row['quantity'].'</td>
  </tr>';
   }
   $_response['selldata3'] = '  </tbody>
   </table>';
}
header('Content-Type: Application/json');
echo json_encode($_response);
?>
	
   
	
	
	
	
	
