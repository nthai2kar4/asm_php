
<?php
    session_start();
    require('admin/db.php');
    include_once('function.php');
    //them
    if(isset($_POST['addto'])){
        if(isset($_SESSION['cart'])){
            $myitem = array_column($_SESSION['cart'],'name');
            if(in_array($_POST['name'],$myitem)){
                echo "<script>alert('Sản phẩm đã có trong giỏ hàng');window.location.href='index1.php';</script>";
            }
            else{
                $count = count($_SESSION['cart']);
                $_SESSION['cart'][$count] = array('name' => $_POST['name'], 'price' => $_POST['price'], 'Quantity' =>1);
                echo "<script>
                alert('Sản phẩm đã được thêm');
                window.location.href='index1.php';
                </script>";
            }
        }
        else{
            $_SESSION['cart'][0] = array('name' => $_POST['name'], 'price' => $_POST['price'], 'Quantity' =>1);
            echo "<script>alert('Sản phẩm đã được thêm');window.location.href='index1.php';</script>";
        }
    }
    //xoa
    if(isset($_POST['removeItem'])){
        foreach($_SESSION['cart'] as $key => $value)
        {
            if($value['name']==$_POST['name'])
            {
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart'] = array_values($_SESSION['cart']);
                echo "<script>
                alert('Sản phẩm đã được xóa');
                window.location.href='my-cart.php';
                </script>";
            }
        }
    }
    //dat
   if(isset($_POST['deal'])){
    $query = "INSERT INTO `order_list` (`fullname`, `address`, `paymode`) VALUES ('$_POST[fullname]','$_POST[phonenum]','$_POST[pay]')";
    if(mysqli_query($con, $query)){

    }
    else{
        
    }
    }
?>