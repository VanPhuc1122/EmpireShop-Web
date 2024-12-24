
<!doctype html>
<html lang="vi" class="light-mode">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="" />
    <meta charset="utf-8" /><link rel="profile" href="https://gmpg.org/xfn/11" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>
	 Empire Luxury- Khẳng Định Bãn Lĩnh Với Các Thương Hiệu Top Đầu Cả Nước
    </title>
    <meta property="og:locale" content="vi_VN" /><meta property="og:site_name" content="Luxyry Shopping" />
    <link rel="stylesheet" href="https://cdn.luxshopping.vn/assets/bootstrap/css/bootstrap.min.css?v=2" media="all" /><link href="https://cdn.luxshopping.vn/assets/css/reboot.css?v=2" rel="stylesheet" media="all" /><link href="https://cdn.luxshopping.vn/assets/css/global.css?v=2" rel="stylesheet" media="all" /><link href="https://cdn.luxshopping.vn/assets/css/update-07-06.css?v=2" rel="stylesheet" media="all" />
    <meta property="og:type" content="website">
    <meta name="description" content="Khẳng Định Bãn Lĩnh Với Các Thương Hiệu Top Đầu Cả Nước.">
    <meta property="og:title" content="Empire Luxury- Khẳng Định Bãn Lĩnh Với Các Thương Hiệu Top Đầu Cả Nước">
    <link rel="stylesheet" href="/project/public/assets/css/stylepage.css">
    <!-- Sử dụng thư viện Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css">
    <style>
        .upperHeader .icon-map-pin {
            margin-right: 10px;
        } 
        .mobileHeaderIcon button.cart {
            margin-bottom: 0 !important
        }
        .radius4 {
            border-radius: 5rem
        }
    </style>
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script> 
    <script defer src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<?php
    if (!isset($_SESSION['username']) || $_SESSION['id_quyen'] != 1) {
        echo 'Vui Lòng Đăng Nhập Với Tài Khoản Khách Hàng Để Trải Nghiệm';
    }
