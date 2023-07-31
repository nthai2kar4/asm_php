<header>

<div class="header-top">

  <div class="container">

    <ul class="header-social-container">

      <li>
        <a href="https://www.facebook.com/profile.php?id=100025386050403" class="social-link" target="_blank">
          <ion-icon name="logo-facebook"></ion-icon>
        </a>
      </li>

      <li>
        <a href="https://twitter.com/nthai004" class="social-link" target="_blank">
          <ion-icon name="logo-twitter"></ion-icon>
        </a>
      </li>

      <li>
        <a href="https://www.instagram.com/thai220904/" class="social-link" target="_blank">
          <ion-icon name="logo-instagram"></ion-icon>
        </a>
      </li>

      <li>
        <a href="#" class="social-link">
          <ion-icon name="logo-linkedin"></ion-icon>
        </a>
      </li>

    </ul>


    <div class="header-top-actions">

      <!-- <select name="currency">

        <option value="usd">USD &dollar;</option>
        <option value="eur">EUR &euro;</option>

      </select> -->

      <div name="language" class="d-flex align-items-sm-center">
      <button class="btn-primary btn"  onclick="window.location.href='login-user.php'">Đăng nhập</button>
      
      </div>

    </div>

  </div>

</div>

<div class="header-main">

  <div class="container">

    <a href="#" class="header-logo">
      <img src="./assets/images/hihi/logo.png" alt="Anon's logo" width="120" height="36">
    </a>

    <div class="header-search-container">

      <input type="search" name="search" class="search-field" placeholder="Tìm kiếm.......">

      <button class="search-btn">
        <ion-icon name="search-outline"></ion-icon>
      </button>

    </div>

    <div class="header-user-actions">

      <button class="action-btn">
        <ion-icon name="person-outline"></ion-icon>
      </button>

      <button class="action-btn">
        <ion-icon name="heart-outline"></ion-icon>
        <span class="count">0</span>
      </button>

      <button class="action-btn" onclick="window.location.href='login-user.php'">
        <ion-icon name="bag-handle-outline"></ion-icon>
        <span class="count">0</span>
      </button>

    </div>

  </div>

</div>

<nav class="desktop-navigation-menu">

  <div class="container">

    <ul class="desktop-menu-category-list">

      <li class="menu-category">
        <a href="index.php" class="menu-title">trang chủ</a>
      </li>

      <li class="menu-category">
        <a href="#" class="menu-title">Giảm giá</a>

       
      </li>

      <li class="menu-category">
        <a href="product.php" class="menu-title">cửa hàng</a>

        <ul class="dropdown-list">

          <li class="dropdown-item">
            <a href="#">Tất cả</a>
          </li>

          <li class="dropdown-item">
            <a href="#">Sản phẩm mới</a>
          </li>

          <li class="dropdown-item">
            <a href="#">Áo</a>
          </li>

          <li class="dropdown-item">
            <a href="#">quần</a>
          </li>

          <li class="dropdown-item">
            <a href="#">áo khoác</a>
          </li>

          <li class="dropdown-item">
            <a href="#">phụ kiện</a>
          </li>
        </ul>
      </li>

      <li class="menu-category">
        <a href="#" class="menu-title">Bộ sưu tập</a>

        <!-- <ul class="dropdown-list">

          <li class="dropdown-item">
            <a href="#">xu hướng thời trang</a>
          </li>

          <li class="dropdown-item">
            <a href="#">kiến thức thời trang</a>
          </li>

        </ul> -->
      </li>

      <li class="menu-category">
        <a href="#" class="menu-title">Bài viết</a>

        <ul class="dropdown-list">

          <li class="dropdown-item">
            <a href="#">xu hướng thời trang</a>
          </li>

          <li class="dropdown-item">
            <a href="#">kiến thức thời trang</a>
          </li>

        </ul>
      </li>

      <li class="menu-category">
        <a href="#" class="menu-title">chăm sóc khách hàng</a>

        <ul class="dropdown-list">

          <li class="dropdown-item">
            <a href="#">mua hàng dễ dàng</a>
          </li>

          <li class="dropdown-item">
            <a href="#">đổi trả & bảo hành</a>
          </li>

          <li class="dropdown-item">
            <a href="#">thành viên</a>
          </li>

          <li class="dropdown-item">
            <a href="#">vận chuyển</a>
          </li>

        </ul>
      </li>

      <li class="menu-category">
        <a href="#" class="menu-title">Liên hệ</a>
      </li>

      <li class="menu-category">
        <a href="#" class="menu-title">tuyển dụng</a>
      </li>

    </ul>

  </div>

</nav>

<div class="mobile-bottom-navigation">

  <button class="action-btn" data-mobile-menu-open-btn>
    <ion-icon name="menu-outline"></ion-icon>
  </button>

  <button class="action-btn">
    <ion-icon name="bag-handle-outline"></ion-icon>

    <span class="count">0</span>
  </button>

  <button class="action-btn">
    <ion-icon name="home-outline"></ion-icon>
  </button>

  <button class="action-btn">
    <ion-icon name="heart-outline"></ion-icon>

    <span class="count">0</span>
  </button>

  <button class="action-btn" data-mobile-menu-open-btn>
    <ion-icon name="grid-outline"></ion-icon>
  </button>

</div>

