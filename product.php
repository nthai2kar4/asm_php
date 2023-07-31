<?php
    include('admin/db.php');     
    $product = mysqli_query($con, "SELECT * FROM products")   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include('components/stylesheet.php');
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
    ?>
<div class="product-main">
<div class="product-grid">
    <?php foreach ($product as $key=>$value):?>

    <form action="add-product.php" method="POST">
        <div class="showcase">

            <div class="showcase-banner">

                <img src="./admin/<?php echo $value['thumbnail'];?>"
                    alt="Mens Winter Leathers Jackets" width="300" heigth="300"
                    class="product-img">
                <div class="showcase-actions">

                    <button class="btn-action">
                        <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                    </button>

                    <button class="btn-action" name="addto" type="submit">
                        <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                </div>
            </div>
            <div class="showcase-content">
                <a href="" class="showcase-category text-black fw-700"><?php echo $value['name'];?></a>
                <div class="showcase-rating">
                    <p style="font-size:small; color:black;"><?php echo $value['content'];?></p>
                </div>
                <div class="price-box">
                    <p class="price text-danger"><?php echo number_format($value['price']);?> vnđ</p>
                    <del><?php echo number_format($value['sale_price']);?></del>
                </div>
                <input type="hidden" name="name" value="<?php echo $value['name'];?>">
                <input type="hidden" name="price" value="<?php echo $value['price'];?>">
            </div>

        </div>
    </form>
    <?php endforeach?>


</div>

</div>
<?php
include('components/footer.php');
?>
</body>
<script src="./assets/js/script.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</html>