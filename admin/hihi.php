<?php
require('db.php');
if (isset($_POST['saveAdd'])) {
    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $content = $_POST['content'];
    $thumbnail = $_FILES['thumbnail']['name'];
    $price = $_POST['price'];
    $sale_price = $_POST['sale_price'];
    $uploadedFile = $_FILES['thumbnail'];
     
    // Kiểm tra xem có lỗi xảy ra không
    if ($uploadedFile['error'] === UPLOAD_ERR_OK) {
        $tempName = $uploadedFile['tmp_name'];

        // Xác định tên file mới
        $originalName = basename($uploadedFile['name']);
        $extension = pathinfo($originalName, PATHINFO_EXTENSION);
        $newFileName = uniqid() . '_' . $originalName; // Thêm một giá trị duy nhất vào tên file

        // Thư mục lưu trữ ảnh
        $uploadDir = 'uploads/';

        // Di chuyển file ảnh đến thư mục lưu trữ
        if (move_uploaded_file($tempName, $uploadDir . $newFileName)) {
            // Trả về đường dẫn ảnh mới
            $thumbnail = $uploadDir . $newFileName;
        } else {
            echo "Có lỗi xảy ra khi lưu trữ file ảnh.";
        }
    } else {
        echo "Có lỗi xảy ra trong quá trình upload ảnh.";
    }
    $query = "INSERT INTO products (name, slug, content,thumbnail, price, sale_price) VALUES ('$name', '$slug', '$content','$thumbnail','$price', '$sale_price')";
      $sql = $connect->query($query);
      if ($sql) {
         header('Location: list-product.php');
      }
      else{
       echo'dd';
      }
     }
     $sqly = "SELECT thumbnail FROM products";
     $result = $con->query($sqly);
  
?>