?>
<body class="home mobile-nav-visible">
    <!-- Bao bọc trang -->
    <div class="wrapper"> 
        <div class="notification"></div>
        <header class="main-header header">
            <a class="skip-content" id="skipToMainContent" href="#mainContent"></a>  
            <div class="navigationMobile container text-center">
                <div class="row middleHeader">
                    <div class="col-md-4 col-xs-4 main-left">
                        <div class="mobileHeaderIcon"> 
                            <button class="mobile-navigation-button pull-left hidden-desktop icon-menu" title="Menu" aria-label="Menu"></button>
                            <button class="theme-switch-wrapper theme-switch" title="Switch Mode" aria-label="Switch Mode"><span class="icon-sun"></span></button>

                            <?php if (isset($_SESSION['username'])): ?>
                                    <div class="user-info">
                                        <?php if ($_SESSION['id_quyen'] == 1): ?>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle" onclick="toggleMenu()">
                                                    Chào, <?php echo htmlspecialchars($_SESSION['username']['Tendangnhap']); ?>
                                                </button>
                                                <div class="dropdown-menu" id="userDropdown">
                                                    <form action="index.php?url=logout" method="POST" name="dangxuat">
                                                        <button type="submit" name="logout" class="dropdown-item">Đăng xuất</button>
                                                    </form>
                                                    <a href="" class="dropdown-item">Xem Đơn Hàng</a>
                                                </div>
                                            </div>
                                        <?php elseif ($_SESSION['id_quyen'] == 2): ?>
                                            <script>
                                                window.location.href = "/project/Admin/MVC/index.php";
                                            </script>
                                        <?php endif; ?>
                                    </div>
                                <?php else: ?>
                                    <button class="icon-personal" aria-label="Login" title="Login">
                                        <a href="/project/views/login/login.php"><i class="bi bi-person"></i></a>
                                    </button>
                                <?php endif; ?>
                            </div>          
                    </div>
                    <div class="col-md-4 col-xs-4 siteLogo">
                        <img src="/project/public/assets/image/Logo/logo_luxury.png" alt="Empire Luxury" class="logotop">
                    </div>
                    <div class="col-md-4 col-xs-4 main-right">
                        <div class="mobileHeaderIcon">
                            <button id="search-trigger" class="search-button icon-magnifier" aria-label="Search Button" title="Tìm Kiếm"></button>
                            <button class="header-wishlist icon-heart-o relative hidden-mobile" title="Ưa thích" data-bs-toggle="offcanvas" data-bs-target="#sidebar-fav" aria-controls="sidebar-fav" arial-label="Sản phẩm ưa thích">
                               
                            </button>
                            <button class="cart icon-cart-new relative" aria-label="Giỏ hàng" title="Giỏ hàng" data-bs-toggle="offcanvas" data-bs-target="#sidebar-cart" aria-controls="sidebar-cart">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="navigationBar navigationBar-desktop hidden-mobile hidden-tablet">
                <div class="container-fluid">
                    <div class="row relative">
                        <div class="col-md-12 positionStatic">
                            <div class="mainNav">
                                <ul class="rolloverArea">
                                    <li class="desktopMainNavNode has-dropdown">
                                        <a href="index.php?url=thuonghieu" title="Thương Hiệu">Thương hiệu</a>
                                    </li>
                                    <li class="desktopMainNavNode"><a href="index.php?url=donghonam" title="Đồng hồ Nam">Đồng hồ Nam</a>
                                    </li>
                                    <li class="desktopMainNavNode"><a href="index.php?url=donghonu" title="Đồng hồ Nữ">Đồng hồ Nữ</a>
                                    </li>
                                    <li class="desktopMainNavNode"><a href="index.php?url=donghocapdoi" title="Đồng hồ cặp đôi">Đồng hồ cặp đôi</a>
                                    </li>
                                    <li class="desktopMainNavNode"><a href="" title="Sản phẩm HOT">Sản phẩm HOT</a>
                                    </li>
                                    <li class="desktopMainNavNode"><a href="" title="Sale">Sale</a>
                                    </li>
                                    <li class="desktopMainNavNode"><a href="" title="Phân loại đồng hồ">Phân loại đồng hồ</a>
                                    </li>
                                    <li class="desktopMainNavNode"><a href="" title="Special Event">Special Event</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="mobile-navigation" class="relative" style="transform: translateX(-100%);">
                <div class="mobile-navigation-header">
                    <div class="mobile-logo" style="margin-left: 10px;">
                        <img src="/project/public/assets/image/Logo/logo_luxury.png" alt="Empire Luxury">
                    </div>
                </div>
                <div class="mobile-navigation-body">
                    <ul class="top-level-menu">
                        <li class="home-menu">Menu</li>
                        <li class="has-sub-menu mobileNavNode ">
                            <a href="index.php?url=thuonghieu" id="">Thương Hiệu</a>
                        </li>
                        <li class="mobileNavNode "><a href="index.php?url=donghonam" class="mobileNavLink ">Đồng hồ Nam</a>
                        </li>
                        <li class="mobileNavNode "><a href="index.php?url=donghonu" class="mobileNavLink ">Đồng hồ Nữ</a>
                        </li>
                        <li class="mobileNavNode "><a href="index.php?url=donghocapdoi" class="mobileNavLink ">Đồng hồ cặp đôi</a>
                        </li>
                        <li class="mobileNavNode "><a href="" class="mobileNavLink ">Sản phẩm HOT</a>
                        </li>
                        <li class="has-sub-menu mobileNavNode">
                            <a href="">Phân loại đồng hồ</a>
                        </li>
                        <li class="mobileNavNode "><a href="" class="mobileNavLink ">Sale</a></li>
                        <li class="mobileNavNode "><a href="" class="mobileNavLink ">Special Event</a></li>
                    </ul>
                </div>
                    <button class="mobile-navigation-close icon-cross" title="Close">
                </button>
            </div>
            <div class="end-sticky"></div>
        </header>
<script>
        function toggleMenu() {
            const dropdown = document.getElementById("userDropdown");
            dropdown.classList.toggle("show");
        }
        // đóng menu khi bấm ra ngoài
        window.onclick = function(event) {
            if (!event.target.matches('.dropdown-toggle')) {
                const dropdowns = document.getElementsByClassName("dropdown-menu");
                for (let i = 0; i < dropdowns.length; i++) {
                    const openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
</script>