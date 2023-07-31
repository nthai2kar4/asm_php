<?php 
require('admin/db.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nhựt Thái Shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
</head>

<body>
<div class="container">
        <div class="box form-box">
            <header>Đăng xuất</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Tên đầy đủ</label>
                    <input type="text" name="name" id="name" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="password">Mật khẩu</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="age">Xác nhận lại mật khẩu</label>
                    <input type="password" name="confirm-password" id="password" autocomplete="off" required>
                </div>
                <div class="field">
                    
                    <input type="submit" class="btn" name="dangki" value="Register" required>
                </div>
                <div class="links">
                    Bạn đã có tài khoản? <a href="login-user.php">Đăng nhập</a>
                </div>
            </form>
        </div>
      </div>

</body>
<?php
if(isset($_POST['dangki'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm-password'];
    $errors = array();
    if(empty($name) or empty($email) or empty($password) or empty($confirm)){
       array_push($errors, "All fields are required");
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
       array_push($errors, "Email is not valid");
    }
    if($password!==$confirm){
       array_push($errors, "Password does not match");
    }
    if(count($errors)>0){
       foreach($errors as $error){
       echo "<div class='alert alert-danger'>$error</div>";
    }
    }
    else{
        $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
        $query = mysqli_stmt_init($con);
        $hehe = mysqli_stmt_prepare($query,$sql);
        if($hehe){
            mysqli_stmt_bind_param($query,"sss",$name,$email,$password);
            mysqli_stmt_execute($query);
            echo "<div class='alert alert-success'>Bạn đã đăng kí thành công</div>";
        }
        else{
            die("Error");
        }
    }
 }
    ?>
</html>