<nav class="mobile-navigation-menu  has-scrollbar" data-mobile-menu>

  <div class="menu-top">
    <h2 class="menu-title">Menu</h2>

    <button class="menu-close-btn" data-mobile-menu-close-btn>
      <ion-icon name="close-outline"></ion-icon>
    </button>
  </div>

  <ul class="mobile-menu-category-list">

    <li class="menu-category">
      <a href="#" class="menu-title">Home</a>
    </li>

    <li class="menu-category">

      <button class="accordion-menu" data-accordion-btn>
        <p class="menu-title">Men's</p>

        <div>
          <ion-icon name="add-outline" class="add-icon"></ion-icon>
          <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
        </div>
      </button>

      <ul class="submenu-category-list" data-accordion>

        <li class="submenu-category">
          <a href="#" class="submenu-title">Shirt</a>
        </li>

        <li class="submenu-category">
          <a href="#" class="submenu-title">Shorts & Jeans</a>
        </li>

        <li class="submenu-category">
          <a href="#" class="submenu-title">Safety Shoes</a>
        </li>

        <li class="submenu-category">
          <a href="#" class="submenu-title">Wallet</a>
        </li>

      </ul>

    </li>

    <li class="menu-category">

      <button class="accordion-menu" data-accordion-btn>
        <p class="menu-title">Women's</p>

        <div>
          <ion-icon name="add-outline" class="add-icon"></ion-icon>
          <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
        </div>
      </button>

      <ul class="submenu-category-list" data-accordion>

        <li class="submenu-category">
          <a href="#" class="submenu-title">Dress & Frock</a>
        </li>

        <li class="submenu-category">
          <a href="#" class="submenu-title">Earrings</a>
        </li>

        <li class="submenu-category">
          <a href="#" class="submenu-title">Necklace</a>
        </li>

        <li class="submenu-category">
          <a href="#" class="submenu-title">Makeup Kit</a>
        </li>

      </ul>

    </li>

    <li class="menu-category">

      <button class="accordion-menu" data-accordion-btn>
        <p class="menu-title">Jewelry</p>

        <div>
          <ion-icon name="add-outline" class="add-icon"></ion-icon>
          <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
        </div>
      </button>

      <ul class="submenu-category-list" data-accordion>

        <li class="submenu-category">
          <a href="#" class="submenu-title">Earrings</a>
        </li>

        <li class="submenu-category">
          <a href="#" class="submenu-title">Couple Rings</a>
        </li>

        <li class="submenu-category">
          <a href="#" class="submenu-title">Necklace</a>
        </li>

        <li class="submenu-category">
          <a href="#" class="submenu-title">Bracelets</a>
        </li>

      </ul>

    </li>

    <li class="menu-category">

      <button class="accordion-menu" data-accordion-btn>
        <p class="menu-title">Perfume</p>

        <div>
          <ion-icon name="add-outline" class="add-icon"></ion-icon>
          <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
        </div>
      </button>

      <ul class="submenu-category-list" data-accordion>

        <li class="submenu-category">
          <a href="#" class="submenu-title">Clothes Perfume</a>
        </li>

        <li class="submenu-category">
          <a href="#" class="submenu-title">Deodorant</a>
        </li>

        <li class="submenu-category">
          <a href="#" class="submenu-title">Flower Fragrance</a>
        </li>

        <li class="submenu-category">
          <a href="#" class="submenu-title">Air Freshener</a>
        </li>

      </ul>

    </li>

    <li class="menu-category">
      <a href="#" class="menu-title">Blog</a>
    </li>

    <li class="menu-category">
      <a href="#" class="menu-title">Hot Offers</a>
    </li>

  </ul>

  <div class="menu-bottom">

    <ul class="menu-category-list">

      <li class="menu-category">

        <button class="accordion-menu" data-accordion-btn>
          <p class="menu-title">Language</p>

          <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
        </button>

        <ul class="submenu-category-list" data-accordion>

          <li class="submenu-category">
            <a href="#" class="submenu-title">English</a>
          </li>

          <li class="submenu-category">
            <a href="#" class="submenu-title">Espa&ntilde;ol</a>
          </li>

          <li class="submenu-category">
            <a href="#" class="submenu-title">Fren&ccedil;h</a>
          </li>

        </ul>

      </li>

      <li class="menu-category">
        <button class="accordion-menu" data-accordion-btn>
          <p class="menu-title">Currency</p>
          <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
        </button>

        <ul class="submenu-category-list" data-accordion>
          <li class="submenu-category">
            <a href="#" class="submenu-title">USD &dollar;</a>
          </li>

          <li class="submenu-category">
            <a href="#" class="submenu-title">EUR &euro;</a>
          </li>
        </ul>
      </li>

    </ul>

    <ul class="menu-social-container">

      <li>
        <a href="#" class="social-link">
          <ion-icon name="logo-facebook"></ion-icon>
        </a>
      </li>

      <li>
        <a href="#" class="social-link">
          <ion-icon name="logo-twitter"></ion-icon>
        </a>
      </li>

      <li>
        <a href="#" class="social-link">
          <ion-icon name="logo-instagram"></ion-icon>
        </a>
      </li>

      <li>
        <a href="#" class="social-link">
          <ion-icon name="logo-linkedin"></ion-icon>
        </a>
      </li>

    </ul>

  </div>

</nav>

</header>