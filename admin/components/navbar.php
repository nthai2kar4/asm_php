<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav" style="margin-left:650px;">
      <li class="nav-item">
      <a class="nav-link" data-widget="navbar-search" href="#" role="button" style="color:red;">
          <?php echo'Chào, '; echo $_SESSION['login_admin']?>
        </a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav">
      <!-- Navbar Search -->
      <li class="nav-item">
        <form method="POST">
          <button name="logout" class="btn-primary btn">Đăng xuất</button>
          </form>
      </li>
      <?php
  if(isset($_POST['logout'])){
    session_destroy();
    header('Location: login.php');
  }
?> 
  
  </nav>
  