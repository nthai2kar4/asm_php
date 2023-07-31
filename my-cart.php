<?php
  include('function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<table id="example1" class="table table-bordered table-striped">
                  <thead class="text-center">
                  <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Thành tiền</th>
                    <th scope="col">Hành động</th>
                  </tr>
                  </thead>
                  <tbody class="text-center">
                    <?php      
                    if(isset($_SESSION['cart'])){
                        foreach($_SESSION['cart'] as $key => $value)
                        { 
                            $id = $key+1;
                            $Price = number_format($value['price']);
                            echo "<tr>
                                    <td>$id</td>
                                    <td>$value[name]</td>
                                    <td>$Price
                                    <input type='hidden' class='iprice' value='$value[price]'>
                                    </td>
                                    <td><input class='text-center iquanlyti' type='number' onchange='subtotal()' $value[Quantity] min='1' max='10' value='1'</td>
                                    <td class='itotal'></td>
                                    <td>
                                    <form action='add-product.php' method='POST'> 
                                    <button name='removeItem' class='btn btn-sm btn-danger'>REMOVE</button>
                                    <input type='hidden' name='name' value='$value[name]'>
                                    </form>
                                    </td>
                                </tr>
                                ";                           
                        }
                      }
                    ?>
                  </tbody>
</table>
<div class="col-lg-3">
  <div class="border bg-light rouded p-4">
  <h3>Total: </h3>
  <h5 style="margin-left:350px;" id="gtotal"></h5>
  <?php
    if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
    {
  ?>
<form action="add-product.php" method="POST">
  <h3 class="text-center">Thanh toán</h3>
  <div>
    <label for="exampleInputEmail1" class="form-label">Họ và tên</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="fullname" require>
  </div>
  <div>
    <label for="exampleInputPassword1" class="form-label">Số điện thoại</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="phonenum" require>
  </div>
  <div>
    <label for="address" class="form-label">Địa chỉ</label>
    <input type="text" class="form-control" id="address" name="address" require>
  </div>
  <div>
    <label for="pay" class="form-label">Hình thức thanh toán</label>
    <input type="text" class="form-control" id="pay" name="pay" require>
  </div>
  <div class="mb-3 d-flex justify-content-center">
  <button type="submit" class="btn btn-primary m-3" name="deal">Đặt hàng</button>
  </div>
</form>
<?php
    }
?>
</div>
</div>
<script>
 var gt = 0;
 var gtotal = document.getElementById('gtotal');
 var iprice = document.getElementsByClassName('iprice');
 var iquanlyti = document.getElementsByClassName('iquanlyti');
 var itotal = document.getElementsByClassName('itotal');

function subtotal()
{
  gt = 0;
  for(i=0;i<iprice.length;i++)
  {
    var formattedNumber = numberWithCommas((iprice[i].value)*(iquanlyti[i].value));
    itotal[i].innerText = formattedNumber;
    gt = gt + (iprice[i].value)*(iquanlyti[i].value);
  }
  var hehe = numberWithCommas(gt);
  gtotal.innerText = hehe;
}
subtotal();

function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}
</script>
</body>
</html>
