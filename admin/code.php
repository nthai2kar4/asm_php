<?php
require('db.php');
if (isset($_POST['saveChange'])) {
    $name = $_POST['name'];
    $year = $_POST['year'];
    $idsv = $_POST['idsv'];
    // truy vấn
    $query = "INSERT INTO users (name, email, password) VALUES ('$name', '$year', '$idsv')";
     $sql = mysqli_query($con, $query);
     if ($sql) {
        header('Location: username.php');
     }
}

if(isset($_POST['editUser'])){
   $users_id = $_POST['users_id'];
   $name = $_POST['name'];
   $year = $_POST['year'];
   $idsv = $_POST['idsv'];

   $query= "UPDATE users SET name = '$name', email = '$year', password = '$idsv' WHERE id = '$users_id'";
   $query_run = mysqli_query($con, $query);

   if($query_run){
      $_SESSION['status'] = "Success";
      header('Location: username.php');
   }
   else{
      $_SESSION['status'] = "fail";
      header('Location: username.php');
   }
}

if(isset($_POST['dlUser'])){
   $userid = $_POST['delete_id'];
   $query = "DELETE FROM users WHERE id = '$userid' ";
    
   $query_run = mysqli_query($con, $query);

   if($query_run){
      $_SESSION['status'] = "Success";
      header('Location: username.php');
   }
   else{
      $_SESSION['status'] = "fail";
      header('Location: username.php');
   }
}

if(isset($_POST['editProduct'])){
   $products_id = $_POST['products_id'];
   $name = $_POST['name'];
    $slug = $_POST['slug'];
    $content = $_POST['content'];
    $thumbnail = $_FILES['thumbnail']['name'];
    $price = $_POST['price'];
    $sale_price = $_POST['sale_price'];
    $uploadedFile = $_FILES['thumbnail'];
   if ($uploadedFile['error'] === UPLOAD_ERR_OK) {
      $tempName = $uploadedFile['tmp_name'];

      // Xác định tên file mới
      $originalName = basename($uploadedFile['name']);
      $extension = pathinfo($originalName, PATHINFO_EXTENSION);
      $newFileName = uniqid() . '_' . $originalName; // Thêm một giá trị duy nhất vào tên file~
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
   $thumbnail = $_POST['image'];
  }
    $query = "UPDATE products SET name = '$name', slug = '$slug', content = '$content', thumbnail = '$thumbnail', price = '$price', sale_price = '$sale_price' WHERE id = '$products_id'";
      $sql = mysqli_query($con, $query);
      if ($sql) {
         $_SESSION['status'] = "Success";
        header('Location: list-product.php');
      }
      else{
         $_SESSION['status'] = "fail";
       echo'dd';
      }
   
}

if(isset($_POST['dlPd'])){
   $userid = $_POST['delete_pd'];
   $query = "DELETE FROM products WHERE id = '$userid' ";
    
   $query_run = mysqli_query($con, $query);

   if($query_run){
      $_SESSION['status'] = "Success";
      header('Location: list-product.php');
   }
   else{
      $_SESSION['status'] = "fail";
      header('Location: username.php');
   }
}

?>