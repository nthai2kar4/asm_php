<?php 
require('db.php');
require('hihi.php');
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
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <form action="code.php" method="post">

          </form>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thêm Sản Phẩm</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    <form action="hihi.php" method="post" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" id="slug" onkeyup="ChangeToSlug()" class="form-control" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="">Slug</label>
            <input type="text" name="slug" id="convert_slug" class="form-control" placeholder="Slug">
        </div>
        <div class="form-group">
            <label for="">Content</label>
            <input type="text" name="content" class="form-control" placeholder="Content">
        </div>
        <div class="form-group">    
            <label for="">Thumbnail</label>
            <input type="file" name="thumbnail" class="form-control" placeholder="Thumbnail" require>
        </div>
        <div class="form-group">
            <label for="">Price</label>
            <input type="text" name="price" class="form-control" placeholder="Price">
        </div>
        <div class="form-group">
            <label for="">Sale_price</label>
            <input type="text" name="sale_price" class="form-control" placeholder="Sale_price">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
        <button type="submit" name="saveAdd" class="btn btn-primary">Lưu</button>
      </div>
    </form>
    </div>
  </div>
</div>
 <!-- dlmodal -->
 <div class="modal fade" id="dlmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    <form action="code.php" method="post">
      <div class="modal-body">
        <input type="hidden" name="delete_pd" class="dl_user_id">
        <P>Bạn có chắc chắc muốn xóa?</P>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
        <button type="submit" name="dlPd" class="btn btn-primary">Có</button>
      </div>
    </form>
    </div>
  </div>
</div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="container">
        <div class="row">
          <div class="col-md-12">
      <div class="container-fluid">
      <div class="card">
              <div class="card-header">
                <h3 class="card-title">Sản Phẩm</h3>
                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary float-right">Thêm</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Tên</th>
                    <th>Slug</th>
                    <th>Mô tả</th>
                    <th style="width:100px;">Ảnh</th>
                    <th>Giá</th>
                    <th>Giá gốc</th>
                    <th style="width:82px;">Hành động</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                      $query = 'SELECT * FROM products';
                      $sql = mysqli_query($con, $query);
                      if (mysqli_num_rows($sql) > 0) {
                        while ($row = mysqli_fetch_array($sql)){
                          ?>
                            <tr>
                            <td><?php echo $row['id']; ?></td>
                              <td><?php echo $row['name']; ?></td>
                              <td><?php echo $row['slug']; ?></td>
                              <td><?php echo $row['content']; ?></td>
                              <td><?php 
                                $image_path = $row['thumbnail'];
                                echo '<img style = "width: 50%; height: 90%; " src="' . $image_path . '" alt="Image">';      
                             ?></td>
                              <td><?php echo number_format($row['price']); ?></td>
                              <td><?php echo number_format($row['sale_price']); ?></td>
                              <td>
                                <a href="edit-product.php?products_id=<?php echo $row['id'];?>" class="btn btn-info btn-sm">Sửa</a>
                                <button type="button" value="<?php echo $row['id'];?>" id="dlbtn" class="btn btn-danger btn-sm dlbtn">Xóa</button>
                              </td>
                            </tr>
                          <?php
                        }
                      }
                    ?>



                  

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
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
    include'components/script.php'
?>

</body>
</html>

<script>
  $(document).ready(function(){
    $('.dlbtn').click(function(e){
      e.preventDefault(); 

      var user_id = $(this).val();
      // console.log(user_id);
      $('.dl_user_id').val(user_id);
      $('#dlmodal').modal('show');
    });
  });
</script>
