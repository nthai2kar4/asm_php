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
    include 'components/sidebar2.php';
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
                                    <a href="list-product.php" class="btn btn-primary float-right">Quay lại</a>
                                </div>
                                <!-- /.card-header -->

                                <!-- /.card-body -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <form action="code.php" method="post" enctype="multipart/form-data">
                                                <div class="modal-body">
                                                  <?php
                                                  if(isset($_GET['products_id'])){
                                                    $products_id = $_GET['products_id'];
                                                    $query = "SELECT * FROM products WHERE id = '$products_id' limit 1";
                                                    $query_run = mysqli_query($con, $query);

                                                    if(mysqli_num_rows($query_run) > 0){
                                                        $pdItem = mysqli_fetch_array($query_run);
                                                        ?>
                                                        <h4><?=$pdItem['name']?></h4>
                                                        <?php
                                                      foreach($query_run as $row){
                                                        ?>
                                                        <div class="form-group">
                                                        <label for="">Tên</label>
                                                        <input type="text" name="name" id="slug" onkeyup="ChangeToSlug()" value="<?php echo $row['name']?>" class="form-control"
                                                            placeholder="Enter your name...">
                                                    </div>
                                                    <input type="hidden" name="products_id" value="<?=$pdItem['id']?>">
                                                    <div class="form-group">
                                                        <label for="">Slug</label>
                                                        <input type="text" name="slug" id="convert_slug" value="<?=$pdItem['slug']?>"class="form-control"
                                                            placeholder="Email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Mô tả</label>
                                                        <input type="text" name="content" value="<?=$pdItem['content']?>" class="form-control"
                                                            placeholder="password">
                                                    </div>
                                                    <div class="form-group"> 
                                                        <label for="">Ảnh</label>
                                                        <input type="file" name="thumbnail" class="form-control">
                                                            <input type="hidden" name="image" value="<?=$pdItem['thumbnail']?>">
                                                    </div>
                                                    <img src="<?=$pdItem['thumbnail']?>" width="50px" height="50px" alt="">
                                                    <div class="form-group">
                                                        <label for="">Giá</label>
                                                        <input type="text" name="price" value="<?=$pdItem['price']?>" class="form-control"
                                                            placeholder="password">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Giá gốc</label>
                                                        <input type="text" name="sale_price" value="<?=$pdItem['sale_price']?>" class="form-control"
                                                            placeholder="password">
                                                    </div>

                                                </div>
                                                        <?php
                                                      }
                                                  }
                                                }
                                                  ?>
                                                    
                                                <div class="modal-footer">
                                                    <button type="submit" name="editProduct" class="btn btn-primary">Lưu
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