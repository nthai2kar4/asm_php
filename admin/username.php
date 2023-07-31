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
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thêm thông tin khách hàng</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    <form action="code.php" method="post">
      <div class="modal-body">
        <div class="form-group">
            <label for="">Họ và tên</label>
            <input type="text" name="name" class="form-control" placeholder="Họ và tên của bạn...">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="year" class="form-control" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="">Mật khẩu</label>
            <input type="text" name="idsv" class="form-control" placeholder="Mật khẩu">
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
        <button type="submit" name="saveChange" class="btn btn-primary">Lưu</button>
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
        <input type="hidden" name="delete_id" class="dl_user_id">
        <P>Bạn có chắc chắc muốn xóa?</P>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
        <button type="submit" name="dlUser" class="btn btn-primary">Có</button>
      </div>
    </form>
    </div>
  </div>
</div>
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <form action="code.php" method="post">

          </form>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="container">
        <div class="row">
          <div class="col-md-12">
      <div class="container-fluid">
      <div class="card">
              <div class="card-header">
                <h3 class="card-title">Thông Tin Khách Hàng</h3>
                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary float-right">Thêm</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Họ và tên</th>
                    <th>Email</th>
                    <th>Mật khẩu</th>
                    <th>Hành động</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                      $query = 'SELECT * FROM users ';
                      $sql = mysqli_query($con, $query);
                      if (mysqli_num_rows($sql) > 0) {
                        while ($row = mysqli_fetch_array($sql)){
                          ?>
                            <tr>
                            <td><?php echo $row['id']; ?></td>
                              <td><?php echo $row['name']; ?></td>
                              <td><?php echo $row['email']; ?></td>
                              <td><?php echo md5($row['password']); ?></td>
                              <td>
                                <a href="register-edit.php?users_id=<?php echo $row['id'];?>" class="btn btn-info btn-sm">Sửa</a>
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
