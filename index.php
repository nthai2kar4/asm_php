<?php
  include('admin/db.php');     
  $product = mysqli_query($con, "SELECT * FROM products")   
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  include('components/stylesheet.php')
  ?>
</head>
<body>
  <div class="overlay" data-overlay></div>
  <div class="notification-toast" data-toast>

    <button class="toast-close-btn" data-toast-close>
      <ion-icon name="close-outline"></ion-icon>
    </button>

    <div class="toast-banner">
      <img src="./assets/images/hihi/z4366453314543_2510b1827ca2aeb5f73d82412b5e639d-400x500.jpg" alt="Rose Gold Earrings" width="80" height="70">
    </div>

    <div class="toast-detail">

      <p class="toast-message">
        Levent
      </p>

      <p class="toast-title">
        Rose Gold Earrings
      </p>

      <p class="toast-meta">
        <time datetime="PT2M">2 Minutes</time> ago
      </p>

    </div>

  </div>
  <?php
    include('components/header.php');
    include('components/main1.php');
    include('components/footer.php');
  ?>
  <script src="./assets/js/script.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>