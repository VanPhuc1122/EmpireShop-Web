<!doctype html>
<html lang="vi" class="light-mode">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="" />
    <meta charset="utf-8" /><link rel="profile" href="https://gmpg.org/xfn/11" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>
	 Empire Luxury- Khẳng Định Bản Lĩnh Tinh Hoa Trong Thế Giới Đồng Hồ
    </title>
    <meta property="og:locale" content="vi_VN" /><meta property="og:site_name" content="Luxyry Shopping" />
    <link rel="stylesheet" href="https://cdn.luxshopping.vn/assets/bootstrap/css/bootstrap.min.css?v=2" media="all" /><link href="https://cdn.luxshopping.vn/assets/css/reboot.css?v=2" rel="stylesheet" media="all" /><link href="https://cdn.luxshopping.vn/assets/css/global.css?v=2" rel="stylesheet" media="all" /><link href="https://cdn.luxshopping.vn/assets/css/update-07-06.css?v=2" rel="stylesheet" media="all" />
    <meta property="og:type" content="website">
    <meta name="description" content="Công ty đồng hồ chuyên phân phối các sản phẩm đồng hồ hàng hiệu, đồng hồ Thụy Sỹ, đồng hồ chính hãng, đồng hồ nam nữ cao cấp nhập khẩu từ các thị trường lớn trên thế giới.">
    <meta property="og:title" content="Empire Luxury- Nơi hội tụ các thương hiệu Đồng hồ chính hãng nổi tiếng Thế giới">
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
<body>
    <!-- header -->
    <?php 
     require_once __DIR__ . "/../views/footer/header1.php";
    ?>
<?php 
    $url = isset($_GET['url']) ? $_GET['url'] : "page";
    switch ($url) {
        case 'page':
            require_once __DIR__ . "/../views/home/page.php";
            break;
        case 'search':
            require_once __DIR__ . '/../views/home/search.php';
            break;
        case 'locsanpham':
            require_once __DIR__ . '/../views/product/locsanpham.php';
            break;
        case 'detail':
            require_once __DIR__ . '/../views/detail/detail.php';
            break;
        case 'binhluan':
            require_once __DIR__ . '/../views/detail/detail.php';
            break;
        case 'donghonam':
            require_once __DIR__ . '/../controllers/productcontroller.php';
            $controller = new ProductController();
            $controller->sapxepsanpham(); 
            break;
        case 'donghonu':
            require_once __DIR__ . '/../controllers/productcontroller.php';
            $controller = new ProductController();
            $controller->sx_sanpham_nu(); 
            break;
        case 'donghocapdoi':
            require_once __DIR__ . '/../controllers/productcontroller.php';
            $controller = new ProductController();
            $controller->sx_sanpham_capdoi(); 
            break;
        case 'thuonghieu':
            require_once __DIR__ . '/../views/brand/thuonghieu.php';
            break;
        case 'cart':
            require_once __DIR__ . '/../views/cart/cart.php';
            break;
        case 'checkout':
            $url = isset($_GET['xuli']) ? $_GET['xuli'] : 'list';
            switch ($url) {
                case 'list':
                    require_once __DIR__ . '/../views/order/checkout.php';
                    break;
                case 'order_sucess':
                    require_once __DIR__ . '/../views/order/order_sucess.php';
                    break;
                default:
                require_once __DIR__ . '/../views/order/checkout.php';
                    break;
            }
            break;
        default:
            break;
    }
?>
     <!-- Footer -->
     <?php 
     require_once __DIR__ . "/../views/footer/footer1.php";
     ?>
</body>
<script defer src="https://cdn.luxshopping.vn/assets/bootstrap/js/bootstrap.min.js" id="bootstrap-js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script defer src="https://cdn.luxshopping.vn/assets/js/sticksy.min.js" id="sticky-js"></script>
<script defer src="https://cdn.luxshopping.vn/assets/js/main.js?v=20" id="main-js"></script>  