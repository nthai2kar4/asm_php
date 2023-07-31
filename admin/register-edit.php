<?php 
require('db.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nhựt Thái Shop</title>

    <?php
    include 'components/stylesheet.php'
  ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <?php 
    include 'components/navbar.php';
    include 'components/sidebar1.php';
  ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->

            <!-- Modal -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="container-fluid">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Chỉnh sửa</h3>
                                    <a href="username.php" class="btn btn-primary float-right">Back</a>
                                </div>
                                <!-- /.card-header -->

                                <!-- /.card-body -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <form action="code.php" method="post">
                                                <div class="modal-body">
                                                  <?php
                                                  
                                                  if(isset($_GET['users_id'])){
                                                    $users_id = $_GET['users_id'];
                                                    $query = "SELECT * FROM users WHERE id = '$users_id' limit 1";
                                                    $query_run = mysqli_query($con, $query);

                                                    if(mysqli_num_rows($query_run) > 0){
                                                      foreach($query_run as $row){
                                                        ?>
                                                        <div class="form-group">
                                                        <label for="">Name</label>
                                                        <input type="text" name="name" value="<?php echo $row['name']?>" class="form-control"
                                                            placeholder="Enter your name...">
                                                    </div>
                                                    <input type="hidden" name="users_id" value="<?php echo $row['id']?>">
                                                    <div class="form-group">
                                                        <label for="">Email</label>
                                                        <input type="email" name="year" value="<?php echo $row['email']?>"class="form-control"
                                                            placeholder="Email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Password</label>
                                                        <input type="text" name="idsv" value="<?php echo $row['password']?>" class="form-control"
                                                            placeholder="password">
                                                    </div>

                                                </div>
                                                        <?php
                                                      }
                                                  }
                                                }
                                                  ?>
                                                    
                                                <div class="modal-footer">
                                                    <button type="submit" name="editUser" class="btn btn-primary">Lưu
                                                        thay đổi</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.container-fluid -->
                    </div>
                </div>
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php
    include 'components/footer.php';
    ?>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <?php
    include'components/script.php';
    ?>

</body>

</html>