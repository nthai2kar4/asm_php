<?php 
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Login</title>
</head>
<body>
      <div class="container">
        <div class="box form-box">
            <?php 
              include('./admin/db.php');
              if(isset($_POST['submit'])){
                $email = mysqli_real_escape_string($con,$_POST['email']);
                $password = mysqli_real_escape_string($con,$_POST['password']);

                $result = mysqli_query($con, "SELECT * FROM users WHERE email= '$email' AND password= '$password' ") or die("Select Error");
                if(mysqli_num_rows($result)==1){
                    session_start();
                    $_SESSION['login_user'] = $_POST['email'];
                    header('Location: index1.php');
                  }
                  else{
                    echo "<div class='message'>
                          <p>Email hoặc mật khẩu không đúng</p>
                           </div> <br>";
                       echo "<a href='login-user.php'><button class='btn'>Go Back</button>";
                  }
              }else{

            
            ?>
            <header>Đăng nhập</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Mật khẩu</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Đăng nhập" required>
                </div>
                <div class="links">
                    Bạn chưa có tài khoản? <a href="register.php">Đăng kí ngay</a>
                </div>
            </form>
        </div>
        <?php } ?>
      </div>
</body>
</html>